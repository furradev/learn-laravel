<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        return view('dosen.list')
            ->with('judul', 'Daftar Dosen');
    }

    public function create() {
        return view('dosen.form')
            ->with('judul', 'Form Dosen');
    }

    public function store(Request $r) {
        $x = array(
            'nid' => $r->nid,
            'nama' => $r->nama,
            'alamat' => $r->alamat,
            'nohp' => $r->nohp,
        );

        $pesan = '';
        $rec =\DB::table('tbldosen')
            ->where('nid', $r->nid)
            ->first();
        
            if($rec == null) {
                \DB::table('tbldosen')
                    ->InsertGetId($x);
            } else {
                $pesan = "Nid Sudah Terdaftar";
            }

            return view('dosen.list')
                    ->with('judul', 'Daftar Mahasiswa')
                    ->with('pesan', $pesan);
    }

    public function edit($id) {
        
        return view('dosen.edit')
                ->with('judul', 'Form Edit Dosen')
                ->with('id', $id);
    }

    public function update(Request $r) {
        $x = array(
            'nid' => $r -> nid,
            'nama' => $r -> nama,
            'alamat' => $r -> alamat,
            'nohp' => $r -> nohp,
        );

        $pesan = '';
        $rec =\DB::table('tbldosen')
            ->where('id', $r -> id)
            ->update($x);

            return view('dosen.list')
                    ->with('pesan', $pesan);
    }

    public function destroy($id) {
        // $x = array(
        //     'nim' => $r -> nim,
        //     'nama' => $r -> nama,
        //     'alamat' => $r -> alamat,
        //     'nohp' => $r -> nohp,
        // ); 

        $del = \DB::table('tbldosen')
                ->where('id', $id)
                ->delete();

                return redirect()->route('dosen.index')
                        ->with('id', $id);
        

        // $deletItem = DB::delete('DELETE FROM tblmhs WHERE id');
        //     return view('mahasiswa.list')
        //             ->with('id', $id);
    }
}
