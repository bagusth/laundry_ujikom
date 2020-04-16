@extends('layout.app')

@section('header')

    <h1 id="wel" class="mt-2 ml-3 mb-4 display-5">Entry Transaction Page</h1>

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
    	       <a href="{{url('admin/transaksi/tambahTransaksi')}}" class="btn btn-primary mb-4 mr-3" id="ih"> Tambah Transaksi</a>
            </div><br><br>	
			<div class= "container-fluid mt-2">
				<div id= "container">
						<table id=dtBasicExample class="table table-striped table-bordered " cellspacing="0" width="60%">
							<thead class="thead-dark">
								<tr>
									<th scope="th-sm">Id</th>
                                    <th scope="th-sm">Id Outlet</th>
									<th scope="th-sm">Kode Invoice</th>
									<th scope="th-sm">Tanggal</th>
                                    <th scope="th-sm">Batas Waktu</th>
                                    <th scope="th-sm">Tanggal Bayar</th>
                                    <th scope="th-sm">Biaya Tambahan</th>
                                    <th scope="th-sm">Diskon</th>
                                    <th scope="th-sm">Pajak</th>
                                    <th scope="th-sm">Status</th>
                                    <th scope="th-sm">Dibayar</th>
                                    <th scope="th-sm">Id User</th>
                                    <th scope="th-sm">Action</th>
								</tr>
							</thead>
							@foreach($transaksi as $row)
							<tbody>
								<tr>
									<td>{{$row->id}}</td>
                                    <td>{{$row->id_outlet}}</td>
                                    <td>{{$row->kode_invoice}}</td>
									<td>{{$row->tgl}}</td>
                                    <td>{{$row->batas_waktu}}</td>
                                    <td>{{$row->tgl_bayar}}</td>
                                    <td>{{$row->biaya_tambahan}}</td>
                                    <td>{{$row->diskon}}</td>
                                    <td>{{$row->pajak}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->dibayar}}</td>
                                    <td>{{$row->id_user}}</td>
									<td>
											<a class="badge badge-warning" href="{{url('admin/transaksi/editPaket/'.$row->id_transaksi)}}">Edit</a>

                                            <a class="badge badge-danger" href="{{url('admin/delete/transaksi'.$row->id_transaksi)}}">Delete</a>
										</td>
								</tr>
							</tbody>
							@endforeach 
					</table>
				</div>	
			</div>
		</div>
@endsection
