@extends('pegawai.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Edit Pegawai
        </div>
        <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif
        <form method="post" action="{{ route('pegawai.update', $Pegawai->id_pegawai) }}" id="myForm">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="id_pegawai">ID</label> 
        <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" value="{{ $Pegawai->id_pegawai }}" aria-describedby="id_pegawai" > 
        </div>
        <div class="form-group">
        <label for="nama">Nama</label> 
        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}" aria-describedby="nama" > 
        </div>
        <div class="form-group">
        <label for="jabatan">Jabatan</label> 
        <input type="jabatan" name="jabatan" class="form-control" id="jabatan" value="{{ $Pegawai->jabatan }}" aria-describedby="jabatan" > 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
       </div>
       @endsection