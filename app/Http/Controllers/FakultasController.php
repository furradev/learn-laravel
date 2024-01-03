<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index() {
        return view('fakultas.list')
            ->with('judul', 'Daftar Fakultas');
    }

    public function create() {
        return view('fakultas.form')
            ->with('judul', 'Form Fakultas');
    }

    public function store(Request $r) {
        $x = array(
            'kode_fakultas' => $r->kode_fakultas,
            'nama_fakultas' => $r->nama_fakultas,
            'id_dosen' => $r->id_dosen,
        );

        $pesan = '';
        $rec =\DB::table('fakultas')
            ->where('kode_fakultas', $r->kode_fakultas)
            ->first();
        
            if($rec == null) {
                \DB::table('fakultas')
                ->InsertGetId($x);
            } else {
                $pesan = "Fakultas Sudah Terdaftar";
            }

            return view('fakultas.list')
                    ->with('judul', 'Daftar Fakultas')
                    ->with('pesan', $pesan);
    }

    public function edit($id_fakultas) {
        
        return view('fakultas.edit')
                ->with('judul', 'Form Edit Fakultas')
                ->with('id_fakultas', $id_fakultas);
    }

    public function update(Request $r) {
        $x = array(
            'kode_fakultas' => $r->kode_fakultas,
            'nama_fakultas' => $r->nama_fakultas,
            'id_dosen' => $r->id_dosen,
        );

        $pesan = '';
        $rec =\DB::table('fakultas')
            ->where('id_fakultas', $r -> id_fakultas)
            ->update($x);

            return redirect()->route('fakultas.index')
                    ->with('pesan', $pesan);
    }

    public function destroy($id_fakultas) {
        $del = \DB::table('fakultas')
                ->where('id_fakultas', $id_fakultas)
                ->delete();

                return redirect()->route('fakultas.index')
                        ->with('id_fakultas', $id_fakultas);
        

    }
}
