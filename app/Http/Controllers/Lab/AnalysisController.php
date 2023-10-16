<?php

namespace App\Http\Controllers\Lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Analysis;
use App\Models\Analysiscategory;
use App\Http\Requests\Lab\Rays\RaysRequest;

class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analysis = Analysis::where('lab_id', Auth::user()->id)->get();

        return view('lab.analysis.index', compact('analysis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Analysiscategory::all();

        return view('lab.analysis.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaysRequest $request)
    {
         $input = $request->validated();

         $input['lab_id'] = Auth::user()->id;

         Analysis::create($input);

         session()->flash('success', __('admin.added_successfully'));
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
        $analysis = Analysis::findOrFail($id);

        $categories = Analysiscategory::all();

        return view('lab.rays.edit', compact('analysis', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RaysRequest $request, $id)
    {
        $ray = Analysis::findOrFail($id);

        $input = $request->validated();

        $ray->update($input);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->route('lab.analysis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ray = Analysis::findOrFail($id);

        $ray->delete();

        session()->flash('success', __('admin.deleted_successfully'));

        return redirect()->route('lab.rays.index');
    }
}
