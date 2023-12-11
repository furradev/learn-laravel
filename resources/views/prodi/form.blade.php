<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prodi</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')

        {{-- <form action="{{ url('prodi') }}" method="POST">
            @csrf
            <label for="kode_prodi">Kode Prodi</label>
            <input type="number" name="kode_prodi">
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi">
            <label for="id_jenjang">Jenjang :</label>
            <select id="id_jenjang" name="id_jenjang" required>
                @php
                    $rec = DB::table('jenjang')->get();
                    $id_jenjang = 0;
                @endphp

                @foreach ($rec as $key)
                    @php
                        if ($id_jenjang == $key->id_jenjang) {
                            echo "<option selected='selected' value='" . $key->id_jenjang . "'>" . $key->nama_jenjang . '</option>';
                        } else {
                            echo "<option value='" . $key->id_jenjang . "'>" . $key->nama_jenjang . '</option>';
                        }
                    @endphp
                @endforeach
            </select>
            <label for="id_fakultas">Fakultas : </label>
            <select id="id_fakultas" name="id_fakultas" required>
                @php
                    $rec = DB::table('fakultas')->get();
                    $id_fakultas = 0;
                @endphp

                @foreach ($rec as $key)
                    @php
                        if ($id_fakultas == $key->id_fakultas) {
                            echo "<option selected='selected' value='" . $key->id_fakultas . "'>" . $key->nama_fakultas . '</option>';
                        } else {
                            echo "<option value='" . $key->id_fakultas . "'>" . $key->nama_fakultas . '</option>';
                        }
                    @endphp
                @endforeach
            </select>
            <label for="tglsk">Tanggal SK</label>
            <input type="date" name="tglsk">
            <label for="akreditasi">Akreditasi</label>
            <input type="text" name="akreditasi">
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
                                <h3 class="card-title">Tambah Prodi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('prodi') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_prodi">Kode Prodi</label>
                                        <input type="number" class="form-control" id="kode_prodi" name="kode_prodi">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_prodi">Nama Prodi</label>
                                        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_jenjang">Jenjang</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_jenjang"
                                            id="id_jenjang" required>
                                            @php
                                                $rec = DB::table('jenjang')->get();
                                                $id_jenjang = 0;
                                            @endphp

                                            @foreach ($rec as $key)
                                                @php
                                                    if ($id_jenjang == $key->id_jenjang) {
                                                        echo "<option selected='selected' value='" . $key->id_jenjang . "'>" . $key->nama_jenjang . '</option>';
                                                    } else {
                                                        echo "<option value='" . $key->id_jenjang . "'>" . $key->nama_jenjang . '</option>';
                                                    }
                                                @endphp
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_fakultas">Jenjang</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_fakultas"
                                            id="id_fakultas" required>
                                            @php
                                                $rec = DB::table('fakultas')->get();
                                                $id_fakultas = 0;
                                            @endphp

                                            @foreach ($rec as $key)
                                                @php
                                                    if ($id_fakultas == $key->id_fakultas) {
                                                        echo "<option selected='selected' value='" . $key->id_fakultas . "'>" . $key->nama_fakultas . '</option>';
                                                    } else {
                                                        echo "<option value='" . $key->id_fakultas . "'>" . $key->nama_fakultas . '</option>';
                                                    }
                                                @endphp
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tglsk">Tanggal SK</label>
                                        <input type="date" class="form-control" id="tglsk" name="tglsk">
                                    </div>
                                    <div class="form-group">
                                        <label for="akreditasi">Akreditasi</label>
                                        <input type="text" class="form-control" id="akreditasi" name="akreditasi">
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
