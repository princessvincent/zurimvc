<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Createuser(Request $request){
$use = new User();
$use->name = $request->name;
$use->phone_num = $request->phone_num;
$use->email = $request->email;
$use->save();
return redirect()->back()->with('status', 'User Created Successfully!');
    }

    public function Edituser($id){
$edit = User::find($id);
return view('Edituser', compact('edit'));
    }

    public function updateuser(Request $request, $id){
$upd = User::find($id);
$inp = $request->all();
$upd->update($inp);
return redirect('view')->with('status', 'User Updated Successfully!');

    }

    public function Getuser(){
$view = User::all();
return view('Users', compact('view'));
    }


    public function Deleteuser($id){
$delete = User::find($id);
$delete->delete();
return redirect('view')->with('status', 'User Deleted Successfully!');
    }

    
}
