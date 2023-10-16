<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worktime;
use Illuminate\Support\Facades\Auth;

class WorktimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show All Weak days with worktimes

        $days = [];

        foreach(weakDays() as $weakDay){

            $worktimes = Worktime::where('doctor_id', Auth::user()->id)
                ->where('day', $weakDay)
                ->first();

            if($worktimes){

                $days[] = [
                    'day'       => $weakDay,
                    'from'      => $worktimes->from,
                    'to'        => $worktimes->to,
                    'status'    => $worktimes->status,
                ];
            }else{

                $days[] = [
                    'day'       => $weakDay,
                    'from'      => null,
                    'to'        => null,
                    'status'    => 0,
                ];
            }


         }

        return response()->json([
            'data'      => $days,
        ], 200);
    }




    public function update(Request $request)
    {
        // Update Worktimes

        $worktimes = Worktime::where('doctor_id', Auth::user()->id)
            ->where('day', $request->day)
            ->first();

        if($worktimes){

            $worktimes->update([
                'from'      => $request->from,
                'to'        => $request->to,
            ]);

        }else{

            Worktime::create([
                'doctor_id' => Auth::user()->id,
                'day'       => $request->day,
                'from'      => $request->from,
                'to'        => $request->to,
                'status'    => 1,
            ]);
        }

        return $this->success('Worktimes Updated Successfully');
    }



    public function status(Request $request)
    {
         $request->validate([
            'day'       => 'required',
            'status'    => 'required',
        ]);

        $worktimes = Worktime::where('doctor_id', Auth::user()->id)
            ->where('day', $request->day)
            ->first();

        if($worktimes){

            $worktimes->update([
                'status'    => $request->status,
            ]);

            return $this->success('Worktimes Updated Successfully');

        }else{

            return $this->error('Worktimes Not Found');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
