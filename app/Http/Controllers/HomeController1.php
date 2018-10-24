<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;
use \Pusher\Pusher;


class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getLed(){
        return view('arduino.led');
    }
    public function addAdmin(){
        return view('arduino.addAdmin');
    }

    public function admins(){
        $users = User::all();
        return view('arduino.admins',compact('users'));
    }

    public function editAdmin($id){
        $user = User::find($id);
        return view('arduino.editAdmin',compact('user'));
    }

    public function updateAdmin(Request $request){
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->remember_token = $request->input('_token');
        $user->update();
        return redirect('admins');
    }

    public function deleteAdmin($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->action('HomeController@index')->with('status','El usuario ha sido eliminado correctamente');
    }

    public function changePass(){
        return view('arduino.changePass');
    }

    public function updatePass(Request $request){
        $user = DB::table('users')->where('email',$request->input('email'))->get();
        $user2 = User::find($user[0]->id);
        $user2->password = Hash::make($request->input('password'));
        $user2->save();
        return redirect()->action('HomeController@index')->with('status','La contraseña ha sido actualizada correctamente');
       // return $user[0]->id;
    }

    /* public function addRobot(){
        return view('arduino.addRobot');
    } */

    public function getMove(){
        return view('arduino.moveTo');
    }

    public function authenticate(Request $request) {
      /*   $socketId = $request->socket_id;
        $channelName = $request->channel_name;

        $options = [
            'cluster' => 'ap2',
            'useTLS' => true
        ];

        $pusher = new Pusher(
            '653641ea8df51cc6ed2f',
            '164268c6aa4c5e30936c',
            '626300',
            $options
        );

        $presence_data = ['name' => auth()->user()->name];
        $key = $pusher->presence_auth($channelName, $socketId, auth()->id(),$presence_data);

        return response($key); */

         $socketId = $request->socket_id;
        $channelName = $request->channel_name;

        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '653641ea8df51cc6ed2f',
            '164268c6aa4c5e30936c',
            '626300',
            $options
        );

        $presence_data = ['name' => auth()->user()->name];
        $key = $pusher->presence_auth($channelName, $socketId, auth()->id(), $presence_data);

        return response($key);
    }
}
