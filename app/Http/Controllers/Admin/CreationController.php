<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Creation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id)
    {
        $creations = Creation::where('id', $id)->first();

        return view('backend.karya.update', compact('creations'));
    }

    public function update(Request $request, $id)
    {
        $creations = Creation::where('id', $id)->first();

        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
            if ($creations->picture && file_exists(storage_path('app/public/' . $creations->picture))) {
                Storage::delete('public/' . $creations->picture);
                $file = $request->file('picture')->store('gambar', 'public');
            }
        }

        if ($request->file('picture') === null) {
            $file = $creations->picture;
        }

        $creations->update([
            "cover" => $request->input('cover'),
            "description" => $request->input('description'),
            "link" => $request->input('link'),
            "picture" => $file
        ]);

        return redirect()->route('tampilan-karya')->with('status', 'Data ini telah dihperbarui');
    }

    public function destroy($id)
    {
        $creations = Creation::where('id', $id)->first();
        if ($creations->picture && file_exists(storage_path('app/public/' . $creations->picture))) {
            Storage::delete('public/' . $creations->picture);
        }

        $creations->delete();

        return redirect()->route('tampilan-karya')->with('status', 'Data ini telah dihapus');
    }
}
