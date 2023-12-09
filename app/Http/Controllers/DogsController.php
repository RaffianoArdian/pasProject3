<?php

namespace App\Http\Controllers;

use App\Models\Anjing;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index()
    {
        $anjings = Anjing::all();
        return view('dogs.index', compact('anjings'));
    }

    public function showDetail($id)
    {
        // Fetch dog details by $id and pass them to the view
        $anjing = Anjing::find($id);
        return view('dogs.detail', compact('anjing'));
    }
}
