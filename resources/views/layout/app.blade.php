

<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			
    <div class="card-body">
    
        <div class="container-fluid">
			
            <div class="jumbotron bg-dark">

                	<main>
                        @yield('header')
                    </main>

                <li class="list-group-item">
                    <a href="{{url('admin/home')}}">Home</a>
                </li>
			
                <li class="list-group-item">
					<a href="{{url('admin/transaksi/indexTransaksi')}}">Entri Transaksi</a>
				</li>

            	<li class="list-group-item">
				    <a id="member" href="{{url('admin/member/index_member')}}">Registrasi Pelanggan</a><br>
				</li>
			
            	<li class="list-group-item">
					<a href="{{url('admin/outlet/indexOutlet')}}">Outlet</a>
				</li>
			
            	<li class="list-group-item">
					<a href="{{url('admin/paket/indexPaket')}}">Paket/Produk</a>
				</li>
		
            	<li class="list-group-item">
					<a id="logout" class="btn btn-danger" href="{{url('logout')}}">Logout</a>
				</li>
            
                <style type="text/css">
                    #member{
                        float: left;
                        margin-top:5px;
                        margin-right:15px;
                        }
                    #wel{
                        color:white;
                    }	 	 
                </style>

            </div>    
        </div>  

    </div>

        <main>
             @yield('content')
        </main>
