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
        {{-- <h3><a href="{{ url('/krs') }}">Back to Home</a></h3>
    <h1>{{ $judul ?? '' }}</h1>

    {{ $pesan ?? '' }}
    <br>
    <br>
    <a href="{{ url('dosen/create') }}">Tambah Dosen</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>NID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Edit</th>
        <th>Delete</th>


        @php
            $rec = DB::table('tbldosen')->GET();
            $no = 0;
        @endphp
        @foreach ($rec as $key => $value)
            @php
                $no++;
            @endphp
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $value->nid ?? '-' }}</td>
                <td>{{ $value->nama ?? '-' }}</td>
                <td>{{ $value->alamat ?? '-' }}</td>
                <td>{{ $value->nohp ?? '-' }}</td>
                <td><a href="{{ Route('dosen.edit', $value->id) }}">Edit</a></td>

                <td>
                    <form action="{{ Route('dosen.destroy', $value->id) }}" method="POST"
                        onsubmit="return confirm('Yakin Ingin Menghapus ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table> --}}

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Dosen</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Dosen</li>
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
                                            <th>NID</th>
                                            <th>Nama Dosen</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $rec = DB::table('tbldosen')->GET();
                                            $no = 0;
                                        @endphp
                                        @foreach ($rec as $key => $value)
                                            @php
                                                $no++;
                                            @endphp
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $value->nid ?? '-' }}</td>
                                                <td>{{ $value->nama_dosen ?? '-' }}</td>
                                                <td>{{ $value->jenis_kelamin ?? '-' }}</td>
                                                <td>{{ $value->alamat ?? '-' }}</td>
                                                <td>{{ $value->nohp ?? '-' }}</td>
                                                <td><a href="{{ Route('dosen.edit', $value->id) }}"
                                                        class="btn btn-primary">Edit</a></td>

                                                <td>
                                                    <form action="{{ Route('dosen.destroy', $value->id) }}" method="POST"
                                                        onsubmit="return confirm('Yakin Ingin Menghapus ?')">
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
                                    <a href="{{ url('dosen/create') }}" class="btn btn-primary">Tambah Data</a>
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
