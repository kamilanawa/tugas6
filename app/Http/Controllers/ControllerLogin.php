<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerLogin extends BaseController
{
    public function login(){
        Auth::logout();
        return view('login.login');
    }

    public function actionlogin(Request $x){
        $data1 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role' => 'admin'
        ];

        $data2 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role' => 'operator'
        ];

        $data3 = [
            'email' => $x->input('email'),
            'password' => $x->input('password'),
            'role' => 'gudang'

        ];

        if (Auth::attempt($data1)) {
            return redirect('databarang');
        }

        if (Auth::attempt($data2)) {
            return redirect('datapenjualan');
        }

        if (Auth::attempt($data3)) {
            return redirect('gudang');
        }
    }

    public function registrasi(){
        return view ('login.registrasi');
    }

    public function postregistrasi(Request $x){
        $data = $x->all();
        User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'telp' => $data['telp'],
            'jeniskelamin' => $data['jeniskelamin'],
            'role' => 'operator',
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect("login")->withSuccess('Great! You have Success');
    }

    public function logout(){
        return view ('login.login');
    }
}
