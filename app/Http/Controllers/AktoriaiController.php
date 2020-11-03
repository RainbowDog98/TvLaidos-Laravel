<?php

namespace App\Http\Controllers;

use App\Models\Aktorius;
use Illuminate\Http\Request;

class AktoriaiController extends Controller
{
    public function index() {
        $all_aktoriai = Aktorius::all();
        return view('aktoriai', compact('all_aktoriai'));
    }
}