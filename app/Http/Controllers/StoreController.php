<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
    public function index(Request $request, string $store)
    {
        return view('stores.pages.landing');
    }

    public function nps(Request $request, string $store)
    {
        return view('stores.pages.nps');
    }

    public function npsThanks(Request $request, string $store)
    {
        return view('stores.pages.npsThanks');
    }
}
