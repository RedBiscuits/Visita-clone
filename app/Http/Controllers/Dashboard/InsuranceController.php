<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insurance;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurances = Insurance::all();

        return view('admin.insurances.index', compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insurances.create');
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
            'image' => 'required|mimes:png,jpg',
            'discount' => 'required|numeric|max:100',

        ]);

        $input = $request->except(['image']);

        $input['image'] = $this->ImageUpload($request->image);

        Insurance::create($input);

        session()->flash('message', __('added'));

        return redirect('dashboard/insurance');
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
        $insurance = Insurance::find($id);

        return view('admin.insurances.edit', compact('insurance'));
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
        $request->validate([
            'ar.*'      => 'required|min:5',
            'en.*'      => 'required|min:5',
            'image'     => 'mimes:png,jpg',
            'discount'  => 'required|numeric|max:100',

        ]);

        $input = $request->except(['image']);

        if ($request->hasFile('image')) {
            $input['image'] = $this->ImageUpload($request->image);
        }

        Insurance::find($id)->update($input);

        session()->flash('message', __('updated'));

        return redirect('dashboard/insurance');
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
