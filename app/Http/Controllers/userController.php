<?php

namespace App\Http\Controllers;

use Session;


use App\Models\Member;
use App\Models\Organisation;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function registeruser(Request $req)
    {
        $req->validate(
            ['username'=>'required',
            'email'=>'required|email|unique:members',
            'password' => 'min:6|required',
'confirmpassword' => 'min:6|required_with:confirmpassword|same:password',
        
        'dob'=>'required'
        ]);
        $member=new Member();
        $member->username=$req->username;
        $member->email=$req->email;
        $member->password=Hash::make($req->password);
        $member->dob=$req->dob;
        
        $res=$member->save();
        if($res)
        {
            return back()->with('success','you have successfully registered');
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }
    public function loginuser(Request $req)
    {
        $req->validate(
            [
            'email'=>'required|email',
        'password'=>'required | min:6'
        ]);
        $member=Member::where('email','=',$req->email)->first();
        if($member)
        {
            if(Hash::check($req->password,$member->password)){
                $req->session()->put('loginId',$member->id);
                return redirect('dashboard');
            }
            else {
                return back()->with('fail','password not matches');
            }
        }
            else {
                return back()->with('fail','email not registered');
            }
        
    }
    public function dashboard()
    {
        $data=array();
         if(Session::has('loginId'))
        {
          $data=Member::where('id','=',Session::get('loginId'))->first();

        }
        return view('dashboard',compact('data'));
    }
    public function signout()
    {
        if(Session::has('loginId')){
           Session::pull('loginId');
           return redirect('userlogin');
        }
        
    }
    function organizationShow()
    {
       $data=Organisation::paginate(5);
       $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }
       
        return view('organization',compact('detail'),['organisations'=>$data]);
    }
}
