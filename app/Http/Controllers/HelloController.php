<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $data = Activity::get();
        return view('coba.hello')
        -> with('data', $data);
    }
     public function getAbout(){
        return view('coba.about');
    }

    public function indexActivity() {
        return view('coba.activity');
    }

    public function storeActivity(Request $request) {
        $request -> validate([
            'nama_activity' => 'required'
        ]);
        Activity::create($request->all());

        return redirect()->route('index')
        ->with('success', 'Activity Berhasil Di Simpan');
    }


    
}
