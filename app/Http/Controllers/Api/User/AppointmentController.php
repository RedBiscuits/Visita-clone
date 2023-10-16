<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Patient\Appoinments\AppoinmentsResource;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AppoinmentsResource::collection(Auth::user()->appointments);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           'doctor_id'       => 'required|exists:doctors,id',
           'date'            => 'required|date',
           'time'            => 'required',
           'payment_method'  => 'required|in:cash,visa',
           'type'            => 'required|in:1,2,3',
           'price'           => 'required|numeric',
           'lat'             => 'required_if:type,2',
           'lng'             => 'required_if:type,2',
           'address'         => 'required_if:type,2',

        ]);


        $appointment = Auth::user()->appointments()->create($request->all());

        return $this->success('Appointment Created Successfully');
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

        Auth::user()->appointments()->find($id)->delete();

        return $this->success('Appointment Deleted Successfully');


    }
}
