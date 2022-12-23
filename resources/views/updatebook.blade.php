@extends('templates')

@section('content')
<div class="container d-flex">
    <div class="container mt-3">
        <div class="row">
            <form method="POST" action="{{route('updateBook', $kategoriById['id'])}}">
                @csrf
                <div class="col-lg-5">
                    <span>Kode Buku</span>
                    <input type="text" class="form-control mb-3"  name="kode_buku" value="{{$kategoriById['kode_buku']}}" placeholder="">
                    
                    <span>Judul Buku</span>
                    <input type="text" class="form-control mb-3"  name="judul_buku" value="{{$kategoriById['judul_buku']}}" placeholder="" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Jumlah Halaman</span>
                    <input type="text" class="form-control mb-3" placeholder=""  name="jumlah_halaman" value="{{$kategoriById['jumlah_halaman']}}" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Tahun Terbit</span>
                    <input type="date" class="form-control mb-3" placeholder="" name="tahun_terbit" value="{{$kategoriById['tahun_terbit']}}" aria-label="" aria-describedby="addon-wrapping">
                    
                    <span>Kategori</span>
                    <select class="form-select mb-3" aria-label="Default select example" name="id_kategori" value="">
                        <option>pilih</option>
                        @foreach($kategori as $k)
                        <option {{$k['id'] == $kategoriById['id_kategori'] ? "selected" : ""}} value="{{$k['id']}}">{{$k['nama_kategori']}}</option>
                        @endforeach
                    </select>

                    <span>Author</span>
                    <select class="form-select" aria-label="Default select example" name="id_author">
                        <option>pilih</option>
                        @foreach($authors as $a)
                        <option {{$a['id'] == $kategoriById['id_author'] ? "selected" : ""}} value="{{$a['id']}}">{{$a['nama_author']}}</option>
                        @endforeach
                    </select>
                </div>
            <button type="submit" class="btn btn-warning mt-4">Update</button>
        </div>
    </form>
</div>

<div class="container mt-3">
    <div class="row">
            <form method="POST" action="{{route('updateAuCate', $kategoriById['id'])}}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-5">
                    <span>Kategori</span>
                    <input type="text" class="form-control mb-3"  name="nama_kategori" value="{{$kategoriById['kategori']['nama_kategori']}}" placeholder="">
                    
                    <span>Nama Author</span>
                    <input type="text" class="form-control mb-3"  name="nama_author" value="{{$kategoriById['author']['nama_author']}}" placeholder="" >

                    <span>Profile Author</span>
                    <input type="file" class="form-control" name="file" id="inputGroupFile02">
                </div>
            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </div>
    </form>
    </div>
</div>
@endsection