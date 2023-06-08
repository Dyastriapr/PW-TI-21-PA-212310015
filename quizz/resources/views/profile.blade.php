@extends('main')
@section('content')
@foreach ($profiles as $profile)

<p>Nama : {{$profile->nama}}</p>
<p>NPM :{{$profile->npm}}</p>
<p>Jenis Kelamin :{{$profile->jenis_kelamin}}</p>
<p>TTL :{{$profile->tanggal_lahir}}</p>
<p>Alamat :{{$profile->alamat}}</p>

@endforeach


@endsection