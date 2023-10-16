<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacy;
use App\Http\Requests\Dashboard\Pharmacy\PharmacyRequest;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phramacies = Pharmacy::all();

        return view('admin.pharmacy.index', compact('phramacies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pharmacy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PharmacyRequest $request)
    {
       $validated = $request->validated();

       $validated['password'] = bcrypt($request->password);

       $validated['image'] = $this->ImageUpload($request->image);

       Pharmacy::create($validated);

       session()->flash('success', __('admin.added_successfully'));

       return redirect()->route('dashboard.pharmacy.index');

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
        $pharmacy = Pharmacy::find($id);

        return view('admin.pharmacy.edit', compact('pharmacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PharmacyRequest $request, $id)
    {
        $validated =   $validated = $request->validated();

        if($request->image) {
            $validated['image'] = $this->ImageUpload($request->image);
        }

        $pharmacy = Pharmacy::find($id);

        $pharmacy->update($validated);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->route('dashboard.pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacy = Pharmacy::find($id);

        $pharmacy->delete();

        session()->flash('success', __('admin.deleted_successfully'));

    }
}
