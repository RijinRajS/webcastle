<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Organisation;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    //
    public function contact()
    {
        $data=Organisation::all();
        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }
       
        return view('contacts.contact',compact('detail'),['organisations'=>$data]);
    }
    public function Create(Request $req)
    {
        $req->validate(
            ['firstname'=>'required',
            'lastname'=>'required',
            'organization'=>'required',
            'email'=>'required|email|unique:contacts',
            'phone'=>'required|min:10|numeric',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required'
            
        ]);
        $member=new Contact();
        $member->firstname=$req->firstname;
        $member->lastname=$req->lastname;
        $member->organisation_id=$req->organization;
        $member->email=$req->email;

        $member->phone=$req->phone;
        $member->address=$req->address;
        $member->city=$req->city;
        $member->state=$req->state;
        $res=$member->save();
        if($res)
        {
            return redirect('contacts.contact')->with('success','Contact created successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
        
    }
    function viewContact(Request $request)
    {

        
       $data=Contact::find($request->id);
       
    //dd($orgid);

        $detail=array();
         if(Session::has('loginId'))
        {
          $detail=Member::where('id','=',Session::get('loginId'))->first();

        }
        

       return view('contacts.viewcontact', ['data' => $data, 'detail' => $detail]);

    }
    function editContact(Request $request)
    {

        $org=Organisation::all();
        $data=Contact::find($request->id);
        
     //dd($orgid);
 
         $detail=array();
          if(Session::has('loginId'))
         {
           $detail=Member::where('id','=',Session::get('loginId'))->first();
 
         }
         
 
        return view('contacts.editcontact', ['data' => $data, 'detail' => $detail,'organisations'=>$org]);
 
     }
      
    function updateContact(Request $req,Contact $con)
    {
        //dd($org);
       // dd($request);
       $req->validate(
        ['firstname'=>'required',
        'lastname'=>'required',
        'organization'=>'required',
        'email'=>'required|email',
        'phone'=>'required|min:10|numeric',
        'address'=>'required',
        'city'=>'required',
        'state'=>'required'
        
    ]);
    $member=Contact::find($req->id);
    $member->firstname=$req->firstname;
    $member->lastname=$req->lastname;
    $member->organisation_id=$req->organization;
    $member->email=$req->email;

    $member->phone=$req->phone;
    $member->address=$req->address;
    $member->city=$req->city;
    $member->state=$req->state;
    $res=$member->save();
         
        
         if($res)
        {
            return redirect()->route('organisation.show',['id'=>$member->organisation_id])->with('success','Contact Updated successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    } 
    function deleteContact(Request $request)
    {
       
    $data=Contact::find($request->id);
    $data->delete();
    return redirect('organization.organization')->with('success','Contact Deleted successfully');
     }   
    
}
