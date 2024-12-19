<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
class UserController extends Controller
{   public $viewprefix;
    public $viewnamespace;
    public function __construct()
    {   //$this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.user.';
        $this->viewnamespace='panel/user';
    }
    public function index()
    {
        $users = User::all();
        return view($this->viewprefix.'index', compact('users'));
    }
    public function getadd()
    {
        return view('admin.user.add'); 
    }
    public function postadd(request $request)
    {
    	   $user = new User;
           $user->name = $request->txtname;
           $user->email = $request->txtemail;
           $user->password = Hash::make($request->txtpassword);
           $user->save();
           return redirect('panel/user');
    }
    public function getedit($id)
    {
        $user = User::findOrFail($id);
        return view($this->viewprefix.'edit',compact('user'));      
    }
    public function postedit($id,request $request)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtemail' => 'required',
            'txtpassword' => 'required'
        ]);
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->password = Hash::make($request->txtpassword);
        if($user->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('panel/user');   
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);   
        if($user->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('panel/user');       
    }
}
