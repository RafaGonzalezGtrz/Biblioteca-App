<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function register(Request $request){
        //validar datos
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';

        $user-> save();

        Auth::login($user);
        return redirect('home');
    }
    public function login(Request $request){
        //validación

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //'active'  => true
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){

            if (auth()->user()->role == 'admin'){
                return redirect()->route('adminscreen');
            }

            $request->session()->regenerate();

            return redirect()->intended(route('home'));

        }else{ 
            return back()->withErrors([
                'message' => 'El correo o contraseña es incorrecta, intentalo de nuevo']);
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
