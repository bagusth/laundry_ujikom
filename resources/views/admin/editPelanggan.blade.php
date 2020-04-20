@extends('layout.app')


@section('content')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <form action="{{url('admin/member',@$member->id_member)}}" method="post">

        @csrf
        @if(!empty($member))
            @method('PATCH')
        @endif

    <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Edit Pelanggan</h1><br>
                    <a class="btn btn-secondary ml-2 mb-3" href="{{url('admin/member/index_member')}}" id="uh">Back</a>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="id_member">Id</label>
                            <input class="form-control" type="text" name="id_member" id="id_member" value="{{old('id_member',@$member->id_member)}}" readonly>      
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{old('nama',@$member->nama)}}">
                        </div>
                    </div>    
                    <div class="d-flex">
                            <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{old('alamat',@$member->alamat)}}">
                        </div>
                    </div>    
                    
                    <div class="d-flex">
                        <div class="dropdown mr-1">
                            <div class="form-group">
                            <label  for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin Anda</option>
                            <option value="L" {{old('jenis_kelamin'. (@$member->jenis_kelamin == 'L')? 'selected' : '' )}}>L</option>
                            <option value="P" {{old('jenis_kelamin'. (@$member->jenis_kelamin == 'P')? 'selected' : '' )}}>P</option>
                    </select>
                    </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group">     
                            <label for="tlp">No. Telp</label>
                            <input class="form-control" type="text" name="tlp" id="tlp" value="{{old('tlp',@$member->tlp)}}">
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