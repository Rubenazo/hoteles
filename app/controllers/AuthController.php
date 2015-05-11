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

	}
	public function getRegister()
	{
		
	}
	public function postRegister()
	{
		$inp 	= Input::all();
		$rules 	=  array(
			'username' 	=> 'required|unique:user',
			'password'	=> 'required|min:6',
			're_pass'	=> 'required|confirmed',
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

		if ($user->save()) {
			Session::flash('success','Usuario creado satisfactoriamente');
			return Redirect::to('');
		}else
		{
			Session::flash('danger','Error al crear al usuario');
			return Redirect::back()->withInput();
		}
	}

}