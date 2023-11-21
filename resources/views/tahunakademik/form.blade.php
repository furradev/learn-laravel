<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang</title>
</head>
<body>
    <form action="{{url('tahunakademik')}}" method="POST">
        @csrf
    <label for="kode_tahun_akademik">Kode Tahun Akademik</label>
    <input type="number" name="kode_tahun_akademik">
    <label for="nama_tahun_akademik">Nama Tahun Akademik</label>
    <input type="text" name="nama_tahun_akademik">
    <button type="submit">Submit</button>
    </form>
</body>
</html>