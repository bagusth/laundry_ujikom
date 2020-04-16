<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class kasirController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
            return redirect('/');
        }else{
            if (Session::get('role') == 'admin') {
                return redirect('admin/home');
            } elseif(Session::get('role') == 'kasir') {
            	return view('kasir.home');
            } elseif(Session::get('role') == 'owner') {
                return redirect('owner/home');
            } else{
                return redirect('/');
            }
                
        }
    }

    public function viewPelanggan()
    {
        $data['member']= \App\Member::get();
        return view('kasir.indexMember', $data); 
    }

    public function viewTambahPelanggan()

    {  
        return view('kasir.tambahPelanggan');
    }

    public function tambahPelangganPost( Request $request )
    {
        $this->validate($request, [
            'id'=> 'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tlp'=>'required'
        ]);
   
        $data = new \App\Member;
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tlp = $request->tlp;
        
        $status = $data->save();

        if ($status){
            
            return redirect('kasir/home');

        } else {

            return redirect('kasir/member/tambahPelanggan');

        }

    }


    public function viewEditPelanggan( Request $request,$id )
    {
        $data['member'] = \App\Member::find($id);
        return view('admin.editPelanggan', $data);
    }


    public function editPelanggan( Request $request, $id)
    {
        $this->validate($request, [
            'id'=> 'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tlp'=>'required'
        ]);

        $data = \App\Member::find( $id );
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tlp = $request->tlp;
        
        $status = $data->update();

        if ($status){
            
            return redirect('kasir/home');

        } else {

            return redirect('kasir/member/editPelanggan');

        }
    }


    public function deletePelanggan( $id )
    {
        $data = \App\Member::find($id);

        $status = $data->delete();

        if($status){
            return redirect('kasir/home');
        }else{
            return redirect('kasir/home');
        }
    }

}
