<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang</title>
</head>
<body>
    <form action="{{url('fakultas')}}" method="POST">
        @csrf
    <label for="kode_fakultas">Kode Fakultas</label>
    <input type="number" name="kode_fakultas">
    <label for="nama_fakultas">Nama Fakultas</label>
    <input type="text" name="nama_fakultas">
    <label for="id_dekan">ID Dekan</label>
    <input type="text" name="id_dekan">
    <button type="submit">Submit</button>
    </form>
</body>
</html>