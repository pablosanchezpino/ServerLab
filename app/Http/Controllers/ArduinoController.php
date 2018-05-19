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

		$fileLocation  = "Arduino/LEDstate.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		$stringToWrite = "1";

		fwrite($fh, $stringToWrite);
		fclose($fh);

		return redirect()->route('arduino.getLed')->with('ledON','Led Encendido');

	}

	public function ledOff()
	{

		$fileLocation  = "Arduino/LEDstate.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		$stringToWrite = "0";
		
		fwrite($fh, $stringToWrite);
		fclose($fh);

		return redirect()->route('arduino.getLed')->with('ledOFF','Led Apagado');

	}

}
