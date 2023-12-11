<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang || Edit</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')
        @php
            $rec = \DB::table('ruang')
                ->where('id_ruang', $id_ruang)
                ->first();
        @endphp

        {{-- <h1>Halaman Edit</h1>
    <form action="{{ url('ruang/' . $id_ruang) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id_ruang" value="{{ $id_ruang }}">
        <label for="kode_ruang">Kode Ruang</label>
        <input type="number" name="kode_ruang" value="{{ $rec->kode_ruang ?? '' }}">
        <label for="nama_ruang">Nama Ruang</label>
        <input type="text" name="nama_ruang" value="{{ $rec->nama_ruang ?? '' }}">
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
                                <h3 class="card-title">Edit Ruang</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('ruang/' . $id_ruang) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id_ruang" value="{{ $id_ruang }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_ruang">Kode Ruang</label>
                                        <input type="number" class="form-control" id="kode_ruang" name="kode_ruang"
                                            value="{{ $rec->kode_ruang ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ruang">Nama Ruang</label>
                                        <input type="text" class="form-control" id="nama_ruang" name="nama_ruang"
                                            value="{{ $rec->nama_ruang ?? '' }}">
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
