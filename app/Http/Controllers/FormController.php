<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class FormController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();

        //dd($inputs);
        unset($inputs['_token']);
        $request->session()->put("form_input", $inputs);
        return view('confirm', [
            'inputs' => $inputs
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();

        unset($inputs['_token']);
        Contact::create($inputs);
        return view('thanks');
    }

    public function system(Request $request)
    {
        return view('system');
    }

    public function search(Request $request)
    {
        $query = Contact::query();

        if (!empty($request->fullname)) {
            $query->where('fullname', 'LIKE BINARY', "%{$request->fullname}%");
        }


        if ($request->gender_id == 1 || $request->gender_id == 2) {
            $query->where('gender_id', 'LIKE', "$request->gender_id");
            //dd($query);
        } else {
            $query->whereIn('gender_id', [1, 2]);
        }


        if (!empty($request->email)) {
            $query->where('email', 'LIKE BINARY', "%{$request->email}%");
        }

        if (!empty($request->from) && !empty($request->until)) {
            $query->whereBetween('created_at', [$request->from, $request->until]);
        }

        //dd($query);
        $contents = $query->paginate(10);
        //dd($contents);
        return view('system', [
            'contents' => $contents,
            'input' => $request->input
        ]);
    }


    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('system');
    }
}
