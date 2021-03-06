<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Played2;
use App\Track;
use App\Album;
use App\Artist;

class Played2Controller extends Controller
{

    public function index()
    {
        $rows = Played2::all();
        return view('played2.index', compact('rows'));
    }

    public function create()
    {
        $lst = Artist::all();
        $ls = Album::all();
        $l = Track::all();
        return view('played2.add', compact('lst', 'ls', 'l'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'artist_id' => 'required'
        ],
        [
            'artist_id.required' => 'Wajib diisi'
        ]);

        Played2::create([
        'artist_id' => $request->artist_id,
        'album_id' => $request->album_id,
        'track_id' => $request->track_id
        ]);

        return redirect('played2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $row = Played2::findOrFail($id);
        $lst = Artist::all();
        $ls = Album::all();
        $l = Track::all();

        return view('played2.edit', compact('row', 'lst', 'ls', 'l'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'artist_id' => 'required'
        ],
        [
            'artist_id.required' => 'Wajib diisi'
        ]);

        $row = Played2::findOrFail($id);
        $row->update([
        'artist_id' => $request->artist_id,
        'album_id' => $request->album_id,
        'track_id' => $request->track_id
        ]);

        return redirect('played2');
    }

    public function destroy($id)
    {
        $row = Played2::findOrFail($id);
        $row->delete();

        return redirect('played2');
    }
}
