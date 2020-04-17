<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
            return redirect('/');
        }else{
            if (Session::get('role') == 'admin') {
                return view('admin.home');
            } elseif(Session::get('role') == 'kasir') {
                return redirect('kasir/home');
            } elseif(Session::get('role') == 'owner') {
                return redirect('owner/home');
        
            }
    }
}    

    public function viewPelanggan()
    {
        $data['member']= \App\Member::get();
        return view('admin.index_member', $data); 
    }

    public function viewTambahPelanggan()

    {  
        return view('admin.tambah_pelanggan');
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
            
            return redirect('admin/member/index_member')->with('success', 'Member has successfully added');

        } else {

            return redirect('admin/member/tambah_pelanggan')->with('error', 'Oops, Something went wrong');

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
            
            return redirect('admin/member/index_member')->with('success', 'Member has been successfully changed');

        } else {

            return redirect('admin/member/editPelanggan')->with('error', 'Aw, there was something wrong boi');

        }
    }


    public function deletePelangganPost( $id_member )
    {
        $data = \App\Member::find($id_member);

        $status = $data->delete();

        if($status){

            return redirect('admin/member/index_member')->with('success', 'U did it, member has been successfully deleted');

        }else{
            return redirect('admin/member/index_member')->with('error', 'Oh my, the data has not deleted yet');
        }

            
    }


    public function viewOutlet()
    {
        $data['outlet']= \App\Outlet::get();
        return view ('admin.indexOutlet', $data);
    }


    public function viewtambahOutlet()
    {
        return view('admin.tambahOutlet');
    }



    public function tambahOutlet(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required',
            'alamat'=>'required',
            
            'tlp'=>'required'
        ]);
   
        $data = new \App\Outlet;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->tlp = $request->tlp;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/outlet/indexOutlet');

        } else {

            return redirect('admin/outlet/tambahOutlet');

        }

    }


    public function viewEditOutlet(Request $request, $id_outlet)
    {
        $data['outlet']=  \App\Outlet::findOrFail($id_outlet);
        return view ('admin.editOutlet', $data);
    }


    public function editOutlet(Request $request, $id_outlet)
    {
        $this->validate($request, [
            'nama'=>'required',
            'alamat'=>'required',
            'tlp'=>'required'
        ]);

        $data = \App\Outlet::find($id_outlet);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->tlp = $request->tlp;
        
        $status = $data->update();

        if ($status){
            
            return redirect('admin/outlet/indexOutlet');

        } else {

            return redirect('admin/outlet/editOutlet');

        }
    }


    public function deleteOutlet( $id_outlet )
    {
        $data = \App\Outlet::find($id_outlet);

        $status = $data->delete();

        return redirect('admin/outlet/indexOutlet');

            
    }


    public function viewPaket()
    {
        $data['paket']= \App\Paket::get();
        return view('admin.indexPaket', $data);
    }

    public function viewtambahPaket(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        return view('admin.tambahPaket', $data);
    }

    public function tambahPaket(Request $request)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'jenis'=>'required',
            'nama_paket'=>'required',
            'harga'=>'required'
        ]);
   
        $data = new \App\Paket;
        $data->id_outlet = $request->id_outlet;
        $data->jenis = $request->jenis;
        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;
        
        $status = $data->save();

        if ($status){
            
            return redirect('admin/paket/indexPaket');

        } else {

            return redirect('admin/paket/tambahPaket');

        }
    }

    public function viewEditPaket(Request $request, $id_paket)
    {
        $data['paket']= \App\Paket::findOrFail($id_paket);
        $data['outlet']= \App\Outlet::get();
        return view('admin.editPaket', $data);
    }

    public function editPaket(Request $request, $id_paket)
    {
        $this->validate($request, [
            'id_outlet'=>'required',
            'jenis'=>'required',
            'nama_paket'=>'required',
            'harga'=>'required'
        ]);

        $data = \App\Paket::find($id_paket);
        $data->id_outlet = $request->id_outlet;
        $data->jenis = $request->jenis;
        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;
        
        $status = $data->update();

        if ($status){
            
            return redirect('admin/paket/indexPaket');

        } else {

            return redirect('admin/paket/editPaket');

        }
    }

    public function deletePaket($id_paket)
    {
        $data = \App\Paket::find($id_paket);

        $status = $data->delete(); 
        
        return redirect('admin/paket/indexPaket');
    }

    public function viewTransaksi()
    {
        $data['transaksi']= \App\Transaksi::get();
        return view('admin.indexTransaksi', $data);
    }

    public function viewtambahTransaksi(Request $request)
    {
        $data['outlet']= \App\Outlet::get();
        $data['user']= \App\Users::get();
        $data['member']= \App\Member::get();
        return view('admin.tambahTransaksi', $data);
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
            
            return redirect('admin/transaksi/indexTransaksi');

        } else {

            return redirect('admin/transaksi/tambahTransaksi');

        }
    }

    
    public function viewEditTransaksi(Request $request, $id_transaksi)
    {
        $data['transaksi']= \App\Transaksi::findOrFail($id_transaksi);    
        $data['member']= \App\Member::get();
        $data['outlet']= \App\Outlet::get();
        $data['user']= \App\Users::get();
        return view('admin.editTransaksi', $data);
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
            
            return redirect('admin/transaksi/indexTransaksi');

        } else {

            return redirect('admin/transaksi/editTransaksi');

        }
    }

    public function deleteTransaksi($id_transaksi)
    {
        $data = \App\Transaksi::find($id_transaksi);

        $status = $data->delete();

        return redirect('admin/transaksi/indexTransaksi');
    }

}
