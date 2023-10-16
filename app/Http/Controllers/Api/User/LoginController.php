<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Http\Resources\Patient\Profile\ProfileResource;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:patient', ['except' => ['login', 'register']]);
    }

    protected function guardName()
    {

        return Auth::guard('patient');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('patient')->attempt($credentials)) {

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
        return new ProfileResource(Auth::user());

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
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
            'expires_in'  => auth('patient')->factory()->getTTL() * 60,

        ]);
    }


    public function update(Request $request){

        $user =  Auth::user();

        $request->validate([

            'name'  => 'sometimes|min:3',
            'email' => 'sometimes|email|unique:patients,email,' . $user->id,
            'phone' => 'sometimes|unique:patients,phone,' . $user->id,
        ]);

        $data = $request->except(['password', 'image']);

        if($request->has('image')){

            $data['image'] = $this->ImageUpload($request->image);
        }

        $user->update($data);

        return response()->json('success');
    }


    public function updatepassword(Request $request){

        $request->validate(['password' => 'required|min:8', 'confirmed']);

        Auth::user()->update(['password' => bcrypt($request->password)]);

        return response()->json('success', 200);

    }

    public function accesstoken(Request $request){

        $request->validate(['access_token' => 'required']);

        Auth::user()->update(['access_token' => $request->access_token]);

        return response()->json('success', 200);

    }

    public function register(Request $request){

        $request->validate([
            'name'          => 'required|min:3',
            'email'         => 'required|email|unique:patients',
            'phone'         => 'required|unique:patients|numeric',
            'password'      => 'required|min:8|confirmed',
            'personalid'    => 'required|numeric',
        ]);


        $data = $request->except(['password', 'password_confirmation']);

        $data['password'] = bcrypt($request->password);

        $user = Patient::create($data);

        $token = auth('patient')->login($user);

        return $this->respondWithToken($token);
    }
}
