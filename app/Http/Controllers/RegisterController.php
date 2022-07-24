<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {

        return view('register.index', [

            'title' => 'Register',
        ]);
    }


    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => ['required', 'min:3', 'max:255', 'unique:users'],
            'telpon' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        //enkripsi
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success','registrasi sukses ya!!!');
    }
}
