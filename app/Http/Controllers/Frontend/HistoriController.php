<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\History;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    public function show()
    {
        $histories = History::all();

        return view('frontend.partial.history', compact('histories'));
    }
}
