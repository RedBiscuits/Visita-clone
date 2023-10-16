<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rayscategory;
use App\Http\Resources\Patient\Rays\RaysCategoryResource;
use App\Http\Resources\Patient\Rays\RaysSingleCategoryResource;
use App\Http\Resources\Patient\Rays\RaysResource;
use App\Models\Rays;
use App\Http\Resources\Patient\Analysis\AnalysisCategoryResource;
use App\Models\Analysiscategory;
use App\Http\Resources\Patient\Analysis\AnalysisSingleCategoryResource;

class RaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return RaysResource::collection(Rays::all());
    }


    public function analysis()
    {

        return  AnalysisCategoryResource::collection(Analysiscategory::all());
    }


    public function analysisshow($id)
    {
        $category = Analysiscategory::find($id);

        if(!$category){

            return $this->error('Category not found', 404);
        }

        return new AnalysisSingleCategoryResource($category);
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

    public function categories(){

        return  RaysCategoryResource::collection(Rayscategory::all());

    }

    public function category($id){

        $category = Rayscategory::find($id);

        if(!$category){

            return $this->error('Category not found', 404);
        }

        return new RaysSingleCategoryResource($category);

    }
}
