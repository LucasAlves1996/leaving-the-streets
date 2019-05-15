<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailVolunteer;
use App\Mail\MailDonation;

class MailController extends Controller
{
    public function sendVolunteerEmail(Request $request){
    	Mail::to($request->email)->send(new MailVolunteer());
    	return redirect('seja-um-voluntário');
    }

		public function sendDonationEmail(Request $request){
    	Mail::to($request->email)->send(new MailDonation());
    	return redirect('faça-uma-doação');
    }    
}
