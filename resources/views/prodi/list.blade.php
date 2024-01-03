<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Prodi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Prodi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Prodi</th>
                                            <th>Jenjang</th>
                                            <th>Fakultas</th>
                                            <th>Nama Prodi</th>
                                            <th>Nama Kaprodi</th>
                                            <th>Tanggal SK</th>
                                            <th>Akreditasi</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $rec = DB::table('prodi')->GET();
                                            $no = 0;
                                        @endphp
                                        @foreach ($rec as $key => $value)
                                            @php
                                                $no++;
                                            @endphp
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $value->kode_prodi ?? '-' }}</td>
                                                <td>@php
                                                    $idjenjang = DB::Table('jenjang')
                                                        ->where('id_jenjang', $value->id_jenjang)
                                                        ->first();
                                                    echo $idjenjang ? $idjenjang->nama_jenjang : '';
                                                @endphp</td>
                                                <td>@php
                                                    $idfakultas = DB::Table('fakultas')
                                                        ->where('id_fakultas', $value->id_fakultas)
                                                        ->first();
                                                    echo $idfakultas ? $idfakultas->nama_fakultas : '';
                                                @endphp</td>
                                                <td>{{ $value->nama_prodi ?? '-' }}</td>
                                                <td>
                                                    @php
                                                        $idkaprodi = DB::Table('tbldosen')
                                                            ->where('id_dosen', $value->id_dosen)
                                                            ->first();
                                                        echo $idkaprodi ? $idkaprodi->nama_dosen : '';
                                                    @endphp
                                                </td>
                                                <td>{{ $value->tglsk ?? '-' }}</td>
                                                <td>{{ $value->akreditasi ?? '-' }}</td>
                                                <td><a href="{{ Route('prodi.edit', $value->id_prodi) }}"
                                                        class="btn btn-primary">Edit</a></td>

                                                <td>
                                                    <form action="{{ Route('prodi.destroy', $value->id_prodi) }}"
                                                        method="POST" onsubmit="return confirm('Yakin Ingin Menghapus ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="{{ url('/') }}" class="btn btn-danger">Kembali</a>
                                    <a href="{{ url('prodi/create') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </body>
@stop

</html>
