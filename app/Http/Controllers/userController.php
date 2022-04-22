<?php

namespace App\Http\Controllers;

use Session;


use App\Models\Member;
use App\Models\Organisation;
use App\Models\Contact;


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
            return back()->with('success','You have successfully registered');
        }
        else{
            return back()->with('fail','Something wrong');
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
          $data=Member::where('id','=',Session::get('loginId'))->first();

        }
        return view('user.dashboard',compact('data'));
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
       $data=Organisation::paginate(3);
       $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }
       
        return view('organization.organization',compact('detail'),['organisations'=>$data]);
    }
    public function profile()
    {
        $data=array();
         if(Session::has('loginId'))
        {
          $data=Member::where('id','=',Session::get('loginId'))->first();

        }
        return view('user.profile',compact('data'));
    }
    function editProfile(Request $request)
    {

       $data=Member::find($request->id);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }

       return view('user.edituser', ['data' => $data, 'detail' => $detail]);

    }
    function updateUser(Request $req,Member $mem )
    {
        //dd($org);
       // dd($request);
       $req->validate(
            ['username'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'password' => 'min:6|required',
        'dob'=>'required',
        'photo' => 'image|required'
        ]);
        if($req->hasFile('photo')){
            $filenameWithExt=$req->file('photo')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$req->file('photo')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$req->file('photo')->storeAs('public/images',$fileNameToStore);
        
        }
        else {
            $fileNameToStore='noimage.jpg';
        }
        
        $member=Member::find($req->id);
        $member->username=$req->username;
        $member->lastname=$req->lastname;
        $member->email=$req->email;
        $member->password=Hash::make($req->password);
        $member->dob=$req->dob;
        $member->photo=$fileNameToStore;
        
         $res=$member->save();
         if($res)
        {
            return redirect('organization.organization')->with('success','Profile Updated successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }


      
         
    }
}
