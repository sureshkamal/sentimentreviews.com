<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Store;
use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Support\Str;


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

        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Check if the user exists
        $user = User::where('email', $email)->first();

        if ($user) {
            // Check if the password matches
            if (Hash::check($password, $user->password)) {
                // Log the user in
                Auth::login($user);
                return redirect()->intended('/admin/stores'); // or any route you want to redirect to
                // return redirect()->intended('/admin/dashboard'); // or any route you want to redirect to
            } else {
                // Password does not match
                return back()->withErrors(['password' => 'Invalid credentials.']);
            }
        } 
        return back()->withErrors(['email' => 'Invalid Email Id.']);
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function addStore(Request $request) {
        // die("in addStore api");
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'storename' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $storename = $request->input('storename');

        // Check if the user exists
        $user = User::where('email', $email)->first();

        if ($user) {
            return back()->withErrors(['email' => 'Email already registered.']);
        } else {
            $currTime = Carbon::now()->format('Y-m-d H:i:s');
            // Create a new user
            $newUser = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'temp_password' => $password,
                'user_type_id' => 2, //store admin
                'no_of_logins' => 0,
                'created_at' => $currTime,
                'updated_at' => $currTime,
            ]);

            $storeslug = Str::slug($storename, '-');
            // Create a new store
            $newStore = Store::create([
                'store_name' => $storename,
                'store_slug' => $storeslug,
                'store_admin_id' => $newUser->user_id,
                'store_admin_email' => $email
            ]);
            
            return redirect()->intended('/admin/stores'); // or any route you want to redirect to
        }
    }

    public function createBranchPage()
    {
        return view('admin.create-branch');
    }

    public function createBranch(Request $request)
    {
        $request->validate([
            'branchname' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nps' => 'boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('images', 'public');
        }

        $store = Branch::create([
            'name' => $request->name,
            'image' => $imagePath,
            'nps' => $request->has('nps') ? $request->nps : false,
        ]);

        return response()->json($store);
    }


}
