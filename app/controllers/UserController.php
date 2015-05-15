<?php

class UserController extends BaseController {

	public function showClientHome()
	{
		$title = 'Cliente';
		return View::make('clients.home')
		->with('title',$title);
	}

	public function showHotelHome()
	{
		$title = 'Hotel';
		return View::make('hotels.home')
		->with('title',$title);
	}

	public function getGallery()
	{
		$title = 'Galeria';
		return View::make('hotels.gallery')
		->with('title',$title);
	}

	public function postGallery()
	{

		if (empty($_FILES) || $_FILES["file"]["error"]) {
			die('{"OK": 0}');
		}
		 
		$fileName = $_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "gallery/$fileName");
		 
		die('{"OK": 1}');

	/*	$inp = Input::all();
		$image = new Gallery;
		$image->description = $inp['description'];
		$image->image = $inp['image']->getClientOriginalName();

		if ($user->save()) {
			$inp['image']->move("gallery",$inp['image']->getClientOriginalName());
			Session::flash('success','Usuario creado satisfactoriamente');
			return Redirect::to('admin/home');
		}else
		{
			Session::flash('danger','Error al crear al usuario');
			return Redirect::back()->withInput(); 
		} */
	} 

}