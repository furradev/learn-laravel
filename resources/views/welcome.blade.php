<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center
    }
</style>
<body>
    <h1>My First Dinamic Application Build With Laravel Framework</h1>
    <br>
    <br>
    <a href="{{url('/perkalian')}}">Perkalian</a>
    <br>
    <br>
    <a href="{{url('/berita/1')}}">Berita</a>
    <br>
    <br>
    <a href="{{url('/penjumlahan')}}">Penjumlahan</a>
    <br>
    <br>
    <a href="{{url('/inputmhs')}}">Input Mahasiswa</a>
</body>
</html>