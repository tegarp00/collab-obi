@extends('templates')

@section('content')
<div class="container mt-5">
  <table class="table table-striped">
      <thead>
      <tr>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Jumlah Halaman</th>
          <th>Tahun Terbit</th>
          <th class="text-center">Aksi</th>
      </tr>
  </thead>
  <tbody>
      @foreach($books as $b)
      <tr>
          <td>{{$b['kode_buku']}}</td>
          <td>{{$b['judul_buku']}}</td>
          <td>{{$b['jumlah_halaman']}}</td>
          <td>{{$b['tahun_terbit']}}</td>
          <td class="d-flex gap-4 justify-content-center">
              <a href="{{route('detail', $b['id'])}}"><button class="btn btn-sm btn-primary">Details</button></a>
              <a href="{{route('update', $b['id'])}}"><button class="btn btn-sm btn-warning">Update</button></a>
              <a href="{{route('destroy', $b['id'])}}"><button class="btn btn-sm btn-danger">Delete</button></a>
          </td>
      </tr>
      @endforeach
  </tbody>
  <a href="{{route('add')}}"><button class="btn btn-sm btn-warning mb-3">Tambah Buku</button></a>
</table>
@endsection