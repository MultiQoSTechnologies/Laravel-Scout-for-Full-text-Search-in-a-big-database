<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            //$users = User::search($request->search)->get();
            $users = User::search($request->search)->paginate(10);
        } else {
            //$users = User::get();
            $users = User::paginate(10);
        }

        return view('users', compact('users'));
    }
}
