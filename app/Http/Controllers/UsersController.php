<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            dd('ricaro Error');
            return view('index');
        } else {
            dd('Ricardo Miguel');
            return view('users.login');
        }
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  bcrypt($request->password);

        $user->save();

        return redirect()->route('register_user')->with('successs_msg', 'Usuário criado com sucesso');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            //Auth::user($user);
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorreto'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
