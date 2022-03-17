<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slides;
use Mail;
use App\Mail\ContactUsMail;
use App\Testimony;

class MainController extends Controller
{


    public function index(){

    	$title = "Home";
    	$slides = Slides::all();
    	$testimony = Testimony::all();
    	return view('MainPages.index')->with(['title'=>$title,'slides'=>$slides,'testimony'=>$testimony]);

    }




    public function aboutus(){

    $title = "About Us";

    return view('MainPages.about')->with(['title'=>$title]);
  }





   public function contactus(){

	$title = "Contact Us";
	//Mail::to('lasisisaheed5@gmail.com', 'Nabtech')->send(new ContactUsMail('asdfashduif','Iraws',423452354, 'askdkflajsdfk','asdlkfjaskldfklasjdkl', 'admin'));
	 return view('MainPages.contactus')->with(['title'=>$title]);

	}




		public function contact(Request $request){

		 	if ($request->ajax()) {
  		
     Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'user'));

     Mail::to('hello@nabtechnologies.co.uk', 'NABTECH')->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'admin'));

     return response('success');

   }

	}





  public function cloud(){

  $title = "Cloud Solutions";

   return view('MainPages.cloud')->with(['title'=>$title]);

  }



   public function training(){

  $title = "Training";

   return view('MainPages.training')->with(['title'=>$title]);

  }


   public function IT(){

  $title = "IT Support and Service Management";

   return view('MainPages.IT')->with(['title'=>$title]);

  }



     public function operations(){

  $title = "Operations and Support
Professional Services";

   return view('MainPages.operations')->with(['title'=>$title]);

  }


    public function network(){

  $title = "Network Engineering";

   return view('MainPages.network')->with(['title'=>$title]);

  }






 public function careers(){

  $title = "Careers";
   return view('MainPages.careers')->with(['title'=>$title]);

  }


public function consult(){

  $title = "Business Consulting";

   return view('MainPages.consult')->with(['title'=>$title]);

  }














}
