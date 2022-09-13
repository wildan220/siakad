@extends('pegawai.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
 </div>
 </div>
 </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    
    <table class="table table-bordered">
    <tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($pegawai as $pgw)
    <tr>
    
    <td>{{ $pgw ->id_pegawai }}</td>
    <td>{{ $pgw ->nama }}</td>
    <td>{{ $pgw ->jabatan }}</td>
    <td>
    <form action="{{ route('pegawai.destroy',['pegawai'=>$pgw->id_pegawai]) }}" method="POST">
    
    <a class="btn btn-info" href="{{ route('pegawai.show',$pgw->id_pegawai) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('pegawai.edit',$pgw->id_pegawai) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>
   @endsection