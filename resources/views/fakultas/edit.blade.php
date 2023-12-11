<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakultas || Edit</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        @php
            $rec = \DB::table('fakultas')
                ->where('id_fakultas', $id_fakultas)
                ->first();
            $dataDekan = DB::Table('tbldosen')->get();
        @endphp

        {{-- <h1>Halaman Edit</h1>
        <form action="{{ url('fakultas/' . $id_fakultas) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_fakultas" value="{{ $id_fakultas }}">
            <label for="kode_fakultas">Kode Fakultas</label>
            <input type="number" name="kode_fakultas" value="{{ $rec->kode_fakultas ?? '' }}">
            <label for="nama_fakultas">Nama Fakultas</label>
            <input type="text" name="nama_fakultas" value="{{ $rec->nama_fakultas ?? '' }}">
            <label for="id_dekan">ID Dekan</label>
            <input type="text" name="id_dekan" value="{{ $rec->id_dekan ?? '' }}">
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
                                <h3 class="card-title">Edit Fakultas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('fakultas/' . $id_fakultas) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id_fakultas" value="{{ $id_fakultas }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_fakultas">Kode Fakultas</label>
                                        <input type="number" class="form-control" id="kode_fakultas" name="kode_fakultas"
                                            value="{{ $rec->kode_fakultas ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_fakultas">Nama Fakultas</label>
                                        <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas"
                                            value="{{ $rec->nama_fakultas ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_dosen=">Nama Dekan</label>
                                        <select class="form-control select2" style="width: 100%;" name="id_dosen"
                                            id="id_dosen" required>
                                            @foreach ($dataDekan as $dekan)
                                                <option value="{{ $dekan->id_dosen }}"
                                                    {{ $rec->id_dosen == $dekan->id_dosen ? 'selected' : '' }}>
                                                    {{ $dekan->nama_dosen }}
                                                </option>
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
