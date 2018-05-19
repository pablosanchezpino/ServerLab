<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArduinoController extends Controller
{
    
	public function getLed()
	{

		return view('arduino.led');

	}

	public function ledOn()
	{

		return redirect()->route('arduino.getLed')->with('ledON','Led Encendido');

	}

	public function ledOff()
	{

		return redirect()->route('arduino.getLed')->with('ledOFF','Led Apagado');

	}

}
