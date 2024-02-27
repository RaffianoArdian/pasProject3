<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use App\Models\Breed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatsController extends Controller
{
    public function index()
{
    $kucings = Kucing::with('breed')->get();
    $breeds = Breed::all();

    return view('cats.index', compact('kucings', 'breeds'));
}

    public function showDetail($id)
    {
        // Fetch cat details by $id and pass them to the view
        $kucing = Kucing::find($id);
        return view('cats.detail', compact('kucing'));
    }

    public function create()
{
    $breeds = Breed::all();
    return view('cats.create', [
        'title' => 'create-new-data',
        'breeds' => $breeds,
    ]);
}
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'tanggal_lahir' => 'required|date', 
            'berat' => 'required|numeric',
            'warna' => 'required|max:255',
            'kondisi_kesehatan' => 'required|max:255',
            'jenis_id' => 'required|exists:breeds,id',
        ]);

        $validatedData['jenis_id'] = $request->input('jenis_id');

        $result = Kucing::create($validatedData);
        if($result){
        return redirect('/cats')->with('success', 'Data kucing berhasil ditambahkan');
    }
    }

    public function destroy($id)
{
    $kucing = Kucing::find($id);

    if (!$kucing) {
        return redirect('/cats')->with('error', 'Data kucing tidak ditemukan');
    }

    $kucing->delete();

    return redirect('/cats')->with('success', 'Data kucing berhasil dihapus');
}

public function edit($id)
{
    $kucing = Kucing::find($id);

    if (!$kucing) {
        return redirect('/cats')->with('error', 'Data kucing tidak ditemukan');
    }

    $breeds = Breed::all();

    return view('cats.edit', compact('kucing', 'breeds'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nama' => 'required|max:255',
        'tanggal_lahir' => 'required|date', 
        'berat' => 'required|numeric',
        'warna' => 'required|max:255',
        'kondisi_kesehatan' => 'required|max:255',
        'jenis_id' => 'required|exists:breeds,id', 
        
    ]);
    $kucing = Kucing::find($id);
    $kucing->update(array_merge($validatedData, ['jenis_id' => $request->input('jenis_id')]));
    

    if (!$kucing) {
        return redirect('/cats')->with('error', 'Data kucing tidak ditemukan');
    }

    $kucing->update($validatedData);

    return redirect('/cats')->with('success', 'Data kucing berhasil diupdate');
}
}