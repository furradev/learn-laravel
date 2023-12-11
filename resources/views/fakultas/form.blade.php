<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        {{-- <form action="{{ url('fakultas') }}" method="POST">
            @csrf
            <label for="kode_fakultas">Kode Fakultas</label>
            <input type="number" name="kode_fakultas">
            <label for="nama_fakultas">Nama Fakultas</label>
            <input type="text" name="nama_fakultas">
            <label for="id_dekan">ID Dekan</label>
            <input type="text" name="id_dekan">
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
                                <h3 class="card-title">Tambah Fakultas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('fakultas') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_fakultas">Kode Fakultas</label>
                                        <input type="number" class="form-control" id="kode_fakultas" name="kode_fakultas">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_fakultas">Nama Fakultas</label>
                                        <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_dosen">Nama Dekan</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_dosen"
                                            id="id_dosen" required>
                                            @php
                                                $rec = DB::table('tbldosen')->get();
                                                $id = 0;
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
