<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OwnerController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
            return redirect('/');
        }else{
            if (Session::get('role') == 'admin') {
                return redirect('admin/home');
            } elseif(Session::get('role') == 'kasir') {
                return redirect('kasir/home');
            } elseif(Session::get('role') == 'owner') {
            	return view('owner.home');
            } else{
                return redirect('/');
            }
                
        }
    }

    public function cetak_pdf()
    {
        $data['transaksi']= \App\Transaksi::get();

        $pdf = PDF::loadview('owner.pdf', $data);
        return $pdf->download('laporan-pelanggan');
    }

}
