<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab;
use App\Http\Requests\Dashboard\Lab\LabRequest;

class LabsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all();

        return view('admin.lab.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabRequest $request)
    {
       $validated = $request->validated();

       $validated['password'] = bcrypt($request->password);

       $validated['image'] = $this->ImageUpload($request->image);

       Lab::create($validated);

       session()->flash('success', __('admin.added_successfully'));

       return redirect()->route('dashboard.labs.index');

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
        $lab = Lab::find($id);

        return view('admin.lab.edit', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabRequest $request, $id)
    {
        $validated =   $validated = $request->validated();

        if($request->image) {
            $validated['image'] = $this->ImageUpload($request->image);
        }

        $lab = Lab::find($id);

        $lab->update($validated);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->route('dashboard.labs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::find($id);

        $lab->delete();

        session()->flash('success', __('admin.deleted_successfully'));

    }
}
