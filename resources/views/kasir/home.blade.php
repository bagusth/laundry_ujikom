@extends ('layout.kasir')

@section('title', 'Member')

@section('header')
	
		<h1 id="wel" class="ml-3 mt-2 mb-4 display-5">Yo, {{Session::get('nama')}}</h1>		
	
@endsection