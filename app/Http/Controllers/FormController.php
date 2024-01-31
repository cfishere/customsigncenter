<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use PDF;
use App\Mail\ContactUs;
use App\Mail\PriceQuoteRequest;

class FormController extends Controller
{    

    //form-specific methods **************************
     
     //Process the Contact Us Form
     public function contactUs(Request $request)
     {
        /*see: 
        https://laravel.com/docs/10.x/mail#attachable-objects
        return Attachment::fromData(fn () => $this->content, 'Photo Name');
        */
        $mailData = [
            
            'body' =>   $request->input('message'),
            'email' =>  (null !== $request->input('fromEmail')) ? $request->input('fromEmail') :"no-reply@customsigncenter.com",
            'name' =>   $request->input('fromFirstName').' '.$request->input('fromLastName'),            
           /* 'file' => (null !== $request->file('file')) ? $request->file('file') : '',*/
        ];
        
        //send message:
        Mail::to('chris@customsigncenter.com','Careteam')->send(new ContactUs($mailData));
        /*Mail::to('chrisnicholsinbox@outlook.com', 'Chris Nichols')->send(new ContactUs($mailData));*/
        //add the delivery status to the view:
        $request->session()->put('result', 'Thank you for your interest in Custom Sign Center.  Your message has been sent to our support staff.  A response is typically expected within 48 hrs, with added delays for weekends and holidays.');      
        //withInput will make the current session variable available to the view. 
        return redirect()->back()->withInput();
     }

     public function priceQuoteRequest(Request $request)
     {
        $fromEmail = (null !== $request->input('fromEmail')) ? $request->input('fromEmail') :"no-reply@customsigncenter.com";
        $sender = "{$request->input("fromFirstName")} {$request->input("fromLastName")}";
        $body = "<h2>Price Request from the CSC Corporate Website</h2>"
        ."<p><b>From<b>: $sender</p>"
        ."<h3>Orgainization Details:</h3>"
        ."<p><b>Name</b>: {$request->input("orgName")}</p>"
        ."<p><b>Location</b>: {$request->input("orgAddr")}, {$request->input("orgZipcode")}</p>"
        ."<p><b>E-mail</b>: {$request->input("fromEmail")}</p>"
        ."<p><b>Sign Replacement or New Sign?</b>:{$request->input("signReplacementOrNew")}</p>"
        ."<p><b>Approx. Height x Width</b>: {$request->input("signHeight")} x {$request->input("signWidth")}</p>"
        ."<hr><h3>Comments</h3> <p style=\"padding: 15px\">{$request->input("message")}</p>";

        $mailData = [            
            'body' =>   htmlspecialchars($body),
            'email' =>  $fromEmail,
            'name' =>   $sender,
            'reply_to' => ['email'=>$fromEmail, 'name'=>$sender],
           /* 'file' => (null !== $request->file('file')) ? $request->file('file') : '',*/
        ];
        
        //send message:
        Mail::to('chris@customsigncenter.com','Careteam')->send(new PriceQuoteRequest($mailData));
        /*Mail::to('chrisnicholsinbox@outlook.com', 'Chris Nichols')->send(new ContactUs($mailData));*/
        //add the delivery status to the view:
        $request->session()->put('result', 'Thank you for your interest in Custom Sign Center.  Your message has been sent to our support staff.  A response is typically expected within 48 hrs, with added delays for weekends and holidays.');      
        //withInput will make the current session variable available to the view. 
        return redirect()->back()->withInput();
     }

}
