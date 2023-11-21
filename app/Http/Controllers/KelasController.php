<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index() {
        return view('kelas.list')
            ->with('judul', 'Daftar Kelas');
    }

    public function create() {
        return view('kelas.form')
            ->with('judul', 'Form Kelas');
    }

    public function store(Request $r) {
        $x = array(
            'kode_kelas' => $r->kode_kelas,
            'nama_kelas' => $r->nama_kelas,
            'id_tahun_akademik' => $r->id_tahun_akademik,
        );

        $pesan = '';
        $rec =\DB::table('kelas')
            ->where('kode_kelas', $r->kode_kelas)
            ->first();
        
            if($rec == null) {
                \DB::table('kelas')
                ->InsertGetId($x);
            } else {
                $pesan = "Kelas Sudah Terdaftar";
            }

            return view('kelas.list')
                    ->with('judul', 'Daftar Kelas')
                    ->with('pesan', $pesan);
    }

    public function edit($id_kelas) {
        
        return view('kelas.edit')
                ->with('judul', 'Form Edit Kelas')
                ->with('id_kelas', $id_kelas);
    }

    public function update(Request $r) {
        $x = array(
            'kode_kelas' => $r->kode_kelas,
            'nama_kelas' => $r->nama_kelas,
            'id_tahun_akademik' => $r->id_tahun_akademik,
        );

        $pesan = '';
        $rec =\DB::table('kelas')
            ->where('id_kelas', $r -> id_kelas)
            ->update($x);

            return redirect()->route('kelas.index')
                    ->with('pesan', $pesan);
    }

    public function destroy($id_kelas) {
        $del = \DB::table('kelas')
                ->where('id_kelas', $id_kelas)
                ->delete();

                return redirect()->route('kelas.index')
                        ->with('id_kelas', $id_kelas);
        

    }
}
