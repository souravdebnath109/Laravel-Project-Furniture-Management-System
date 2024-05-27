<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\about;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use App\Mail\contactemail;
use App\Models\furniblog;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $data['getFurniture'] = Furniture::all();
        return view("frontend.index", $data);
    }
    public function shop()
    {

        $data['getFurniture'] = Furniture::all();
        return view("frontend.shop", $data);
    }
    public function about_us()
    {


        $data['getblog'] = about::all();
        return view("frontend.about_us", $data);
       // return view("frontend.about_us");
    }
    public function services()

    {
        //aituku mar kora
        $data['getFurniture'] = Furniture::all();
        //
        return view("frontend.services",$data);
    }
    public function blog()
    {
        $data['getbloggs'] = furniblog::all();

        return view("frontend.blog",$data);
    }
    // video te  aikhane index method use korse
    public function show()
    {
        return view("frontend.contact_us");
    }
    public function email_send(Request $request)
    {
        $maildata = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'message' => $request->message
        ];
        Mail::to('deb513715@gmail.com')->send(new  contactemail($maildata));
        //  return back()->with('message_sent','Your Message Has Been Sent Successfully');
     //   dd('Email send  successfully');
     return redirect ('/contact_us')->with('success','Email Send');

    }
    public function cart()
    {
        return view("frontend.cart");
    }
    public function checkout()
    {
        return view("frontend.checkout");
    }
    public function thankyou()
    {
        return view("frontend.thankyou");
    }
}
