<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa || Edit</title>
</head>
<body>
    @php
        $rec= \DB::table('tblmhs')
                ->where('id', $id)
                ->first();
    @endphp

    <h1>Halaman Edit</h1>
    <form action="{{url('mahasiswa/'.$id)}}" method="POST">
        @csrf
        @method('PUT')
    <input type="hidden" name="id" value="{{$id}}">
    <label for="nim">Nim</label>
    <input type="number" name="nim" value="{{$rec->nim ?? ''}}">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="{{$rec->nama ?? ''}}">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="{{$rec->alamat ?? ''}}">
    <label for="nohp">No Telepon</label>
    <input type="number" name="nohp" value="{{$rec->nohp ?? ''}}">
    <button type="submit">Submit</button>
    </form>
</body>
</html>