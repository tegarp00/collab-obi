<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{Request::segment(1) == '' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>

<div class="container mt-5">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img style="height: 100% !important;" src="http://localhost:8000/storage/{{$bookId['data']['author']['file']}}" class="img-fluid rounded-start" alt="...">
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


</body>