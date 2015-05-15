@extends('clients.layout')

@section('content')

<h1>HOTELES</h1>

<div class="row marketing">
	@if (Auth::check())
		<h1>Cliente</h1>
		@if (Session::has('success'))
        	<div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
		@if (Session::has('notice'))
	    	<div class="alert alert-success">{{Session::get('notice')}}</div>
	    @endif
		<a class="btn btn-info center-block" href="../logout">Logout</a>
	@endif
</div>

@stop