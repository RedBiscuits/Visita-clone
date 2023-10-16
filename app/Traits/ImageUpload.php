<?php

namespace App\Traits;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
trait ImageUpload
{

    public function ImageUpload($query)
    {
        $image_name = str::random(20);

        $ext = strtolower($query->getClientOriginalExtension());

        $image_full_name = $image_name.'.'.$ext;

        $upload_path = 'images/';

        $image_url = asset($upload_path.$image_full_name);

        $query->move($upload_path,$image_full_name);

        return $image_url;
    }


    public function GallryUpload($gallery)
    {


        foreach($gallery as $index => $file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = uniqid() .  'ecommerce.' . $fileName;

            $file->move('images/',$fileName);

            $images[]=$fileName;
        }

        return  implode(",",$images);

    }

    public function IdentityUpload($query)
    {
        $image_name = str::random(20);

        $ext = strtolower($query->getClientOriginalExtension());

        $image_full_name = $image_name.'.'.$ext;

        $upload_path = 'identity/';

        $image_url = asset($upload_path.$image_full_name);

        $query->move($upload_path,$image_full_name);

        return $image_url;
    }
}
