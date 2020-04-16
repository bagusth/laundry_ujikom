

<section>
		<div class="container-fluid">
			<div class="jumbotron bg-dark">
@extends('layout.app')

	@section('header')
		<h1 id="wel" class="ml-3 mt-2 display-5">Wazzup, {{Session::get('nama')}}</h1>
				
	@endsection

		@section('content')
				

			<div class= "container-fluid mt-2">
				<div id= "container">
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
									<td>{{$row->id}}</td>
									<td>{{$row->nama}}</td>
									<td>{{$row->alamat}}</td>
									<td>{{$row->jenis_kelamin}}</td>
									<td>{{$row->tlp}}</td>
									<td>
										<a class="btn btn-warning" href="{{url('kasir/member/editPelanggan/'.$row->id)}}">Edit</a>

										<form action="{{url('kasir/delete/member'.$row->id)}}" method="post">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>
									</td>
								</tr>
							</tbody>
							@endforeach 
					</table>
				
				</div>
			</div>	
		</div>
</section>
@endsection