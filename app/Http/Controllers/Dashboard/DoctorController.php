<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Worktime;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        $hospitals  = Hospital::all();

        return view('admin.doctors.create', compact('departments', 'hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'ar.*'     => 'required|min:5',
            'en.*'     => 'required|min:5',
            'image'    => 'required|mimes:png,jpg',
            'password' => 'required|confirmed|min:8',
            // 'email'    => 'required|email|unique:doctors,email',
            // 'phone'    => 'required|unique:doctors,phone',
            'department_id' => 'required|exists:departments,id'
        ]);

        // Store Doctor

            $input = $request->except(['password', 'image', 'work_id', 'day', 'from', 'to', 'password_confirmation']);

            $input['password'] = bcrypt($request->password);

            $input['image'] = $this->ImageUpload($request->image);

            // dd($input);

          $doctor =   Doctor::create($input);

            // Store Worktimes

            $day   = $request->day;

            $from  = $request->from;

            $to    = $request->to;

            for($i=0; $i < 7; $i++){

                Worktime::create([

                    'doctor_id' => $doctor->id,
                    'day'       => $day[$i],
                    'from'      => $from[$i],
                    'to'        => $to[$i]
                  ]);
            }


            session()->flash('message', __('added'));

            return redirect('dashboard/doctors');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('admin.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        $departments = Department::all();

        $hospitals  = Hospital::all();

        $workinghours = Worktime::where('doctor_id', $id)->get();


        return view('admin.doctors.edit', compact('doctor', 'departments', 'hospitals', 'workinghours'));
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

        $doctor = Doctor::findOrFail($id);

        $request->validate([
            'ar.*'     => 'required|min:5',
            'en.*'     => 'required|min:5',
            // 'email'    => 'required|email|unique:doctors,email,' . $id,
            // 'phone'    => 'required|unique:doctors,phone,' . $id,
            'department_id' => 'required|exists:departments,id'
        ]);

        // Store Doctor

            $input = $request->except(['password', 'image', 'work_id', 'day', 'from', 'to', 'password_confirmation']);

            if($request->has('password') && ! is_null($request->password)){

                $input['password'] = bcrypt($request->password);
            }

            if($request->has('image')){

                $input['image'] = $this->ImageUpload($request->image);
            }

            // dd($input);

          $doctor->update($input);

            // Store Worktimes

            Worktime::where('doctor_id', $id)->delete();

            $day   = $request->day;

            $from  = $request->from;

            $to    = $request->to;

            for($i=0; $i < 7; $i++){

                Worktime::create([

                    'doctor_id' => $doctor->id,
                    'day'       => $day[$i],
                    'from'      => $from[$i],
                    'to'        => $to[$i]
                  ]);
            }


            session()->flash('message', __('updated'));

            return redirect('dashboard/doctors');



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

    public function status(Request $request)
    {
        $doctor = Doctor::findOrFail($request->id);



         if($doctor->status == 1){

            $doctor->update(['status' => 0]);

            }else{

                $doctor->update(['status' => 1]);
            }

         session()->flash('message', __('updated'));

        return redirect()->back();
    }
}
