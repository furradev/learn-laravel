
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakultas || Edit</title>
</head>
<body>
    @php
        $rec= \DB::table('fakultas')
                ->where('id_fakultas', $id_fakultas)
                ->first();
    @endphp

    <h1>Halaman Edit</h1>
    <form action="{{url('fakultas/'.$id_fakultas)}}" method="POST">
        @csrf
        @method('PUT')
    <input type="hidden" name="id_fakultas" value="{{$id_fakultas}}">
    <label for="kode_fakultas">Kode Fakultas</label>
    <input type="number" name="kode_fakultas" value="{{$rec->kode_fakultas ?? ''}}">
    <label for="nama_fakultas">Nama Fakultas</label>
    <input type="text" name="nama_fakultas" value="{{$rec->nama_fakultas ?? ''}}">
    <label for="id_dekan">ID Dekan</label>
    <input type="text" name="id_dekan" value="{{$rec->id_dekan ?? ''}}">
    <button type="submit">Submit</button>
    </form>
</body>
</html>