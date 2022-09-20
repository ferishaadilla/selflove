<?php

namespace App\Http\Controllers;
use App\Models\catatan;

use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function index(){
        $data = Catatan::all();
        // dd($data);

        return view('catatan', compact('data'));
    }
}
