<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Hospital;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();

        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        $hospitals = Hospital::all();

        return view('admin.department.create', compact('departments', 'hospitals'));
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

        Department::create($input);

        session()->flash('message', __('added'));

        return redirect('dashboard/department');

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
       $department =  Department::findOrFail($id);

       return view('admin.department.edit', compact('department'));
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
        $department =  Department::findOrFail($id);


        $request->validate([
            'ar.*'  => 'required|min:5',
            'en.*'  => 'required|min:5',
            'image' => 'sometimes|mimes:png,jpg'

        ]);

        $input = $request->except(['image']);

        if($request->has('image')){

            $input['image'] = $this->ImageUpload($request->image);
        }

        $department->update($input);

        session()->flash('message', __('updated'));

        return redirect('dashboard/department');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::findOrFail($id)->delete();

        session()->flash('message', __('deleted'));

        return redirect()->back();
    }
}
