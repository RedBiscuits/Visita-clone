<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appoinment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::count();

        $patients = Patient::count();

        $apoinments = Appoinment::count();

        $recentpatient = Patient::latest()->take(5)->get();

        $recentdoctor = Doctor::latest()->take(5)->get();

        $recentapoinment = Appoinment::latest()->take(5)->get();

        return view('admin.index', compact('doctors', 'patients', 'apoinments', 'recentpatient', 'recentdoctor', 'recentapoinment'));



         return view('admin.index', compact('doctors', 'patients', 'apoinments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = auth()->user();

        return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $input = $request->except('password', 'image');

        if ($request->hasFile('image')) {

            $input['image'] = $this->ImageUpload($request->image, 'uploads/admins');

        }

        $user->update($input);

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->back();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
