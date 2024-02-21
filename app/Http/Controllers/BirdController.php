<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Burung;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index()
    {
        $burungs = Burung::all();
        return view('burungs.index', compact('burungs'));
    }

    public function showDetail($id)
    {
        // Fetch cat details by $id and pass them to the view
        $burung = Burung::find($id);
        return view('burungs.detail', compact('burung'));
    }
}
