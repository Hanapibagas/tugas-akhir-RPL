<?php

namespace App\Http\Controllers;

use App\Models\Admin\Creation;
use App\Models\Admin\History;
use App\Models\Admin\Position;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $positions = Position::all()->count();
        $creations = Creation::all()->count();
        $histories = History::all()->count();
        // $$users = User::all()->count();
        return view('home', compact('positions', 'creations', 'histories'));
    }
}
