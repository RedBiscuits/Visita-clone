<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Doctor\Coupon\CouponResource;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return CouponResource::collection(Auth::user()->coupons);
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
            'name'      => 'required',
            'discount'  => 'required',
            'code'      => 'required',
        ]);

        $coupon = Auth::user()->coupons()->create($request->all());

        return $this->success('Coupon Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Auth::user()->coupons()->find($id);

        if(!$coupon){
            return $this->error('Coupon Not Found');
        }

        return new CouponResource($coupon);
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
        $request->validate([
            'name'      => 'required',
            'discount'  => 'required',
            'code'      => 'required',
        ]);

        $coupon = Auth::user()->coupons()->find($id);

        $coupon->update($request->all());

        return $this->success('Coupon Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Auth::user()->coupons()->find($id);

        if(!$coupon){
            return $this->error('Coupon Not Found');
        }

        $coupon->delete();

        return $this->success('Coupon Deleted Successfully');
    }
}
