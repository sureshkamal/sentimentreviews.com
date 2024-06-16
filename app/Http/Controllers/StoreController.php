<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Nps;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, string $storeSlug)
    {
        $store = Branch::where('slug', $storeSlug)->first();   
        if (!$store) {
            abort(404, 'Store not found.');
        }
        return view('stores.pages.landing', ['store' => $store]);
    }

    public function nps(Request $request, string $storeSlug)
    {
        $store = Branch::where('slug', $storeSlug)->first();   
        if (!$store) {
            abort(404, 'Store not found.');
        }
        $questions = Nps::where('branch_id', $store->branch_id)->first();   
        return view('stores.pages.nps', ['store' => $store, 'questions' => $questions]);
    }

    public function npsThanks(Request $request, string $storeSlug)
    {
        $store = Branch::where('slug', $storeSlug)->first();   
        if (!$store) {
            abort(404, 'Store not found.');
        }
        return view('stores.pages.npsThanks', ['store' => $store]);
    }

    public function login(Request $request, string $storeSlug)
    {
        $store = Branch::where('slug', $storeSlug)->first();   
        if (!$store) {
            abort(404, 'Store not found.');
        }
        return view('stores.pages.login', ['store' => $store]);
    }

    public function otp(Request $request, string $storeSlug)
    {
        $store = Branch::where('slug', $storeSlug)->first();   
        if (!$store) {
            abort(404, 'Store not found.');
        }
        return view('stores.pages.login', ['store' => $store]);
    }
}
