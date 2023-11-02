<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$judul}}</h1>
    
    {{$pesan ?? ""}}
    <br>
    <br>
    <a href="{{url('dosen/create')}}">Tambah Mahasiswa</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>NID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>

        @php
            $rec= DB::table('tbldosen')->GET();
                    $no = 0;
        @endphp
                    @foreach ($rec as $key => $value) 
                       @php
                        $no++;
                       @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$value->nid ?? "-"}}</td>
                        <td>{{$value->nama ?? "-"}}</td>
                        <td>{{$value->alamat ?? "-"}}</td>
                        <td>{{$value->nohp ?? "-"}}</td>
                       
                    </tr>
                    
                    @endforeach
        
    </table>    
</body>
</html>