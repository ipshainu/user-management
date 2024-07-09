<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::with('department', 'designation')->get();
        if (!empty($request->type)) {
            return view('dynamic-search', compact('users'));            
        }
        return view('welcome', compact('users'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::with('department', 'designation')
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhereHas('department', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->orWhereHas('designation', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->get();

        return view('user_list', compact('users'))->render();
    }
}
