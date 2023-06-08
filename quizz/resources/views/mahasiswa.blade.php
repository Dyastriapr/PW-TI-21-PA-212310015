@extends('main')
@section('content')

<table>
    <tr>
        <th>NO</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Prodi</th>


    </tr>
    @foreach($data as $d)

    <tr>
        <td>{{ $d['id']}}</td>
        <td>{{ $d['npm']}}</td>
        <td>{{ $d['nama']}}</td>
        <td>{{ $d['prodi']}}</td>
    </tr>
    @endforeach


</table>

@endsection