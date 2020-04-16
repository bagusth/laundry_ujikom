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

    <form action="{{url('admin/paket',@$paket->id_paket)}}" method="post">

        @csrf
        @if(!empty($paket))
            @method('PATCH')
        @endif

    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Edit Pelanggan</h1><br>
                    <a class="btn btn-secondary ml-2 mb-3" href="{{url('admin/paket/indexPaket')}}" id="uh">Back</a>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="id_paket">Id</label>
                            <input class="form-control" type="text" name="id_paket" id="id_paket" value="{{old('id_paket',@$paket->id_paket)}}" readonly>      
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

                                        @if(@paket->id_outlet == $o->id_outlet)
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
                            <label for="nama_paket">Nama Paket</label>
                            <input class="form-control" type="text" name="nama_paket" id="nama_paket" value="{{old('nama_paket',@$paket->nama_paket)}}">
                        </div>
                    </div>    
                    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                            <div class="form-group">
                            <label  for="jenis">Jenis Cucian</label>
                            <select class="form-control" name="jenis" id="jenis">
                            <option value="">Pilih Jenis Cucian</option>
                            <option value="kiloan" {{old('jenis'. (@$member->jenis == 'kiloan')? 'selected' : '' )}}>Kiloan</option>
                            <option value="selimut" {{old('jenis'. (@$member->jenis == 'selimut')? 'selected' : '' )}}>Selimut</option>
                            <option value="bed_cover" {{old('jenis'. (@$member->jenis == 'bed_cover')? 'selected' : '' )}}>Bed Cover</option>
                            <option value="kaos" {{old('jenis'. (@$member->jenis == 'kaos')? 'selected' : '' )}}>Kaos</option>
                            <option value="lain" {{old('jenis'. (@$member->jenis == 'lain')? 'selected' : '' )}}>Lainnya</option>
                    </select>
                    </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">     
                            <label for="harga">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga" value="{{old('harga',@$paket->harga)}}">
                        </div>
                    </div>      

                        @csrf
                        <button class="btn btn-primary" type="submit">Submit</button>

                </div>
        </div>
    </div>
        
    </form>
</div>

</section>