<?php

namespace impotlx\Http\Controllers;



class PruebaController extends Controller
{

	public function index()
	{
		return "hola dedes Controller";
	}

	public function nombre($nombre)
	{
		return "hola mi nombre es".$nombre;
	}
}