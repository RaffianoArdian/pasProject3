<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function index()
    {
        $kucings = Kucing::all();
        return view('cats.index', compact('kucings'));
    }

    public function showDetail($id)
    {
        // Fetch cat details by $id and pass them to the view
        $kucing = Kucing::find($id);
        return view('cats.detail', compact('kucing'));
    }
}