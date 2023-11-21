<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    public function index() {
        return view('tahunakademik.list')
            ->with('judul', 'Daftar Tahun Akademik');
    }

    public function create() {
        return view('tahunakademik.form')
            ->with('judul', 'Form Tahun Akademik');
    }

    public function store(Request $r) {
        $x = array(
            'kode_tahun_akademik' => $r->kode_tahun_akademik,
            'nama_tahun_akademik' => $r->nama_tahun_akademik,
        );

        $pesan = '';
        $rec =\DB::table('tahun_akademik')
            ->where('kode_tahun_akademik', $r->kode_tahun_akademik)
            ->InsertGetId($x);
        
            // if($rec.length < 2) {
            //     \DB::table('tahun_akademik')
                    
            // } else {
            //     $pesan = "Tahun Akademik Sudah Terdaftar";
            // }

            return view('tahunakademik.list')
                    ->with('judul', 'Daftar Tahun Akademik')
                    ->with('pesan', $pesan);
    }

    public function edit($id_tahun_akademik) {
        
        return view('tahunakademik.edit')
                ->with('judul', 'Form Edit Tahun Akademik')
                ->with('id_tahun_akademik', $id_tahun_akademik);
    }

    public function update(Request $r) {
        $x = array(
            'kode_tahun_akademik' => $r->kode_tahun_akademik,
            'nama_tahun_akademik' => $r->nama_tahun_akademik,
        );

        $pesan = '';
        $rec =\DB::table('tahun_akademik')
            ->where('id_tahun_akademik', $r -> id_tahun_akademik)
            ->update($x);

            return redirect()->route('tahunakademik.index')
                    ->with('pesan', $pesan);
    }

    public function destroy($id_tahun_akademik) {
        $del = \DB::table('tahun_akademik')
                ->where('id_tahun_akademik', $id_tahun_akademik)
                ->delete();

                return redirect()->route('tahunakademik.index')
                        ->with('id_tahun_akademik', $id_tahun_akademik);
        

    }
}
