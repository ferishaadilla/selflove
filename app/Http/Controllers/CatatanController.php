<?php

namespace App\Http\Controllers;
use App\Models\Catatan;

use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function index(){
        $data = Catatan::all();
        // dd($data);

        return view('catatan', compact('data'));
    }

    public function isicatatan(){
        return view('isicatatan');
    }

    public function insertcatatan(Request $request){
        // dd($request->all());
        Catatan::create($request->all());
        return redirect()->route('catatan');
    }

     public function editcatatan($id){
        $data = Catatan::find($id);
        // dd($data);
        return view('editcatatan', compact('data'));
     }

     public function updatedata(Request $request, $id){
        $data = Catatan::find($id);
        $data->update($request->all());
        return redirect()->route('catatan');
     }

     public function delete($id){
        $data = Catatan::find($id);
        $data->delete();
        return redirect()->route('catatan');

     }
}
