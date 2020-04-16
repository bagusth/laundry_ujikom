@extends ('layout.app')

@section('title', 'Member')

@section('header')

			<h1 id="wel" class="ml-3 mt-2 mb-4 display-5">Member Page</h1>

@endsection            

@section('content')

           <style>
                #ih{
                    float: right;
                    margin-right:10px;
                    margin-bottom:5px;
                }
           </style> 

	<body>
		<div card="card-body">
			<div class= "container-fluid mt-2">
				<div id= "container">
                    <div class="list-item-group">
                    <a href="{{url('admin/member/tambah_pelanggan')}}" class="btn btn-primary mb-4 mr-4" id="ih"> Tambah Pelanggan </a>
                    </div><br><br>
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
											<a class="badge badge-warning" href="{{url('admin/member/editPelanggan/'.$row->id_member)}}">Edit</a>

                                            <a class="badge badge-danger" href="{{url('admin/delete/member'.$row->id_member)}}">Delete</a>
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