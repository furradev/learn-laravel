<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        {{-- <form action="{{ url('kelas') }}" method="POST">
            @csrf
            <label for="kode_kelas">Kode Kelas</label>
            <input type="number" name="kode_kelas">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas">
            <label for="id_tahun_akademik">Tahun Akademik :</label>
            <select id="id_tahun_akademik" name="id_tahun_akademik" required>
                @php
                    $rec = DB::table('tahun_akademik')->get();
                    $id_tahun_akademik = 0;
                @endphp

                @foreach ($rec as $key)
                    @php
                        if ($id_tahun_akademik == $key->id_tahun_akademik) {
                            echo "<option selected='selected' value='" . $key->id_tahun_akademik . "'>" . $key->kode_tahun_akademik . '</option>';
                        } else {
                            echo "<option value='" . $key->id_tahun_akademik . "'>" . $key->kode_tahun_akademik . '</option>';
                        }
                    @endphp
                @endforeach
            </select>
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
                                <h3 class="card-title">Tambah Kelas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('kelas') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_kelas">Kode Kelas</label>
                                        <input type="number" class="form-control" id="kode_kelas" name="kode_kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kelas">Nama Kelas</label>
                                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_tahun_akademik">Tahun Akademik</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_tahun_akademik"
                                            id="id_tahun_akademik" required>
                                            @php
                                                $rec = DB::table('tahun_akademik')->get();
                                                $id_tahun_akademik = 0;
                                            @endphp

                                            @foreach ($rec as $key)
                                                @php
                                                    if ($id_tahun_akademik == $key->id_tahun_akademik) {
                                                        echo "<option selected='selected' value='" . $key->id_tahun_akademik . "'>" . $key->kode_tahun_akademik . '-' . $key->nama_tahun_akademik . '</option>';
                                                    } else {
                                                        echo "<option value='" . $key->id_tahun_akademik . "'>" . $key->kode_tahun_akademik . '-' . $key->nama_tahun_akademik . '</option>';
                                                    }
                                                @endphp
                                            @endforeach
                                        </select>
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
