<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticationRequest;
use App\Http\Resources\Auth\LoginAdminSuccessResource;
use App\Http\Resources\Auth\LoginPenggunaSuccessResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login.index');
    }

    public function authenticate(AuthenticationRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt(array_merge($credentials, ['is_deleted' => 0]))) {
            $request->session()->regenerate();
 
            switch(Auth::user()->role) {
                case 'pengguna':
                    return new LoginPenggunaSuccessResource(Auth::user());
                    
                case 'admin':
                    return new LoginAdminSuccessResource(Auth::user());
                                           
            }
            
        } else {
            return response()->json(['success' => false, 'message' => 'Email atau Password tidak cocok']);
        }
     }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
