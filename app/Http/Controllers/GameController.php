<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;


class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('index')->with('games', $games);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function about()
    {
        return view('about');
    }

    public function store(Request $request)
    {
        Game::create($request->all());
        return redirect()->route('index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Game $games)
    {

        $games = Game::find($id);
        return view('edit')->with('games', $games);
    }
    
    public function show(string $id)
    {
        //$games = Game::all();
        $games = Game::find($id);
        return view('show')->with('games', $games);
    }
    
    public function update(Request $request,Game $games)
    {
        /*$games = Game::find($id);
        $games->update($request->all());
        return redirect()->route('index')->with('success', 'Data berhasil diupdate');
        */
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required', 
        ]);
        $games->update($validatedData);
        return redirect()->route('index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Request $request, $id)
    {
        $games = Game::find($id);
        $games->delete();
        return redirect()->route('index')->with('success', 'Data berhasil dihapus');
    }

    
    
   
}
