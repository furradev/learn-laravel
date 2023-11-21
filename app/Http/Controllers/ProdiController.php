<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index() {
        return view('prodi.list')
            ->with('judul', 'Daftar Prodi');
    }

    public function create() {
        return view('prodi.form')
            ->with('judul', 'Form Prodi');
    }

    public function store(Request $r) {
        $x = array(
            'kode_prodi' => $r->kode_prodi,
            'nama_prodi' => $r->nama_prodi,
            'id_jenjang' => $r->id_jenjang,
            'id_fakultas' => $r->id_fakultas,
            'tglsk' => $r->tglsk,
            'akreditasi' => $r->akreditasi,
        );

        $pesan = '';
        $rec =\DB::table('prodi')
            ->where('kode_prodi', $r->kode_prodi)
            ->first();
        
            if($rec == null) {
                \DB::table('prodi')
                ->InsertGetId($x);
            } else {
                $pesan = "Prodi Sudah Terdaftar";
            }

            return view('prodi.list')
                    ->with('judul', 'Daftar Prodi')
                    ->with('pesan', $pesan);
    }

    public function edit($id_prodi) {
        
        return view('prodi.edit')
                ->with('judul', 'Form Edit Prodi')
                ->with('id_prodi', $id_prodi);
    }

    public function update(Request $r) {
        $x = array(
            'kode_prodi' => $r->kode_prodi,
            'nama_prodi' => $r->nama_prodi,
            'id_jenjang' => $r->id_jenjang,
            'id_fakultas' => $r->id_fakultas,
            'tglsk' => $r->tglsk,
            'akreditasi' => $r->akreditasi,
        );

        $pesan = '';
        $rec =\DB::table('prodi')
            ->where('id_prodi', $r -> id_prodi)
            ->update($x);

            return redirect()->route('prodi.index')
                    ->with('pesan', $pesan);
    }

    public function destroy($id_prodi) {
        $del = \DB::table('prodi')
                ->where('id_prodi', $id_prodi)
                ->delete();

                return redirect()->route('prodi.index')
                        ->with('id_prodi', $id_prodi);
        

    }
}
