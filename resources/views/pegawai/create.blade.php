@extends('pegawai.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
    Tambah Pegawai
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
<form method="post" action="{{ route('pegawai.store') }}" id="myForm">
@csrf
<div class="form-group">
<label for="id_pegawai">id</label> 
<input type="text" name="id_pegawai" class="form-control" id="id_pegawai" aria-describedby="id_pegawai" > 
</div>
<div class="form-group">
<label for="nama">Nama</label> 
<input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
</div>
<div class="form-group">
<label for="jabatan">Jabatan</label> 
<input type="jabatan" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" > 
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection