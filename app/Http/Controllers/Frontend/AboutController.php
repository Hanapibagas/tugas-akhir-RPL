<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Position;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $positions = Position::all();

        return view('frontend.partial.about', compact('positions'));
    }
}
