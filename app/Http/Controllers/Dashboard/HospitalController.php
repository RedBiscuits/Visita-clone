<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();

        return view('admin.hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospitals.create');
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
            'ar.*' => 'required|min:5',
            'en.*' => 'required|min:5',
            'image' => 'required|mimes:png,jpg'

        ]);

        $input = $request->except(['image']);

        $input['image'] = $this->ImageUpload($request->image);

        Hospital::create($input);

        session()->flash('message', __('added'));

        return redirect('dashboard/hospitals');

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
       $hospital =  Hospital::findOrFail($id);

       return view('admin.hospitals.edit', compact('hospital'));
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
        $hospital =  Hospital::findOrFail($id);


        $request->validate([
            'ar.*'  => 'required|min:5',
            'en.*'  => 'required|min:5',
            'image' => 'sometimes|mimes:png,jpg'

        ]);

        $input = $request->except(['image']);

        if($request->has('image')){

            $input['image'] = $this->ImageUpload($request->image);
        }

        $hospital->update($input);

        session()->flash('message', __('updated'));

        return redirect('dashboard/hospitals');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospital::findOrFail($id)->delete();

        session()->flash('message', __('deleted'));

        return redirect()->back();
    }
}
