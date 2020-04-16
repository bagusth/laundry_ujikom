@extends('layout.app')

@section('header')

    <h1 id="wel" class="mt-2 ml-3 mb-4 display-5">Packet/Product Page</h1>

@endsection

    @section('content')
            <style>
				#ih{
					float:right;
                    margin-right:10px;
                    margin-bottom:5px;	
				}
			</style>	
		<div class="card-body">
			<div class="list-item-group">
    	       <a href="{{url('admin/paket/tambahPaket')}}" class="btn btn-primary mb-4 mr-3" id="ih"> Tambah Paket </a>
            </div><br><br>	
			<div class= "container-fluid mt-2">
				<div id= "container">
						<table id=dtBasicExample class="table table-striped table-bordered " cellspacing="0" width="60%">
							<thead class="thead-dark">
								<tr>
									<th scope="th-sm">Id</th>
                                    <th scope="th-sm">Id Outlet</th>
									<th scope="th-sm">Jenis</th>
									<th scope="th-sm">Nama Paket</th>
									<th scope="th-sm">Harga</th>
									<th scope="th-sm">Action</th>
								</tr>
							</thead>
							@foreach($paket as $row)
							<tbody>
								<tr>
									<td>{{$row->id_paket}}</td>
                                    <td>{{$row->id_outlet}}</td>
                                    <td>{{$row->jenis}}</td>
									<td>{{$row->nama_paket}}</td>
									<td>{{$row->harga}}</td>
									<td>
											<a class="badge badge-warning" href="{{url('admin/paket/editPaket/'.$row->id_paket)}}">Edit</a>

                                            <a class="badge badge-danger" href="{{url('admin/delete/paket'.$row->id_paket)}}">Delete</a>
										</td>
								</tr>
							</tbody>
							@endforeach 
					</table>
				</div>	
			</div>
		</div>
@endsection
