<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index() {
        return view('ruang.list')
            ->with('judul', 'Daftar Ruang');
    }

    public function create() {
        return view('ruang.form')
            ->with('judul', 'Form Ruang');
    }

    public function store(Request $r) {
        $x = array(
            'kode_ruang' => $r->kode_ruang,
            'nama_ruang' => $r->nama_ruang,
        );

        $pesan = '';
        $rec =\DB::table('ruang')
            ->where('kode_ruang', $r->kode_ruang)
            ->first();
        
            if($rec == null) {
                \DB::table('ruang')
                ->InsertGetId($x);
            } else {
                $pesan = "Tahun Akademik Sudah Terdaftar";
            }

            return view('ruang.list')
                    ->with('judul', 'Daftar Ruang')
                    ->with('pesan', $pesan);
    }

    public function edit($id_ruang) {
        
        return view('ruang.edit')
                ->with('judul', 'Form Edit Ruang')
                ->with('id_ruang', $id_ruang);
    }

    public function update(Request $r) {
        $x = array(
            'kode_ruang' => $r->kode_ruang,
            'nama_ruang' => $r->nama_ruang,
        );

        $pesan = '';
        $rec =\DB::table('ruang')
            ->where('id_ruang', $r -> id_ruang)
            ->update($x);

            return redirect()->route('ruang.index')
                    ->with('pesan', $pesan);
    }

    public function destroy($id_ruang) {
        $del = \DB::table('ruang')
                ->where('id_ruang', $id_ruang)
                ->delete();

                return redirect()->route('ruang.index')
                        ->with('id_ruang', $id_ruang);
        

    }
}
