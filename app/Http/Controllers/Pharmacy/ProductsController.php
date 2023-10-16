<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\Pharmacy\Medicine\MedicineRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Product::where('pharmacy_id', Auth::user()->id)->get();

        return view('pharmacy.medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('pharmacy.medicine.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRequest $request)
    {
        $input = $request->except('image');

        if ($request->hasFile('image')) {

            $input['image'] = $this->ImageUpload($request->image);

        }

        $input['pharmacy_id'] = Auth::guard('pharmacy')->user()->id;

        $medicine = Product::create($input);

        session()->flash('success', __('admin.added_successfully'));

        return redirect()->route('pharmacy.medicine.index');


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
        $medicine = Product::findOrFail($id);

        $categories = ProductCategory::all();

        return view('pharmacy.medicine.edit', compact('medicine', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicineRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $input = $request->except('image');

        if ($request->hasFile('image')) {

            $input['image'] = $this->ImageUpload($request->image);

        }

        $product->update($input);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->route('pharmacy.medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        session()->flash('success', 'Medicine deleted successfully');

        return redirect()->back();
    }
}
