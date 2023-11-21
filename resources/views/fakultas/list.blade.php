<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas</title>
</head>
<body>
    <h3><a href="{{url('/krs')}}">Back to Home</a></h3>
    <h1>{{$judul ?? ''}}</h1>
    
    {{$pesan ?? ""}}
    <br>
    <br>
    <a href="{{url('fakultas/create')}}">Tambah Fakultas</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>Kode Fakultas</th>
        <th>Nama Fakultas</th>
        <th>ID Dekan</th>
        <th>Edit</th>
        <th>Delete</th>


        @php
            $rec= DB::table('fakultas')->GET();
                    $no = 0;
        @endphp
                    @foreach ($rec as $key => $value) 
                       @php
                        $no++;
                       @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$value->kode_fakultas ?? "-"}}</td>
                        <td>{{$value->nama_fakultas ?? "-"}}</td>
                        <td>{{$value->id_dekan ?? "-"}}</td>
                        <td><a href="{{Route('fakultas.edit', $value->id_fakultas)}}">Edit</a></td>
                        
                        <td>
                            <form action="{{Route('fakultas.destroy', $value->id_fakultas)}}" method="POST"  onsubmit="return confirm('Yakin Ingin Menghapus ?')">
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