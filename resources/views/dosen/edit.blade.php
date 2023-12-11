<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen || Edit</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        @php
            $rec = \DB::table('tbldosen')
                ->where('id', $id)
                ->first();
        @endphp

        {{-- <h1>Halaman Edit</h1>
    <form action="{{ url('dosen/' . $id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $id }}">
        <label for="nid">Nid</label>
        <input type="number" name="nid" value="{{ $rec->nid ?? '' }}">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ $rec->nama ?? '' }}">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="{{ $rec->alamat ?? '' }}">
        <label for="nohp">No Telepon</label>
        <input type="number" name="nohp" value="{{ $rec->nohp ?? '' }}">
        <button type="submit">Submit</button>
    </form> --}}

        <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                    <!-- left column -->
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Dosen</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('dosen/' . $id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $id }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nid">NID</label>
                                        <input type="number" class="form-control" id="nid" name="nid"
                                            value="{{ $rec->nid ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_dosen">Nama Dosen</label>
                                        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen"
                                            value="{{ $rec->nama_dosen ?? '' }}">
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary1 jenis_kelamin" name="jenis_kelamin"
                                                value="laki-laki" {{ $rec->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}>
                                            <label for="radioPrimary1">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary1 jenis_kelamin" name="jenis_kelamin"
                                                value="perempuan" {{ $rec->jenis_kelamin == 'perempuan' ? 'checked' : '' }}>
                                            <label for="radioPrimary1">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{ $rec->alamat ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">No Telepon</label>
                                        <input type="number" class="form-control" id="nohp" name="nohp"
                                            value="{{ $rec->nohp ?? '' }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </body>
@stop

</html>
