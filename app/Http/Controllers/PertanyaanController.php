<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    //membuat fungsi index yang akan tampil pada web.php untuk view
    
    public function create(){
    	return view('pertanyaan.create');
    }

    public function store(Request $request){
    //	dd($request->all());
    //	$request->validate([
    //		'title' => 'required|unique:pertanyaan',
    //		'isi' => 'required'
    //		]);

    	$query = DB::table('pertanyaan')->insert([
    		"judul" => $request	["judul"],
    		"isi" => $request["isi"],
    		"tanggal_dibuat" => $request["tanggal_dibuat"],
    		"tanggal_diperbaharui" => $request["tanggal_diperbaharui"]

    	]);

    	return redirect('/pertanyaan/create');
    }
    public function index(){

    	//mengambil data dari tabel pertanyaan
    	$tanya= DB::table('pertanyaan')->get();//menerima d ata dari database

    	//mengirim data pegawai ke view index
    	return view('pertanyaan.index', compact('tanya'));
    }

    //fungsi untuk menampilkan data dari database per id
    
    public function show($pertanyaan_id){
    	$post= DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();

    	return view('pertanyaan.show', compact('post'));
    }    
    
    public function edit($pertanyaan_id){
     	$post = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
     	return view('pertanyaan.edit', compact('post'));
    	
    }

    public function update($pertanyaan_id, Request $request){
        $request->validate([
            'title' => 'required|unique:pertanyaan',
              'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                        ]);

        return redirect('/pertanyaan')->with('success', 'Berhasil di update');
    }

    public function destroy($pertanyaan_id){
        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'pertanyaan berhasil dihapus');
    }


}
