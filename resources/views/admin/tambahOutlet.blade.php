<section class="main-section">

<div class="content">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Cek -->
            @if ($errors->any())
            <div class="card-body">
                <div class="alert alert-danger mt-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
                
            @endif

            <style>
                #uh > a{
                    color:black;
                    font-size:24px;
                }
                
            </style> 

        <form action="{{url('admin/outlet')}}" method="post">

        @csrf

    <div class="container-fluid ml-1 mt-3">
        <div class="card">
                <div class="card-header">
                    <h1>Tambah Outlet</h1>
                    <a class="btn btn-secondary ml-2" href="{{url('admin/outlet/indexOutlet')}}" id="uh">Back</a>
                </div>

                <div class="card-body">
                    <div class="d-flex">
                        <div class="form-group" id="haha"> 
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
                    <div class=d-flex>    
                        <div class="form-group">    
                            <label for="tlp">No. Telp</label>
                            <input class="form-control" type="text" name="tlp" id="tlp">
                        </div>
                     </div>    
                <div>
                @csrf
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </div>
    </div>
                    
        </form>
    
</div>

</section>