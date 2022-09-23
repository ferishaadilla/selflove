<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function index(){
        $data = User::all();
        // dd($data);

        return view('datauser', compact('data'));
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser');
     }
}
