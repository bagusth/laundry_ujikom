<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Users;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function viewLogin()
    {                     
    	return view('login.login'); 
    }

    public function loginPost(Request $request)
    {
    	$username = $request->username;
        $password = $request->password;

        $data = Users::where('username',$username)->first();

        if ($data) {
            if (Hash::check($password,$data->password)) {                
                Session::put('login',TRUE);
                Session::put('id_user',$data->id);
                Session::put('nama',$data->nama);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('id_outlet',$data->id_outlet);
                Session::put('role',$data->role);
                
                if (Session::get('role') == 'admin') {
		            return redirect('admin/home');
		        } elseif(Session::get('role') == 'kasir') {
		            return redirect('kasir/home');
		        } elseif (Session::get('role') == 'owner') {
		            return redirect('owner/home');
		        } else{
		            return redirect('/');
		        }

            }else{
                return redirect('login')->with('error','Username or Password are not Found');
            }
        }else{
            return redirect('login')->with('error','Username or Password are not Found');
        }
    }


}

