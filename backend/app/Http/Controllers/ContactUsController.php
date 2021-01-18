<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsModel;

class ContactUsController extends Controller
{
    public function contactUs(Request $request){
        $contactUs = new ContactUsModel();
        $contactUs->email = $request->email;
        $contactUs->message = $request->message;
        $contactUs->save();
        return $contactUs->get();
    }
}
