@extends('pegawai.layout')
 
@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Pegawai
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>id pegawai: </b>{{$Pegawai->id_pegawai}}</li>
 <li class="list-group-item"><b>Nama: </b>{{$Pegawai->nama}}</li>
 <li class="list-group-item"><b>jabatan: </b>{{$Pegawai->jabatan}}</li>
 
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('pegawai.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection