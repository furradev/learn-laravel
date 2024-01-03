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
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                    <!-- left column -->
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Tahun Akademik</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('tahunakademik') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_tahun_akademik">Kode Tahun Akademik</label>
                                        <input type="number" class="form-control" id="kode_tahun_akademik"
                                            name="kode_tahun_akademik">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_tahun_akademik">Nama Tahun Akademik</label>
                                        <input type="text" class="form-control" id="nama_tahun_akademik"
                                            name="nama_tahun_akademik">
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
