<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {


        $inputs = $request->all();
        //dd($inputs);
        unset($inputs['_token']);
        return view('confirm', [
            'inputs' => $inputs
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        unset($inputs['_token']);
        Contact::create($inputs);
        return view('thanks');
    }
}
