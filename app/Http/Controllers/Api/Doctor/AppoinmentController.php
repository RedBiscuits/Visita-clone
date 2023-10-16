<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Doctor\Appoinment\ApoinmentResource;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function today()
    {

        $apoinments = auth('doctor')->user()->apoinments()->where('date', date('Y-m-d'))
        ->where('status', 1)
        ->get();

        return ApoinmentResource::collection($apoinments);
    }


    public function coming()
    {

        $apoinments = auth('doctor')->user()->apoinments()->where('date', '>', date('Y-m-d'))
        ->where('status', 1)
        ->get();

        return ApoinmentResource::collection($apoinments);

    }


    public function done()
    {

          $apoinments = auth('doctor')->user()->apoinments()->where('status', 2)
            ->get();

            return ApoinmentResource::collection($apoinments);
    }


    public function all(){

        $apoinments = auth('doctor')->user()->apoinments()->where('status', 0)->get();

        return ApoinmentResource::collection($apoinments);
    }

    public function home(){

        $apoinments = auth('doctor')->user()->apoinments()
        ->where('status', 0)
        ->where('type', 2)
        ->get();

        return ApoinmentResource::collection($apoinments);
    }

    public function clinic(){

        $apoinments = auth('doctor')->user()->apoinments()
        ->where('status', 0)
        ->where('type', 1)
        ->get();

        return ApoinmentResource::collection($apoinments);
    }


    public function video(){

        $apoinments = auth('doctor')->user()->apoinments()
        ->where('status', 0)
        ->where('type', 3)
        ->get();

        return ApoinmentResource::collection($apoinments);
    }



    public function accept($id){

        $apoinment = auth('doctor')->user()->apoinments()->where('id', $id)->first();

        if(!$apoinment){

            return $this->error('apoinment not found');

        }

        if($apoinment->status != 0){

            return $this->error('cant accept this appoinmnet');
        }

        $apoinment->update(['status' => 1]);

        return $this->success('apoinment accepted');

    }


    public function refuse($id){

        $apoinment = auth('doctor')->user()->apoinments()->where('id', $id)->first();

        if(!$apoinment){

            return $this->error('apoinment not found');

        }

        if($apoinment->status != 0){

            return $this->error('cant refuse this appoinmnet');
        }

        $apoinment->update(['status' => 3]);

        return $this->success('apoinment refused');

    }


    public function show($id){

        $apoinment = auth('doctor')->user()->apoinments()->where('id', $id)->first();

        if(!$apoinment){

            return $this->error('apoinment not found');

        }

        return new ApoinmentResource($apoinment);

    }


    public function appoinments(){

        $apoinment = auth('doctor')->user()->apoinments()->get();

        return ApoinmentResource::collection($apoinment);

    }

}
