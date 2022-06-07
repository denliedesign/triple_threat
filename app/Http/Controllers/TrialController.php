<?php

namespace App\Http\Controllers;

use App\Mail\TrialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrialController extends Controller
{

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $trial = request()->validate([
            'parentName' => 'required',
            'studentName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthdate' => 'required',
        ]);

        Mail::to('triplethreatdancecompany@gmail.com')->send(new TrialMail($trial));

        return redirect('/')->with('message', 'Thanks for your interest. We\'ll be in touch.');

    }

}
