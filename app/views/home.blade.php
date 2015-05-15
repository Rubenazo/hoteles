@extends('layout')

@section('content')

<h1>HOTELES</h1>

<div id="login" class="row marketing">
	@if (Auth::check())
		@if (Session::has('notice'))
	    	<div class="alert alert-success">{{Session::get('notice')}}</div>
	    @endif
		<a class="btn btn-info center-block" href="logout">Logout</a>
	@else
		{{ Form::open(array('url' => 'login')) }}
			
			<div class="form-group">
				{{ Form::text('username',Input::old('username'),array('class'=>'form-control', 'placeholder'=>'Nombre de Usuario', 'autocomplete'=>'off')) }}
			</div>
			
			<div class="form-group">
				{{ Form::password('password',array('class'=>'form-control', 'placeholder'=>'Contraseña', 'autocomplete'=>'off')) }}           
			</div>

			@if (Session::has('error'))
	    		<div class="alert alert-danger">{{Session::get('error')}}</div>
	    	@endif

	    	@if (Session::has('notice'))
	    		<div class="alert alert-success">{{Session::get('notice')}}</div>
	    	@endif
			{{ Form::submit('Login',array('class'=>'btn btn-info center-block'))}}
			
		{{ Form::close() }}
	@endif
</div>

@stop