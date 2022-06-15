<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PositionController extends Controller
{
    public function create()
    {
        return view('backend.kepengurusan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'n_induk' => 'required|string',
            'position' => 'required|string',
            'picture' => 'required',
        ]);

        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
        }

        Position::create([
            "name" => $request->input('name'),
            "n_induk" => $request->input('n_induk'),
            "position" => $request->input('position'),
            "picture" => $file
        ]);

        return redirect()->route('show-pengurus')->with('status', 'Data anda telah ditambahkan');
    }

    public function show()
    {
        $positions = Position::all();

        return view('backend.kepengurusan.index', compact('positions'));
    }

    public function edit($id)
    {
        $positions = Position::where('id', $id)->first();

        return view('backend.kepengurusan.update', compact('positions'));
    }

    public function update(Request $request, $id)
    {
        $positions = Position::where('id', $id)->first();
        // dd($request->file('picture'));
        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
            if ($positions->picture && file_exists(storage_path('app/public/' . $positions->picture))) {
                Storage::delete('public/' . $positions->picture);
                $file = $request->file('picture')->store('gambar', 'public');
            }
        }

        if ($request->file('picture') === null) {
            $file = $positions->picture;
        }

        $positions->update([
            "name" => $request->input('name'),
            "n_induk" => $request->input('n_induk'),
            "position" => $request->input('position'),
            "picture" => $file
        ]);

        return redirect()->route('show-pengurus')->with('status', 'Data ini telah dihperbarui');
    }

    public function destroy($id)
    {
        $positions = Position::where('id', $id)->first();
        if ($positions->picture && file_exists(storage_path('app/public/' . $positions->picture))) {
            Storage::delete('public/' . $positions->picture);
        }

        $positions->delete();

        return redirect()->route('show-pengurus')->with('status', 'Data ini telah dihapus');
    }
}
