<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Organisation;
use Session;

use Illuminate\Http\Request;

class organizationController extends Controller
{
    //
    public function organization()
    {
        $data=array();
         if(Session::has('loginId'))
        {
          $data=Member::where('id','=',Session::get('loginId'))->first();

        }
        return view('createorganization',compact('data'));
    }
    public function Create(Request $req)
    {
        $req->validate(
            ['name'=>'required',
            'email'=>'required|email|unique:organisations',
            'phone'=>'required|min:10|numeric',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'postalcode'=>'required'
        ]);
        $member=new Organisation();
        $member->name=$req->name;
        $member->email=$req->email;
        $member->phonenumber=$req->phone;
        $member->address=$req->address;
        $member->city=$req->city;
        $member->state=$req->state;
        $member->country=$req->country;
        $member->postalcode=$req->postalcode;
        $res=$member->save();
        if($res)
        {
            return redirect('organization')->with('success','organization added successfully');
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }
    function organisationShow()
    {
       $data=Organisation::all();
       
        return view('organization',['organisations'=>$data]);
    }
    function viewUser($id)
    {
       $data=Organisation::find($id);
        // dd($id);
        // $detail=array();
        //  if(Session::has('loginId'))
        // {
        //   $detail=Member::where('id','=',Session::get('loginId'))->first();

        // }
       
       // return view('vieworganization',compact(['detail','data']));
       return view('dashboard',compact('data'));
     // return view('dashboard');

    }
}
