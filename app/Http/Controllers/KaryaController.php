<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    //

    public function index()
    {
        return view('karyas', [
            "title" => "Karyas",
            'karyas' => Karya::all(),
            

        ]);
    }

    public function show(Karya $karya)
    {

        return view('karya', [
            "title" => "Single Karya",
            "karya" => $karya,
        ]);
    }
}
