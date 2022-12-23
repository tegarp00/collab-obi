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
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
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


<div class="container d-flex">
    <div class="container mt-3">
        <div class="row">
            <form method="POST" action="{{route('create')}}">
                @csrf
                <div class="col-lg-5">
                    <span>Kode Buku</span>
                    <input type="text" class="form-control mb-3"  name="kode_buku" placeholder="">
                    
                    <span>Judul Buku</span>
                    <input type="text" class="form-control mb-3"  name="judul_buku" placeholder="" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Jumlah Halaman</span>
                    <input type="text" class="form-control mb-3" placeholder=""  name="jumlah_halaman" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Tahun Terbit</span>
                    <input type="date" class="form-control mb-3" placeholder="" name="tahun_terbit" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Kategori</span>
                    <select class="form-select mb-3" aria-label="Default select example" name="id_kategori">
                        <option selected>pilih</option>
                        @foreach($kategori as $k)
                        <option value="{{$k['id']}}">{{$k['nama_kategori']}}</option>
                        @endforeach
                    </select>

                    <span>Author</span>
                    <select class="form-select" aria-label="Default select example" name="id_author">
                        <option selected>pilih</option>
                        @foreach($authors as $a)
                        <option value="{{$a['id']}}">{{$a['nama_author']}}</option>
                        @endforeach
                    </select>
                </div>
            <button type="submit" class="btn btn-warning mt-4">Kirim</button>
        </div>
    </form>
</div>

<div class="container mt-3">
    <div class="row">
            <form method="POST" action="{{route('adds')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-5">
                    <span>Kategori</span>
                    <input type="text" class="form-control mb-3"  name="nama_kategori" placeholder="">
                    
                    <span>Nama Author</span>
                    <input type="text" class="form-control mb-3"  name="nama_author" placeholder="" >

                    <span>Profile Author</span>
                    <input type="file" class="form-control" name="file" id="inputGroupFile02">
                </div>
            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
        </div>
    </form>
    </div>
</div>
</body>