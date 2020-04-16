<section class="main-section">

<div class="content">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Cek -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           <style>
                #uh > a{
                    color:black;
                    font-size:24px;
                }
           </style> 

        <form action="{{url('admin/transaksi')}}" method="post">

        @csrf
    
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Transaksi</h1>
                    <a class="btn btn-secondary ml-2" href="{{url('admin/transaksi/indexTransaksi')}}" id="uh">Back</a>
                </div>

                <div class="card-body">
                    <div class="form-group" type="hidden">
                        <input class="" type="hidden" name="id" id="id">
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_outlet">Id Outlet
                                <select class="form-control" name="id_outlet" id="id_outlet">
                                    <option value="">Pilih Id Outlet</option>
                                    @foreach($outlet as $o)
                                    <option value="{{$o->id_outlet}}">{{$o->id_outlet}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="kode_invoice">Kode Invoice</label>
                            <input class="form-control" type="text" name="kode_invoice" id="kode_invoice">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="id_member">Id Member
                                <select class="form-control" name="id_member" id="id_member">
                                    <option value="">Pilih Id Member</option>
                                    @foreach($member as $m)
                                    <option value="{{$m->id_member}}">{{$m->id_member}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="tgl">Tanggal</label>
                            <input class="form-control" type="text" name="tgl" id="tgl">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="batas_waktu">Batas Waktu</label>
                            <input class="form-control" type="text" name="batas_waktu" id="batas_waktu">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <input class="form-control" type="text" name="tgl_bayar" id="tgl_bayar">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="biaya_tambahan">Biaya Tambahan</label>
                            <input class="form-control" type="text" name="biaya_tambahan" id="biaya_tambahan">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="diskon">Diskon</label>
                            <input class="form-control" type="text" name="diskon" id="diskon">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="pajak">Pajak</label>
                            <input class="form-control" type="text" name="pajak" id="pajak">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="status">Status
                                <select class="form-control" name="status" id="status">
                                    <option value="">Pilih Status Paket</option>
                                    <option value="baru">Baru</option>
                                    <option value="proses">Proses</option>
                                    <option value="baru_diambil">Baru Diambil</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="dibayar">Dibayar
                                <select class="form-control" name="dibayar" id="dibayar">
                                    <option value="">Pilih Status</option>
                                    <option value="dibayar">Dibayar</option>
                                    <option value="belum_dibayar">Belum Dibayar</option>
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
                                    <option value="{{$u->id_user}}">{{$u->id_user}}</option>
                                    @endforeach
                                </select>
                              </label>
                        </div>
                    </div>
                    
                <div>
                @csrf
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </div>
        </div>
                    
        </form>
    
        </div>
    </div>

</section>