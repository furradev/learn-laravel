<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index() {
        return view('mahasiswa.list')
            ->with('judul', 'Daftar Mahasiswa');
    }

    public function create() {
        return view('mahasiswa.form')
            ->with('judul', 'Form Mahasiswa');
    }

    public function store(Request $r) {
        $x = array(
            'nim' => $r -> nim,
            'nama' => $r -> nama,
            'alamat' => $r -> alamat,
            'nohp' => $r -> nohp,
        );

        $pesan = '';
        $rec =\DB::table('tblmhs')
            ->where('nim', $r -> nim)
            ->first();
        
            if($rec == null) {
                \DB::table('tblmhs')
                    ->insertgetId($x);
            } else {
                $pesan = "Nim Sudah Terdaftar";
            }

            return view('mahasiswa.list')
                    ->with('judul', 'Daftar Mahasiswa')
                    ->with('pesan', $pesan);
    }
}
