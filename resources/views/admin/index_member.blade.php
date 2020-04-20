@extends ('layout.app')

@section('title', 'Member')

			@if(\Session::has('error'))
                <div class="alert alert-danger">
                    <div>{{Session::get('error')}}</div>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <div>{{Session::get('success')}}</div>
                </div>
            @endif  


@section('content')

           <style>
                #ih{
                    float: right;
                    margin-bottom:5px;
                }
           </style> 

	<head>
	
			<div class="card-body">
				<div class="container-fluid">
                	<div class="container">
                    	 <div class="jumbotron bg-alt">
							<h1 id="wel" class="mt-2 mb-4 display-5">Member Page</h1>
                     	</div>
                	</div>
            	</div>
			</div>
	</head>	

	<body>
		<div card="card-body">
			<div class= "container-fluid mt-2">
				<div class= "container">
                    <a href="{{url('admin/member/tambah_pelanggan')}}" class="btn btn-primary mb-4" id="ih"><i class="fas fa-user-plus"></i>&nbsp;Tambah Pelanggan</a><br><br>
						<table id=dtBasicExample class="table table-striped table-bordered " cellspacing="0" width="60%">
								<thead class="thead-dark">
									<tr>
										<th scope="th-sm">Id</th>
										<th scope="th-sm">Nama</th>
										<th scope="th-sm">Alamat</th>
										<th scope="th-sm">Jenis Kelamin</th>
										<th scope="th-sm">Tlp</th>
										<th scope="th-sm">Action</th>
									</tr>
								</thead>
								@foreach($member as $row)
								<tbody>
									<tr>
										<td>{{$row->id_member}}</td>
										<td>{{$row->nama}}</td>
										<td>{{$row->alamat}}</td>
										<td>{{$row->jenis_kelamin}}</td>
										<td>{{$row->tlp}}</td>
										<td>
											<a class="badge badge-warning" href="{{url('admin/member/editPelanggan/'.$row->id_member)}}"><i class="fa fa-edit"></i>&nbsp;Edit</a>

                                            <a class="badge badge-danger" href="{{url('admin/delete/member'.$row->id_member)}}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
										</td>
									</tr>
								</tbody>
								@endforeach 
						</table>
				
					</div>
				</div>
			</div>		
		</body>			

@endsection