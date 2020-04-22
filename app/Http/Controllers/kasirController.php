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


    public function cetak_pdf()
    {
        $data['transaksi']= \App\Transaksi::get();

        $pdf = PDF::loadview('kasir.pdf', $data);
        return $pdf->download('laporan-pelanggan');
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
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tlp'=>'required'
        ]);
   
        $data = new \App\Member;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tlp = $request->tlp;
        
        $status = $data->save();

        if ($status){
            
            return redirect('kasir/member/indexMember')->with('success', 'Member has successfully added');

        } else {

            return redirect('kasir/member/tambahPelanggan')->with('error', 'Oops, Something went wrong');

        }

    }


    public function viewEditPelanggan( Request $request,$id )
    {
        $data['member'] = \App\Member::find($id);
        return view('kasir.editPelanggan', $data);
    }


    public function editPelanggan( Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tlp'=>'required'
        ]);

        $data = \App\Member::find( $id );
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tlp = $request->tlp;
        
        $status = $data->update();

        if ($status){
            
            return redirect('kasir/member/indexMember')->with('success', 'Member has been successfully changed');

        } else {

            return redirect('kasir/member/editPelanggan')->with('error', 'Aw, there was something wrong boi');

        }
    }


    public function deletePelanggan( $id_member )
    {
        $data = \App\Member::find($id_member);

        $status = $data->delete();

        if($status){

            return redirect('kasir/member/indexMember')->with('success', 'U did it, member has been successfully deleted');

        }else{
            return redirect('kasir/member/indexMember')->with('error', 'Oh my, the data has not deleted yet');
        }

            
    }


    public function viewTransaksi()
    {
        $data['transaksi']= \App\Transaksi::get();
        return view('kasir.indexTransaksi', $data);
    }

    public function viewtambahTransaksi(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        $data['user']= \App\Users::get();
        $data['member']= \App\Member::get();
        return view('kasir.tambahTransaksi', $data);
    }

    public function tambahTransaksi(Request $request)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'kode_invoice'=>'required',
            'id_member'=>'required',
            'tgl'=>'required',
            'batas_waktu'=>'required',
            'tgl_bayar'=>'required',
            'biaya_tambahan'=>'required',
            'diskon'=>'required',
            'pajak'=>'required',
            'diskon'=>'required',
            'pajak'=>'required',
            'status'=>'required',
            'dibayar'=>'required',
            'id_user'=>'required'
        ]);
   
        $data = new \App\Transaksi;
        $data->id_outlet = $request->id_outlet;
        $data->kode_invoice = $request->kode_invoice;
        $data->id_member = $request->id_member;
        $data->tgl = $request->tgl; 
        $data->batas_waktu = $request->batas_waktu;
        $data->tgl_bayar = $request->tgl_bayar;
        $data->biaya_tambahan = $request->biaya_tambahan;
        $data->diskon = $request->diskon;
        $data->pajak = $request->pajak;
        $data->status = $request->status;
        $data->dibayar = $request->dibayar;
        $data->id_user =$request->id_user;
        
        $status = $data->save();

        if ($status){
            
            return redirect('kasir/transaksi/indexTransaksi')->with('success', 'New data has been added');

        } else {

            return redirect('kasir/transaksi/tambahTransaksi')->with('error', 'Ooh, no data has been added');

        }
    }

    
    public function viewEditTransaksi(Request $request, $id_transaksi)
    {
        $data['transaksi']= \App\Transaksi::findOrFail($id_transaksi);    
        $data['member']= \App\Member::get();
        $data['outlet']= \App\Outlet::get();
        $data['user']= \App\Users::get();
        return view('kasir.editTransaksi', $data);
    }


    public function editTransaksi(Request $request, $id_transaksi)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'kode_invoice'=>'required',
            'id_member'=>'required',
            'tgl'=>'required',
            'batas_waktu'=>'required',
            'tgl_bayar'=>'required',
            'biaya_tambahan'=>'required',
            'diskon'=>'required',
            'pajak'=>'required',
            'diskon'=>'required',
            'pajak'=>'required',
            'status'=>'required',
            'dibayar'=>'required',
            'id_user'=>'required'
        ]);
   
        $data = \App\Transaksi::find($id_transaksi);
        $data->id_outlet = $request->id_outlet;
        $data->kode_invoice = $request->kode_invoice;
        $data->id_member = $request->id_member;
        $data->tgl = $request->tgl; 
        $data->batas_waktu = $request->batas_waktu;
        $data->tgl_bayar = $request->tgl_bayar;
        $data->biaya_tambahan = $request->biaya_tambahan;
        $data->diskon = $request->diskon;
        $data->pajak = $request->pajak;
        $data->status = $request->status;
        $data->dibayar = $request->dibayar;
        $data->id_user =$request->id_user;
        
        $status = $data->update();

        if ($status){
            
            return redirect('kasir/transaksi/indexTransaksi')->with('success', 'Data has been changed');

        } else {

            return redirect('kasir/transaksi/editTransaksi')->with('error', 'Data has not been changed');

        }
    }

    public function deleteTransaksi($id_transaksi)
    {
        $data = \App\Transaksi::find($id_transaksi);

        $status = $data->delete();

        if ($status) {

            return redirect('kasir/transaksi/indexTransaksi')->with('success', 'Transaction Data has been deleted');

        }else {

            return redirect('kasir/transaksi/indexTransaksi')->with('error', 'Transaction Data has not been deletd yet');
        }
        
    }


}