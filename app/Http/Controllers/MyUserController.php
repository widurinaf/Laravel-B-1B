<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\MyUser;

class MyUserController extends Controller
{
    public function Tampil(){
    	$myusers = MyUser::all();
    	return view('users.show', [
    		'myusers' => $myusers
    	]);
    }

    public function Simpan(Request $request){
    	$myusers = new MyUser(); //Membuat object dari model MyUser.php
    	$myusers->name = $request->name;
    	$myusers->email = $request->email;
    	$myusers->password = md5($request->password);
    	$myusers->birthdate = $request->birthdate;

    	$myusers->save();
    	return redirect()->Route('show');
    }

    public function Destroy($id)
    {
    	$myusers = MyUser::find($id);
        $myusers->delete();
        return redirect()->Route('show');
    }
}
