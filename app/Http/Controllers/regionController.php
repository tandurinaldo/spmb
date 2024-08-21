<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Negara;

class regionController extends Controller
{
    public function daftar()
    {
        $negara = Negara::all();

        return view('daftar', compact('Negara'));
    }

    public function getnegara(Request $request)
    {
        $id = $request->negara;
    }
}
