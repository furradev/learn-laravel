<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tahun Akademik || Edit</title>
</head>
<body>
    @php
        $rec= \DB::table('tahun_akademik')
                ->where('id_tahun_akademik', $id_tahun_akademik)
                ->first();
    @endphp

    <h1>Halaman Edit</h1>
    <form action="{{url('tahunakademik/'.$id_tahun_akademik)}}" method="POST">
        @csrf
        @method('PUT')
    <input type="hidden" name="id_tahun_akademik" value="{{$id_tahun_akademik}}">
    <label for="kode_tahun_akademik">Kode Tahun Akademik</label>
    <input type="number" name="kode_tahun_akademik" value="{{$rec->kode_tahun_akademik ?? ''}}">
    <label for="nama_tahun_akademik">Nama Tahun Akademik</label>
    <input type="text" name="nama_tahun_akademik" value="{{$rec->nama_tahun_akademik ?? ''}}">
    <button type="submit">Submit</button>
    </form>
</body>
</html>