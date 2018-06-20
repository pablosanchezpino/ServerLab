<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArduinoController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

	public function moveTo($dir)
	{

		$fileLocation  = "Arduino/MoveTo.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		$stringToWrite = $dir;
		
		fwrite($fh, $stringToWrite);
		fclose($fh);

		$pos = [
			'W',
			'A',
			'S',
			'D',
			'X'
		];

		$move = [
			'movido hacia Adelante',
			'movido hacia la Izquierda',
			'movido hacia Atrás',
			'movido hacia la Derecha',
			'detenido'
		];

		$i=0;
		foreach ($pos as $p) {
		    if($p == $dir){
		    	$where = $move[$i]; 
		    }
	    	$i++;
		};

		return redirect()->route('arduino.moveTo')->with('move','Tu Robot se ha '.$where);

	}

}
