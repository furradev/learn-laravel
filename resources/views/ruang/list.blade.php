<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><a href="{{url('/krs')}}">Back to Home</a></h3>
    <h1>{{$judul ?? ''}}</h1>
    
    {{$pesan ?? ""}}
    <br>
    <br>
    <a href="{{url('ruang/create')}}">Tambah Fakultas</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>Kode Ruang</th>
        <th>Nama Ruang</th>
        <th>Edit</th>
        <th>Delete</th>


        @php
            $rec= DB::table('ruang')->GET();
                    $no = 0;
        @endphp
                    @foreach ($rec as $key => $value) 
                       @php
                        $no++;
                       @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$value->kode_ruang ?? "-"}}</td>
                        <td>{{$value->nama_ruang ?? "-"}}</td>
                        <td><a href="{{Route('ruang.edit', $value->id_ruang)}}">Edit</a></td>
                        
                        <td>
                            <form action="{{Route('ruang.destroy', $value->id_ruang)}}" method="POST"  onsubmit="return confirm('Yakin Ingin Menghapus ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
        
    </table>    
</body>
</html>