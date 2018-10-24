<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Request;

class MarkController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }


	public function ledOn()
	{

		$fileLocation  = "Arduino/LEDstate2.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		$stringToWrite = "1";

		fwrite($fh, $stringToWrite);
		fclose($fh);

		return redirect()->route('arduino.getLed2')->with('ledON','Led Encendido');

	}

	public function ledOff()
	{

		$fileLocation  = "Arduino/LEDstate2.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		$stringToWrite = "0";

		fwrite($fh, $stringToWrite);
		fclose($fh);

		return redirect()->route('arduino.getLed2')->with('ledOFF','Led Apagado');

	}

	public function moveTo($dir)
	{

		$fileLocation  = "Arduino/moveTo2.txt";
		$fh 		   = fopen($fileLocation, 'w') or die ("ERROR");
		if($dir=="X"){
			$stringToWrite = $dir." 1";
			fwrite($fh, $stringToWrite);
		}else{
			$stringToWrite= implode("\n",Request::input("secuencia"));
			fwrite($fh, $stringToWrite."\nX 1 _ _ _ 0 1");
		}
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

		return redirect()->route('arduino.moveTo2')->with('move','Mark-2 secuencia ingresada');//.$where);

	}


}
