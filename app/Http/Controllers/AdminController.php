<?php

namespace App\Http\Controllers;

use Session;


use App\Models\User;
use App\Models\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

        

    public function loginuser(Request $req)
    {
        $req->validate(
            [
            'email'=>'required|email',
        'password'=>'required | min:6'
        ]);
        $member=Admin::where('email','=',$req->email)->first();
        if($member)
        {
            if(Hash::check($req->password,$member->password)){
                $req->session()->put('loginId',$member->id);
                return redirect('dashboard');
            }
            else {
                return back()->with('fail','Password not matches');
            }
        }
            else {
                return back()->with('fail','Email not registered');
            }
        
    }
    public function dashboard()
    {
        $data=array();
         if(Session::has('loginId'))
        {
          $data=Admin::where('id','=',Session::get('loginId'))->first();

        }
        return view('admin.dashboard',compact('data'));
    }
    public function signout()
    {
        if(Session::has('loginId')){
           Session::pull('loginId');
           return redirect('userlogin');
        }
        
    }
    function Index()
    {
       $data=User::paginate(3);
       $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Admin::where('id','=',Session::get('loginId'))->first();

        }
       
        return view('user.index',compact('detail'),['users'=>$data]);
    }
   
    
    
}
