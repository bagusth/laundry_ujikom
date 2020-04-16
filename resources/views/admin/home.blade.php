@extends ('layout.app')

@section('title', 'Member')

@section('header')
	
		<h1 id="wel" class="ml-3 mt-2 mb-4 display-5">Hai, {{Session::get('nama')}}</h1>		
	
@endsection