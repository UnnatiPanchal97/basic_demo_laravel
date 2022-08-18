<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Email;

class EmailController extends Controller
{
    public function getEmail($id){
        $email=Customer::find($id);
        $emails=Email::select('email')->where('customer_id','=',$id)->first();
        return view('customers.email.index',compact('email','emails'));
    }
    public function updateEmail($id,Request $request){
        // dd($request->id);
        $email = Email::updateOrCreate([
            'customer_id'   => $id,
        ],[
            'email' => $request->get('email'),
        ]);
        return redirect()->back()->with('success','Email added successfully');
    }
}
