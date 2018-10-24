<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Robot;


class RobotController extends Controller{

    public function __construct(){
      $this->middleware('auth');
    }

    public function addRobot(){
      return view('arduino.addRobot');
    }

    public function create(Request $request){
        $robot = new Robot;
        $robot->nro_serie = $request->input('nro_serie');
        $robot->name = $request->input('name');
        $robot->status = 'Activo';
        $robot->save();
        return redirect('robots');
    }

    public function index(){
        $robots = Robot::all();
        return view('arduino.robots',compact('robots'));
    }

    public function editRobot($id){
        $robot = Robot::find($id);
        return view('arduino.editRobot',compact('robot'));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $robot = Robot::find($id);
        $robot->nro_serie = $request->input('nro_serie');
        $robot->name = $request->input('name');
        $robot->update();
        return redirect()->action('RobotController@index');

    }

    public function deleteRobot($id){
        $robot = Robot::find($id);
        $robot->delete();
        return redirect()->action('RobotController@index')->with('status','El robot ha sido eliminado correctamente');
    }
}
