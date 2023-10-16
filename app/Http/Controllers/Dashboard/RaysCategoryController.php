<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rayscategory;
use App\Http\Requests\Dashboard\Lab\RaysCategoryRequest;

class RaysCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Rayscategory::all();

        return view('admin.rayscategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.rayscategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaysCategoryRequest $request)
    {

        $validated = $request->validated();

        Rayscategory::create($validated);

        session()->flash('message', __('added'));

        return redirect('dashboard/rayscategory');

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
       $category =  Rayscategory::findOrFail($id);

       return view('admin.rayscategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RaysCategoryRequest $request, $id)
    {
        $department =  Rayscategory::findOrFail($id);


        $validated = $request->validated();

        $department->update($validated);

        session()->flash('message', __('updated'));

        return redirect('dashboard/rayscategory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rayscategory::findOrFail($id)->delete();

        session()->flash('message', __('deleted'));

        return redirect()->back();
    }
}
