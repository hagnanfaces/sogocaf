<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.consult');
    }

    public function submit(ContactRequest $request)
    {
        /* $rule = [
            'name' => ['required', 'string'],
            'phone' => ['nullable'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ];
        $validate = $this->validate($request, $rule); */
//        Contact::query()->create($validate);
        $validate = $request->all();
        Contact::query()->create($validate);
        dd(Mail::send(new ContactMail($validate), $validate));
        Mail::send(new ContactMail($validate), $validate);
        return back()->with('success', trans('page.contact.alert.success'));
    }
}
