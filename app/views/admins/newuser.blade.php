@extends('admins.layout')

@section('content')
<div class="row marketing">
	<h3>Crear Usuario</h3>

	{{ Form::open(array('url' => 'admin/newuser')) }}

        @if( $errors->has('username') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('username','Nombre de Usuario') }}
				{{ Form::text('username', Input::old('username'), array('class'=>'form-control', 'placeholder'=>'nombre de usuario', 'autocomplete'=>'off')) }}
		        @if( $errors->has('username') )
		            @foreach($errors->get('username') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('password') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('password','Contraseña') }}
				{{ Form::text('password', Input::old('password'), array('class'=>'form-control', 'placeholder'=>'contraseña', 'autocomplete'=>'off')) }}
		        @if( $errors->has('password') )
		            @foreach($errors->get('password') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('password_confirmation') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('password_confirmation','Repetir Contraseña') }}
				{{ Form::text('password_confirmation', Input::old('password_confirmation'), array('class'=>'form-control', 'placeholder'=>'repetir contraseña', 'autocomplete'=>'off')) }}
		        @if( $errors->has('password_confirmation') )
		            @foreach($errors->get('password_confirmation') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>		

        @if( $errors->has('name') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('name','Nombre') }}
				{{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'nombre', 'autocomplete'=>'off')) }}
		        @if( $errors->has('name') )
		            @foreach($errors->get('name') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('lastname') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('lastname','Apellido') }}
				{{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'apellido', 'autocomplete'=>'off')) }}
				@if( $errors->has('lastname') )
		            @foreach($errors->get('lastname') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('ced') )
        	<div class="form-group has-error">
        @else
			<div class="form-group">
		@endif
				{{ Form::label('ced','Cedula') }}
				{{ Form::text('ced', Input::old('ced'), array('class'=>'form-control', 'placeholder'=>'cedula', 'autocomplete'=>'off')) }}
		        @if( $errors->has('ced') )
		            @foreach($errors->get('ced') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('email') )
			<div class="form-group has-error">
		@else
			<div class="form-group">
		@endif
				{{ Form::label('email','Email') }}
				{{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'email', 'autocomplete'=>'off')) }}
				@if( $errors->has('email') )
		            @foreach($errors->get('email') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('dir') )
			<div class="form-group has-error">
		@else
			<div class="form-group">
		@endif
				{{ Form::label('dir','Direccion') }}
				{{ Form::text('dir', Input::old('dir'), array('class'=>'form-control', 'placeholder'=>'direccion', 'autocomplete'=>'off')) }}
				@if( $errors->has('dir') )
		            @foreach($errors->get('dir') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		@if( $errors->has('phone') )
			<div class="form-group has-error">
		@else
			<div class="form-group">
		@endif
				{{ Form::label('phone','Telefono') }}
				{{ Form::text('phone', Input::old('phone'), array('class'=>'form-control', 'placeholder'=>'telefono', 'autocomplete'=>'off')) }}
				@if( $errors->has('phone') )
		            @foreach($errors->get('phone') as $error) 
		            	<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					 		<p class="textoPromedio">{{ $error }}</p>
					 	</div>
		            @endforeach
		        @endif
			</div>

		<div class="form-group">
			{{ Form::label('sex','Sexo') }}
			{{ Form::radio('sex','M') }} M
			{{ Form::radio('sex','F') }} F
			@if( $errors->has('sex') )
	            @foreach($errors->get('sex') as $error) 
	            	<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 		<p class="textoPromedio">{{ $error }}</p>
				 	</div>
	            @endforeach
	        @endif
		</div>

		{{ Form::submit('Guardar',array('class'=>'btn btn-success center-block', 'id'=>'createbutton'))}}
	{{ Form::close() }}
</div>

@stop