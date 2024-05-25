<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function updateCount(Request $request)
    {
        $request->validate([
            'type' => 'required|integer|min:1|max:4'
        ]);

        $user = Auth::user();

        switch ($request->type) {
            case 1:
                $user->increment('count_google');
                break;
            case 2:
                $user->increment('count_tripadv');
                break;
            case 3:
                $user->increment('count_insta');
                break;
            case 4:
                $user->increment('count_myreward');
                break;
            default:
                return response()->json(['success' => false], 400);
        }

        return response()->json(['success' => true]);
    }
}
