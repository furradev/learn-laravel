<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
    <form action="{{url('kelas')}}" method="POST">
        @csrf
    <label for="kode_kelas">Kode Kelas</label>
    <input type="number" name="kode_kelas">
    <label for="nama_kelas">Nama Kelas</label>
    <input type="text" name="nama_kelas">
    <label for="id_tahun_akademik">Tahun Akademik :</label>
    <select id="id_tahun_akademik" name="id_tahun_akademik" required>
        @php
        $rec = DB::table('tahun_akademik')->get();
        $id_tahun_akademik = 0;
        @endphp

        @foreach ($rec as $key)
            @php
            if ($id_tahun_akademik == $key->id_tahun_akademik) {
                echo "<option selected='selected' value='" . $key->id_tahun_akademik. "'>" . $key->kode_tahun_akademik. "</option>";
            } else {
                echo "<option value='" .$key->id_tahun_akademik. "'>" .$key->kode_tahun_akademik. "</option>";
            }
            @endphp
        @endforeach
    </select>
    <button type="submit">Submit</button>
    </form>
</body>
</html>