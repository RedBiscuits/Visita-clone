<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Prescription;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders        = Order::where('pharmacy_id', Auth::user()->id)->count();

        $products      = Product::where('pharmacy_id', Auth::user()->id)->count();

        $prescriptions = Prescription::where('pharmacy_id', Auth::user()->id)->count();


       return view('pharmacy.index', compact('orders', 'products', 'prescriptions'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('pharmacy.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $input = $request->except('password', 'image');

        if ($request->hasFile('image')) {

            $input['image'] = $this->ImageUpload($request->image, 'uploads/admins');

        }

        $user->update($input);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->back();


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
