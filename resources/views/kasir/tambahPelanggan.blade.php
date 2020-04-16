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

        <form action="{{url('kasir/member')}}" method="post">

        @csrf

    <div class="container-fluid ml3- mr-3 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Pelanggan</h1>
                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label for="id">Id</label>
                        <input type="text" name="id" id="id">      
                    </div>
                    <div class="form-group"> 
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama">
                    </div>    
                    <div>
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat">
                    </div>  
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin Anda</option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                    </div>    
                    <div>    
                        <label for="tlp">No. Telp</label>
                        <input type="text" name="tlp" id="tlp">
                    </div>
                <div>
                @csrf
                <button class="btn btn-primary mt-2 ml-3" type="submit">Submit</button>
                </div>
    </div>
                    
        </form>
    
    </div>
</div>

</section>