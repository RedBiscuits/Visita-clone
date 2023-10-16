<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\Dashboard\Pharmacy\ProdyctCategoryRequest;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::all();

        return view('admin.productcategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.productcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdyctCategoryRequest $request)
    {

        $validated = $request->validated();

        if($request->hasFile('image')){

            $validated['image'] =  $this->ImageUpload($request->image);
        }

        ProductCategory::create($validated);

        session()->flash('message', __('added'));

        return redirect('dashboard/productcategory');

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
       $category =  ProductCategory::findOrFail($id);

       return view('admin.productcategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdyctCategoryRequest $request, $id)
    {
        $department =  ProductCategory::findOrFail($id);


        $validated = $request->validated();

        if($request->hasFile('image')){

            $validated['image'] =  $this->ImageUpload($request->image);
        }

        $department->update($validated);

        session()->flash('message', __('updated'));

        return redirect('dashboard/productcategory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategory::findOrFail($id)->delete();

        session()->flash('message', __('deleted'));

        return redirect()->back();
    }
}
