<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
</head>
<body>
    <h3><a href="{{url('/krs')}}">Back to Home</a></h3>
    <h1>{{$judul ?? ''}}</h1>
    
    {{$pesan ?? ""}}
    <br>
    <br>
    <a href="{{url('kelas/create')}}">Tambah Kelas</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Tahun Akademik</th>
        <th>Edit</th>
        <th>Delete</th>


        @php
            $rec= DB::table('kelas')->GET();
                    $no = 0;
        @endphp
                    @foreach ($rec as $key => $value) 
                       @php
                        $no++;
                       @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$value->kode_kelas ?? "-"}}</td>
                        <td>{{$value->nama_kelas ?? "-"}}</td>
                        <td>{{$value->id_tahun_akademik ?? "-"}}</td>
                        <td><a href="{{Route('kelas.edit', $value->id_kelas)}}">Edit</a></td>
                        
                        <td>
                            <form action="{{Route('kelas.destroy', $value->id_kelas)}}" method="POST"  onsubmit="return confirm('Yakin Ingin Menghapus ?')">
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