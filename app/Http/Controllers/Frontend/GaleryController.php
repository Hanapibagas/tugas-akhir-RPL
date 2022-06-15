<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Creation;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function show()
    {
        $creations = Creation::all();

        return view('frontend.partial.galery', compact('creations'));
    }
}
