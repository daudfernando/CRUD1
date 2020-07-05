<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $pertanyaan_baru = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }
}
