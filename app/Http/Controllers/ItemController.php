<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelController extends Controller
{

    public function create()
    {
        return view('proyek.create');
    }
    public function index()
    {
        $projects = DB::table('proyek')->get();
        return view('proyek.index', compact('proyek'));
    }

    public function proyek() {
        return view('proyek.home');
    }

 public function destroy($id)
    {
        $project = DB::table('proyek')
                ->where('id', $id)
                ->delete();
        
        return redirect('/proyek')->with('status', 'Delete');
    }
}

    

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggalmulai' => 'required',
            'tanggaldeadline' => 'required'
        ]);

        $project = DB::table('proyek')->insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi'],
            'tanggalmulai' => $request['tanggalmulai'],
            'tanggaldeadline' => $request['tanggaldeadline']
        ]);

        return redirect('/proyek')->with('status', 'Berhasil');
    }
    
    public function show($id)
    {
        $project = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.show', compact('proyek'));
    }

    public function edit($id)
    {
        $project = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.edit', compact('proyek'));
    }



   

   







 public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggalmulai' => 'required',
            'tanggaldeadline' => 'required'
        ]);

        $project = DB::table('proyek')
              ->where('id', $id)
              ->update([
                'nama' => $request['nama'],
                'deskripsi' => $request['deskripsi'],
                'tanggalmulai' => $request['tanggalmulai'],
                'tanggaldeadline' => $request['tanggaldeadline']
                ]);
        
        return redirect('/proyek')->with('status', 'Berhasil');
    }