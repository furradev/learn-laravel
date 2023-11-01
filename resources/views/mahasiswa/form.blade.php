<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('simpanstore')}}" method="POST">
        @csrf
    <label for="nim">Nim</label>
    <input type="number" name="nim">
    <label for="nama">Nama</label>
    <input type="text" name="nama">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat">
    <label for="nohp">No Telepon</label>
    <input type="number" name="nohp">
    <button type="submit">Submit</button>
    </form>
</body>
</html>