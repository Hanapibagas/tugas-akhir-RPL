<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Creation;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function create()
    {
        return view('backend.karya.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required|string',
            'description' => 'required|string',
            'link' => 'required|string',
            'picture' => 'required',
        ]);

        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
        }

        Creation::create([
            "cover" => $request->input('cover'),
            "description" => $request->input('description'),
            "link" => $request->input('link'),
            "picture" => $file
        ]);

        return redirect()->route('tampilan-karya')->with('status', 'Data anda telah ditambahkan');
    }

    public function show()
    {
        $creations = Creation::all();

        return view('backend.karya.index', compact('creations'));
    }
}
