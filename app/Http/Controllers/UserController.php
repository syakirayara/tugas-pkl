<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
       $request->validate([
        'nama' => 'required',
        'username' => 'required|unique:tb_user',
        'password' => 'required',
        'alamat' => 'required',
        'tlp' => 'required',
        'email' => 'required',
        'password_confirmation' => 'required|same:password',
       ]);
        $user = new User([
            'nama' => $request->nama,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'email' => $request->email,
            'password' => Hash::make($request->username),
        ]);
        $user->save();

        return redirect()->route('dashboard')->with('success' ,'Registration Success. Please Login');
        // return redirect()->route('login')->with('success' ,'Registration Success. Please Login');
    }
}
