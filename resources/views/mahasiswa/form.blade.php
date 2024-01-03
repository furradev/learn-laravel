<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                    <!-- left column -->
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Mahasiswa</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('mahasiswa') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="number" class="form-control" id="nim" name="nim">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary1 jenis_kelamin" name="jenis_kelamin"
                                                value="laki-laki">
                                            <label for="radioPrimary1">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary1 jenis_kelamin" name="jenis_kelamin"
                                                value="perempuan">
                                            <label for="radioPrimary1">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">No Telepon</label>
                                        <input type="number" class="form-control" id="nohp" name="nohp">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_dosen">Nama Dosen PA</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_dosen"
                                            id="id_dosen" required>
                                            @php
                                                $rec = DB::table('tbldosen')->get();
                                                $id_dosen = 0;
                                            @endphp

                                            @foreach ($rec as $key)
                                                @php
                                                    if ($id_dosen == $key->id_dosen) {
                                                        echo "<option selected='selected' value='" . $key->id_dosen . "'>" . $key->nama_dosen . '</option>';
                                                    } else {
                                                        echo "<option value='" . $key->id_dosen . "'>" . $key->nama_dosen . '</option>';
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
