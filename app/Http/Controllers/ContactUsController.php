<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function feedback(Request $request)
    {
        Contact::create($request->all());
        return response()->json(['status'=>'success','message'=>'send']);
    }
}
