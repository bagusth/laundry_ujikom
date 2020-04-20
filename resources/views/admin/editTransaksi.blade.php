@extends('layout.app')

@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <form action="{{url('admin/transaksi',@$transaksi->id_transaksi)}}" method="post">

        @csrf
        @if(!empty($transaksi))
            @method('PATCH')
        @endif

    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Edit Transaksi</h1><br>
                    <a class="btn btn-secondary ml-2 mb-3" href="{{url('admin/transaksi/indexTransaksi')}}" id="uh">Back</a>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="id_transaksi">Id</label>
                            <input class="form-control" type="text" name="id_transaksi" id="id_transaksi" value="{{old('id_transaksi', @$transaksi->id_transaksi)}}" readonly>
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_outlet">Id Outlet
                                <select class="form-control" name="id_outlet" id="id_outlet">
                                    <option value="">Pilih Id Outlet</option>
                                    @foreach($outlet as $o)
                                    <option value="{{$o->id_outlet}}"
                                    
                                        {{old('id_outlet')}}

                                        @if(@$transaksi->id_outlet == $o->id_outlet)
                                            selected
                                        @endif  
                                    
                                    >{{$o->id_outlet}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="kode_invoice">Kode Invoice</label>
                            <input class="form-control" type="text" name="kode_invoice" id="kode_invoice" value="{{old('kode_invoice', @$transaksi->kode_invoice)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_member">Id Member
                                <select class="form-control" name="id_member" id="id_member">
                                    <option value="">Pilih Id Member</option>
                                    @foreach($member as $m)
                                    <option value="{{$m->id_member}}"
                                    
                                        {{old('id_member')}}

                                        @if(@$transaksi->id_member == $m->id_member)
                                            selected
                                        @endif  
                                    
                                    >{{$m->id_member}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="tgl">Tanggal</label>
                            <input class="form-control" type="text" name="tgl" id="tgl" value="{{old('tgl', @$transaksi->tgl)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="batas_waktu">Batas Waktu</label>
                            <input class="form-control" type="text" name="batas_waktu" id="batas_waktu" value="{{old('batas_waktu', @$transaksi->batas_waktu)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <input class="form-control" type="text" name="tgl_bayar" id="tgl_bayar" value="{{old('tgl_bayar', @$transaksi->tgl_bayar)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="biaya_tambahan">Biaya Tambahan</label>
                            <input class="form-control" type="text" name="biaya_tambahan" id="biaya_tambahan" value="{{old('biaya_tambahan', @$transaksi->biaya_tambahan)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="diskon">Diskon</label>
                            <input class="form-control" type="text" name="diskon" id="diskon" value="{{old('diskon', @$transaksi->diskon)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="pajak">Pajak</label>
                            <input class="form-control" type="text" name="pajak" id="pajak" value="{{old('pajak',@$transaksi->pajak)}}">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="status">Status
                                <select class="form-control" name="status" id="status">
                                    <option value="">Pilih Status Paket</option>
                                    <option value="baru" {{old('status', (@$transaksi->status == 'baru') ? 'selected' : '')}}>Baru</option>
                                    <option value="proses" {{old('status', (@$transaksi->status == 'proses') ? 'selected' : '')}}>Proses</option>
                                    <option value="diambil" {{old('status', (@$transaksi->status == 'diambil') ? 'selected' : '')}}>Diambil</option>
                                    <option value="selesai" {{old('status', (@$transaksi->status == 'selesai') ? 'selected' : '')}}>Selesai</option>
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="dibayar">Dibayar
                                <select class="form-control" name="dibayar" id="dibayar">
                                    <option value="">Sudah Dibayar atau Belum ?</option>
                                    <option value="dibayar" {{old('dibayar', (@$transaksi->dibayar == 'dibayar') ? 'selected' : '')}}>Dibayar</option>
                                    <option value="belum_dibayar" {{old('dibayar', (@$transaksi->dibayar == 'belum_dibayar') ? 'selected' : '')}}>Belum Dibayar</option>
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_user">Id User
                                <select class="form-control" name="id_user" id="id_user">
                                    <option value="">Pilih Id User</option>
                                    @foreach($user as $u)
                                    <option value="{{$u->id_user}}"
                                        
                                        {{old('id_user')}}
                                        @if(@$transaksi->id_user == $u->id_user)
                                            selected
                                        @endif  

                                    >{{$u->id_user}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                        @csrf
                        <button class="btn btn-primary" type="submit">Submit</button>

                </div>
        </div>
    </div>
        
    </form>
</div>

@endsection