<section class="main-section">

<div class="content">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <form action="{{url('admin/outlet',@$outlet->id_outlet)}}" method="post">

        @csrf

        <div class="container-fluid ml-1 mt-5">
        <div class="card">
                <div class="card-header">
                    <h1>Edit Outlet</h1><br>
                    <a class="btn btn-secondary ml-2 mb-3" href="{{url('admin/outlet/indexOutlet')}}" id="uh">Back</a>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="form-group">
                        <label for="id_outlet">Id</label>
                        <input class="form-control" type="text" name="id_outlet" id="id_outlet" value="{{old('id_outlet',@$outlet->id_outlet)}}" readonly>      
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{old('nama',@$outlet->nama)}}">
                        </div>
                    </div>    
                    <div class="d-flex">
                            <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{old('alamat',@$outlet->alamat)}}">
                        </div>
                    </div>    
                    <div class="d-flex">
                        <div class="form-group">     
                            <label for="tlp">No. Telp</label>
                            <input class="form-control" type="text" name="tlp" id="tlp" value="{{old('tlp',@$outlet->tlp)}}">
                        </div>
                    </div>      
                        @csrf
                        <button class="btn btn-primary" type="submit">Submit</button>

                </div>
        </div>

    </form>
</div>

</section>