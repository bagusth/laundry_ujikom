@extends('layout.kasir')

@section('content')
    
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

        <form action="{{url('kasir/member')}}" method="post">

        @csrf
    
    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Pelanggan</h1>
                    <a class="btn btn-secondary ml-2" href="{{url('kasir/member/indexMember')}}" id="uh">Back</a>
                </div>

                <div class="card-body">
                    <div class="form-group" type="hidden">
                        <input class="" type="hidden" name="id" id="id">
                    <div class="d-flex">
                        <div class="form-group"> 
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                              <label for="jenis_kelamin">Jenis Kelamin
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin Anda</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                              </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">    
                            <label for="tlp">No. Telp</label>
                            <input class="form-control" type="text" name="tlp" id="tlp">
                        </div>
                    </div>
                    
                <div>
                @csrf
                <button class="btn btn-primary mt-2 ml-3" type="submit">Submit</button>
                </div>
        </div>
                    
        </form>
    
        </div>
    </div>

@endsection