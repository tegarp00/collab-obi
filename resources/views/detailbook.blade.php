@extends('templates')

@section('content')
<div class="container mt-5">
  <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img style="height: 100% !important;" src="https://eb84-113-11-180-57.ap.ngrok.io/storage/{{$bookId['data']['author']['file']}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title mb-4">{{$bookId['data']['judul_buku']}}</h5>
            <p class="card-text mb-0">Kode Buku : {{$bookId['data']['kode_buku']}}</p>
            <p class="card-text mb-0">Judul Buku : {{$bookId['data']['judul_buku']}}</p>
            <p class="card-text mb-0">Jumlah Halaman : {{$bookId['data']['jumlah_halaman']}}</p>
            <p class="card-text mb-0">Author : {{$bookId['data']['author']['nama_author']}}</p>
            <p class="card-text mt-5 text-end"><small class="text-muted">Tahun terbit {{$bookId['data']['tahun_terbit']}}</small></p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection