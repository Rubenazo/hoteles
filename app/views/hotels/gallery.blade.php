@extends('hotels.layout')

@section('content')
<div class="row marketing">
	<h1>Galeria</h1>
<!--	{{ Form::open(array('url' => 'hotel/gallery')) }}

	    @if( $errors->has('image') )
	    	<div class="form-group has-error">
	    @else
			<div class="form-group">
		@endif
				{{ Form::label('image','Imagen') }}
				{{ Form::file('image', Input::old('image'), array('class'=>'form-control', 'placeholder'=>'imagen', 'autocomplete'=>'off')) }}
		        @if( $errors->has('image') )
		            @foreach($errors->get('image') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('description') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('description','Descripcion') }}
				{{ Form::text('description', Input::old('description'), array('class'=>'form-control', 'placeholder'=>'descripcion', 'autocomplete'=>'off')) }}
		        @if( $errors->has('description') )
		            @foreach($errors->get('description') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>
		
		{{ Form::submit('Guardar',array('class'=>'btn btn-success center-block', 'id'=>'createbutton')) }}

	{{ Form::close() }}	-->


		<ul id="filelist"></ul>
		<br />
		 
		<div id="container">
		    <a id="browse" href="javascript:;">[Browse...]</a>
		    <a id="start-upload" href="javascript:;">[Start Upload]</a>
		</div>
	</div>

@stop

