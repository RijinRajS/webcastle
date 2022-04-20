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
            return redirect('organization')->with('success','Organization added successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
        
    }
    function organisationShow()
    {
       $data=Organisation::all();
       
        return view('organization',['organisations'=>$data]);
    }
   
    function viewUser(Request $request)
    {

       $data=Organisation::find($request->id);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }

       return view('vieworganization', ['data' => $data, 'detail' => $detail]);

    }
    function edit(Request $request)
    {

       $data=Organisation::find($request->id);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }

       return view('editorganization', ['data' => $data, 'detail' => $detail]);

    }
    function update(Request $request,Organisation $org )
    {
        //dd($org);
       // dd($request);
       $request->validate(
            ['name'=>'required',
            'email'=>'required|email',
            'phonenumber'=>'required|min:10|numeric',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'postalcode'=>'required'
        ]);
        
        $data=Organisation::find($request->id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->phonenumber=$request->phonenumber;
         $data->address=$request->address;
         $data->city=$request->city;
         $data->state=$request->state;
         $data->country=$request->country;
         $data->postalcode=$request->postalcode;
         
         $res=$data->save();
         if($res)
        {
            return redirect('organization')->with('success','Organization Updated successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }


      
         
    }
    function delete(Request $request)
    {
       
    $data=Organisation::find($request->id);
    $data->delete();
    return redirect('organization')->with('success','Organization Deleted successfully');
     }
    
}
