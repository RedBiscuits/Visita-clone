<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Doctor;
use App\Http\Requests\Dashboard\Offer\OfferRequest;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::latest()->get();

        return view('admin.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $doctors = Doctor::all();

         return view('admin.offers.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
         $input = $request->except(['image']);


         if($request->hasFile('image')){

             $input['image'] = $this->ImageUpload($request->image);

         }

            Offer::create($input);

            session()->flash('success', __('admin.added_successfully'));

            return redirect()->route('dashboard.offers.index');
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
        $offer = Offer::find($id);

        $doctors = Doctor::all();

        return view('admin.offers.edit', compact('offer', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferRequest $request, $id)
    {
        $offer = Offer::find($id);

        $input = $request->except(['image']);

        if($request->hasFile('image')){

            $input['image'] = $this->ImageUpload($request->image);

        }

        $offer->update($input);

        session()->flash('success', __('admin.updated_successfully'));

        return redirect()->route('dashboard.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);

        $offer->delete();

        session()->flash('success', __('admin.deleted_successfully'));

        return redirect()->route('dashboard.offers.index');
    }
}
