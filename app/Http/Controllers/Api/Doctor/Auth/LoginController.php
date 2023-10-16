<?php

namespace App\Http\Controllers\Api\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Doctor\Profile\DoctorProfileResource;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:doctor', ['except' => ['login', 'register']]);
    }

    protected function guardName()
    {

        return Auth::guard('doctor');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('doctor')->attempt($credentials)) {

            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return new DoctorProfileResource(Auth::user());

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return  $this->success('Successfully logged out');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {


        return response()->json([
            'access_token' => $token,
            'token_type'  => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in'  => auth('doctor')->factory()->getTTL() * 60,

        ]);
    }


    public function updateprofile(Request $request){

        $user =  Auth::user();

        $request->validate([

            'name'  => 'sometimes|min:3',
            'email' => 'sometimes|email|unique:doctors,email,' . $user->id,
            'phone' => 'sometimes|unique:doctors,phone,' . $user->id,
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $data = $request->except(['password', 'image',]);

        // upload image

        if($request->hasFile('image')){

            $data['image'] = $this->ImageUpload($request->image);
        }

        $user->update($data);

        return  $this->success('Profile Updated Successfully');
    }


    public function updatepassword(Request $request){

        $request->validate([
            'password'         => 'required|min:8|confirmed',
            'current_password' => 'required',
            ]);

        $user = Auth::user();

        if(Hash::check($request->current_password, $user->password)){

            $user->update(['password' =>  bcrypt($request->password)]);

            return  $this->success('Password Updated Successfully');

        }else{

            return $this->error('Current Password is not correct', 404);
        }

    }

    public function accesstoken(Request $request){

        $request->validate(['access_token' => 'required']);

        Auth::user()->update(['access_token' => $request->access_token]);

        return $this->success('Access Token Updated Successfully');

    }

    public function register(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|min:5',
            'email'           => 'required|string|email|unique:doctors',
            'password'        => 'required|string|confirmed|min:8',
            'phone'           => 'required|string|unique:doctors',
            'national_id'     => 'required|mimes:pdf,jpg,jpeg,png',
            'national_number' => 'required|unique:doctors|min:12',
            'department_id'     => 'required|exists:departments,id',
            'lat'             => 'required',
            'lng'             => 'required',
            'address'         => 'required',
        ]);

        $input = $request->except(['password', 'password_confirmation']);

        $input['password'] = bcrypt($request->password);

        if($request->hasFile('national_id')){

            $input['national_id'] = $this->IdentityUpload($request->national_id);

        }

        $doctor = Doctor::create($input);

        $token = auth()->guard('doctor')->login($doctor);

        return $this->respondWithToken($token);

    }

    public function confirmphone (Request $request){

        $request->validate(['code' => 'required']);

        $doctor = Auth::user();

        if($doctor->code == $request->code){

            $doctor->update(['phone_confirmed' =>  1, 'code' => null]);

            return $this->success('Phone Number Confirmed Successfully');
    }else{

            return $this->error('Code is not correct', 404);
        }
}


    public function active(Request $request){

        $request->validate(['active' => 'required|in:0,1']);

        Auth::user()->update(['active' => $request->active]);

        return $this->success('Status Updated Successfully');

    }


    public function price(Request $request){

        $request->validate([
            'clinic' => 'required|min:1',
            'home'   => 'required|min:1',
            'video'  => 'required|min:1',

            ]);

        Auth::user()->update([
            'clinic'    => $request->clinic,
            'home'      => $request->home,
            'video'     => $request->video,
        ]);

        return $this->success('Status Updated Successfully');

    }




}
