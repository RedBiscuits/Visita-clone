<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Resources\Doctor\Department\DepartmentResource;
use App\Http\Resources\Doctor\Department\HospitalResource;
use App\Models\Hospital;
use App\Http\Resources\Doctor\Faq\FaqResource;
use App\Models\Faq;
use App\Http\Resources\Doctor\Privacy\PrivacyResource;
use App\Models\Privacy;
use App\Http\Resources\Doctor\Appoinment\ApoinmentResource;

class GeneralController extends Controller
{

    public function departments()
    {
        $departments = Department::all();

        return DepartmentResource::collection($departments);
    }


    public function hospitals()
    {
        $hospitals = Hospital::all();

        return HospitalResource::collection($hospitals);
    }


    public function notifications()
    {
        $notifications = auth('doctor')->user()->notifications;

        return response()->json([
            'status' => 'success',
            'data' => $notifications
        ]);
    }


    public function suggestion(Request $request)
    {
        $request->validate([
            'type' => 'required|integer',
            'text' => 'required|string',
            'rate' => 'required|string'
        ]);

        auth('doctor')->user()->suggestions()->create($request->all());

        return  $this->success('success');
    }


    public function home()
    {
        $requests = auth('doctor')->user()->apoinments()->where('status', 0)->count();

        $apoinments = auth('doctor')->user()->apoinments()->where('status', 1)->count();

        $wallet = 0;


        $next = auth('doctor')->user()->apoinments()->where('date', '=', date('Y-m-d'))
            ->where('status', 1)
            ->latest()
            ->first();

        $lastappoinment = auth('doctor')->user()->apoinments()->where('status', 1)
            ->latest()
            ->take(3)->get();

        $lastrequests = auth('doctor')->user()->apoinments()->where('status', 0)
            ->latest()
            ->take(3)->get();


        return response()->json([
            'status' => 'success',
            'data' => [
                'requests'   => $requests,
                'apoinments' => $apoinments,
                'wallet'     => $wallet,

                'next' => ($next) ? new ApoinmentResource($next) : NULL ,
                'lastappoinment' => ApoinmentResource::collection($lastappoinment),
                'lastrequests'   => ApoinmentResource::collection($lastrequests)
            ]
        ]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        $faq = Faq::all();

        return FaqResource::collection($faq);
    }


    public function privacy(){

        $privacy = Privacy::first();

        return new PrivacyResource($privacy);
    }
}
