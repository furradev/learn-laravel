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
    <a href="{{url('prodi/create')}}">Tambah Prodi</a>
    <br>
    <table border="1" width="50%">
        <th>No</th>
        <th>Kode Prodi</th>
        <th>Jenjang</th>
        <th>Fakultas</th>
        <th>Nama Prodi</th>
        <th>Tanggal SK</th>
        <th>Akreditasi</th>
        <th>Edit</th>
        <th>Delete</th>


        @php
            $rec= DB::table('prodi')->GET();
                    $no = 0;
        @endphp
                    @foreach ($rec as $key => $value) 
                       @php
                        $no++;
                       @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$value->kode_prodi ?? "-"}}</td>
                        <td>{{$value->nama_jenjang ?? "-"}}</td>
                        <td>{{$value->nama_fakultas ?? "-"}}</td>
                        <td>{{$value->nama_prodi ?? "-"}}</td>
                        <td>{{$value->tglsk ?? "-"}}</td>
                        <td>{{$value->akreditasi ?? "-"}}</td>
                        <td><a href="{{Route('prodi.edit', $value->id_prodi)}}">Edit</a></td>
                        
                        <td>
                            <form action="{{Route('prodi.destroy', $value->id_prodi)}}" method="POST"  onsubmit="return confirm('Yakin Ingin Menghapus ?')">
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