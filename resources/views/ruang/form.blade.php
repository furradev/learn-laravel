<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang</title>
</head>
<body>
    <form action="{{url('ruang')}}" method="POST">
        @csrf
    <label for="kode_ruang">Kode Ruang</label>
    <input type="number" name="kode_ruang">
    <label for="nama_ruang">Nama Ruang</label>
    <input type="text" name="nama_ruang">
    <button type="submit">Submit</button>
    </form>
</body>
</html>