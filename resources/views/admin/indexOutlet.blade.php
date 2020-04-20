@extends ('layout.app')

@section ('title', 'Outlet')

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



@section ('content')

			<style>
				#ih{
					float:right;
                    margin-right:10px;
                    margin-bottom:5px;	
				}
			</style>
	<head>
	
			<div class="card-body">
				<div class="container-fluid">
                	<div class="container">
                    	 <div class="jumbotron bg-alt">
							<h1 id="wel" class="mt-2 mb-4 display-5">Outlet Page</h1>
                     	</div>
                	</div>
            	</div>
			</div>
	</head>				
		<div class="card-body">
			<div class="list-item-group">
    	       <a href="{{url('admin/outlet/tambahOutlet')}}" class="btn btn-primary mb-4 mr-3" id="ih"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Outlet </a>
            </div><br><br>	
			<div class= "container-fluid mt-2">
				<div id= "container">
						<table id=dtBasicExample class="table table-striped table-bordered " cellspacing="0" width="60%">
							<thead class="thead-dark">
								<tr>
									<th scope="th-sm">Id</th>
									<th scope="th-sm">Nama</th>
									<th scope="th-sm">Alamat</th>
									<th scope="th-sm">Tlp</th>
									<th scope="th-sm">Action</th>
								</tr>
							</thead>
							@foreach($outlet as $row)
							<tbody>
								<tr>
									<td>{{$row->id_outlet}}</td>
									<td>{{$row->nama}}</td>
									<td>{{$row->alamat}}</td>
									<td>{{$row->tlp}}</td>
									<td>
											<a class="badge badge-warning" href="{{url('admin/outlet/editOutlet/'.$row->id_outlet)}}"><i class="fa fa-edit"></i>&nbsp;Edit</a>

                                            <a class="badge badge-danger" href="{{url('admin/delete/outlet'.$row->id_outlet)}}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
										</td>
								</tr>
							</tbody>
							@endforeach 
					</table>
				</div>	
			</div>
		</div>			
@endsection