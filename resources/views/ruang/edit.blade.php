<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruang || Edit</title>
</head>
<body>
    @php
        $rec= \DB::table('ruang')
                ->where('id_ruang', $id_ruang)
                ->first();
    @endphp

    <h1>Halaman Edit</h1>
    <form action="{{url('ruang/'.$id_ruang)}}" method="POST">
        @csrf
        @method('PUT')
    <input type="hidden" name="id_ruang" value="{{$id_ruang}}">
    <label for="kode_ruang">Kode Ruang</label>
    <input type="number" name="kode_ruang" value="{{$rec->kode_ruang ?? ''}}">
    <label for="nama_ruang">Nama Ruang</label>
    <input type="text" name="nama_ruang" value="{{$rec->nama_ruang ?? ''}}">
    <button type="submit">Submit</button>
    </form>
</body>
</html>