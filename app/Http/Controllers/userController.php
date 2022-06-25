<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;

use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Create()
    {
        $data=array();
         if(Session::has('loginId'))
        {
          $data=Admin::where('id','=',Session::get('loginId'))->first();

        }
        return view('user.createuser',compact('data'));
    }
    public function Store(Request $req)
    {
        $req->validate(
            ['name'=>'required',
            'email'=>'required|email|unique:users',
            'mobile'=>'required|digits:10|numeric',
            
        ]);
        $user=new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->mobile=$req->mobile;
        $res=$user->save();
        if($res)
        {
            return redirect('user')->with('success','User added successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
        
    }
   
    function viewUser(Request $request)
    {
       $orgid=User::find($request->id);
    //dd($orgid);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Admin::where('id','=',Session::get('loginId'))->first();

        }
       return view('user.viewuser', ['detail' => $detail,'orgid'=>$orgid]);

    }
    function edit(Request $request)
    {

       $data=User::find($request->id);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Admin::where('id','=',Session::get('loginId'))->first();

        }

       return view('user.editusers', ['data' => $data, 'detail' => $detail]);

    }
    function update(Request $request,User $org )
    {
        //dd($org);
       // dd($request);
       $request->validate(
            ['name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10|numeric',
           
        ]);
        
        $data=User::find($request->id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->mobile=$request->mobile;
       
         
         $res=$data->save();
         if($res)
        {
            return redirect('user')->with('success','User Updated successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }     
    }
    function delete(Request $request)
    {
       
    $data=User::find($request->id);
    $data->delete();
    return redirect('user')->with('success','User Deleted successfully');
     }
    
}
