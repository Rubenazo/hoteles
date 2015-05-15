<?php

class AdminController extends BaseController {

	public function showHome()
	{
		$title = 'Administrador';
		return View::make('admins.home')
		->with('title',$title);
	}

	public function getHotel()
	{
		$title = 'Nuevo Hotel';
		return View::make('admins.newhotel')
		->with('title',$title);
	}

	public function postHotel()
	{
		$inp 	= Input::all();
		$rules 	=  array(
			'username' 	=> 'required|unique:user',
			'password'	=> 'required|min:6|confirmed',
			'password_confirmation'	=> 'required',
			'name'		=> 'required',
			'email'		=> 'required|email|unique:user',
			'dir'		=> 'required',
			'phone'		=> 'required',
			'ced'		=> 'required'

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
		$user->ced 		= $inp['ced'];
		$user->email 	= $inp['email'];
		$user->dir 		= $inp['dir'];
		$user->phone 	= $inp['phone'];
		$user->role     = 2;

		if ($user->save()) {
			Session::flash('success','Hotel creado satisfactoriamente');
			return Redirect::to('admin/home');
		}else
		{
			Session::flash('danger','Error al crear al usuario');
			return Redirect::back()->withInput();
		}
	}
}