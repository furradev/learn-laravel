<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tahun Akademik || Edit</title>
</head>

<body>
    @extends('include.welcome')
    @section('content')

        @php
            $rec = \DB::table('tahun_akademik')
                ->where('id_tahun_akademik', $id_tahun_akademik)
                ->first();
        @endphp
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                    <!-- left column -->
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Tahun Akademik</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('tahunakademik/' . $id_tahun_akademik) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id_tahun_akademik" value="{{ $id_tahun_akademik }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_tahun_akademik">Kode Tahun Akademik</label>
                                        <input type="number" class="form-control" id="kode_tahun_akademik"
                                            name="kode_tahun_akademik" value="{{ $rec->kode_tahun_akademik ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_tahun_akademik">Nama Prodi</label>
                                        <input type="text" class="form-control" id="nama_tahun_akademik"
                                            name="nama_tahun_akademik" value="{{ $rec->nama_tahun_akademik ?? '' }}">
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
