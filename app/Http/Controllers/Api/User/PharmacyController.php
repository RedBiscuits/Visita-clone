<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Patient\Pharmacy\PharmacyResource;
use App\Models\Pharmacy;
use App\Http\Resources\Patient\Pharmacy\SinglePharmacyResource;
use App\Http\Resources\Patient\Pharmacy\PharmacyProductResource;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return PharmacyResource::collection(Pharmacy::all());

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pharmacy = Pharmacy::find($id);

        if(!$pharmacy){

            return $this->error('Pharmacy Not Found', 404);
        }

        return new SinglePharmacyResource($pharmacy);

    }


    public function category($id, $category)
    {
        $products = Pharmacy::find($id)->products()->where('category_id', $category)->get();

        return PharmacyProductResource::collection($products);
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
