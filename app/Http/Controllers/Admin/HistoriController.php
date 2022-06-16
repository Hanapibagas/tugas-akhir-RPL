<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoriController extends Controller
{
    public function create()
    {
        return view('backend.history.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'picture' => 'required',
        ]);

        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
        }

        History::create([
            "title" => $request->input('title'),
            "picture" => $file
        ]);

        return redirect()->route('show-history')->with('status', 'Data anda telah ditambahkan');
    }

    public function show()
    {
        $histories = History::all();

        return view('backend.history.index', compact('histories'));
    }

    public function edit($id)
    {
        $histories = History::where('id', $id)->first();

        return view('backend.history.update', compact('histories'));
    }

    public function update(Request $request, $id)
    {
        $histories = History::where('id', $id)->first();
        // dd($request->file('picture'));
        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
            if ($histories->picture && file_exists(storage_path('app/public/' . $histories->picture))) {
                Storage::delete('public/' . $histories->picture);
                $file = $request->file('picture')->store('gambar', 'public');
            }
        }

        if ($request->file('picture') === null) {
            $file = $histories->picture;
        }

        $histories->update([
            "title" => $request->input('title'),
            "picture" => $file
        ]);

        return redirect()->route('show-history')->with('status', 'Data ini telah dihperbarui');
    }

    public function destroy($id)
    {
        $histories = History::where('id', $id)->first();
        if ($histories->picture && file_exists(storage_path('app/public/' . $histories->picture))) {
            Storage::delete('public/' . $histories->picture);
        }

        $histories->delete();

        return redirect()->route('show-history')->with('status', 'Data ini telah dihapus');
    }
}
