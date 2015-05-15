<?php

class AuthController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getLogin()
	{
		$user = array(
  			'username' => Input::get('username'),
  			'password' => Input::get('password')
		);

		if (Auth::attempt($user)) {
			if (Auth::user()->role == 1)
			{
				return Redirect::to('client/home')->with('notice', 'Has iniciado sesion exitosamente');
			}
			if (Auth::user()->role == 2)
			{
				return Redirect::to('hotel/home')->with('notice', 'Has iniciado sesion exitosamente');
			}
			if (Auth::user()->role == 3)
			{
				return Redirect::to('admin/home')->with('notice', 'Has iniciado sesion exitosamente');
			}
		}
		else {
			return Redirect::to('/')->with('error', 'El usuario o contraseña es incorrecto')->withInput();
		}	
	}

	public function getLogout()
	{
		Auth::logout();
    	return Redirect::to('/')->with('notice', 'Su perfil se ha cerrado');
	}

	public function getRegister()
	{
		$title = 'Nuevo Usuario';
		return View::make('admins.newuser')
		->with('title',$title);
	}

	public function postRegister()
	{
		$inp 	= Input::all();
		$rules 	=  array(
			'username' 	=> 'required|unique:user',
			'password'	=> 'required|min:6|confirmed',
			'password_confirmation'	=> 'required',
			'name'		=> 'required',
			'lastname'	=> 'required',
			'email'		=> 'required|email|unique:user',
			'dir'		=> 'required',
			'phone'		=> 'required',
			'sex'		=> 'required'

		);
		$msg  	= array(
			'required' => 'Campo obligatorio.',
			'min'	   => 'El campo debe ser mas largo.',
			'unique'   => 'El :attribute ya existe.',
			'email'	   => 'Debe introducir un email valido.',
		);
		$attr   = array(
			'username'	=> 'Usuario',
			'email'		=> 'Email'
		);
		$validator = Validator::make($inp, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user = new User;
		$user->username = $inp['username'];
		$user->password = Hash::make($inp['password']);
		$user->name 	= $inp['name'];
		$user->lastname = $inp['lastname'];
		$user->email 	= $inp['email'];
		$user->dir 		= $inp['dir'];
		$user->phone 	= $inp['phone'];
		$user->sex 		= $inp['sex'];
		$user->role     = 3;

		if ($user->save()) {
			Session::flash('success','Usuario creado satisfactoriamente');
			return Redirect::to('admin/home');
		}else
		{
			Session::flash('danger','Error al crear al usuario');
			return Redirect::back()->withInput();
		}
	}

}