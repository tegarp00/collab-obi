<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CreateController extends Controller
{
    public function store(Request $request)
    {
        $payload = [
            'kode_buku' => $request->input("kode_buku"),
            'judul_buku' => $request->input("judul_buku"),
            'jumlah_halaman' => $request->input("jumlah_halaman"),
            'tahun_terbit' => $request->input("tahun_terbit"),
            'id_kategori' => $request->input("id_kategori"),
            'id_author' => $request->input("id_author"),
        ];

        $author = HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/book", $payload);

        return redirect()->route("home");
    }

    public function authorCategori(Request $request)
    {
        $payloadKategori = [
            'nama_kategori' => $request->input("nama_kategori")
        ];

        $files = [
            'file'=> $request->file('file')
        ];

        $payloadAuthor = [
            'nama_author' => $request->input('nama_author'),
        ];


        $t1=HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/categori", $payloadKategori);
        $t2=HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/author", $payloadAuthor, $files);

        return redirect()->back();
    }

    public function updateAuCate(Request $request, $id)
    {
        $payloadKategori = [
            'nama_kategori' => $request->input("nama_kategori")
        ];

        $files = [];

        if (isset($request->file)) {
            $files = [
                'file'=> $request->file('file')
            ];
        }

        $kategoriId = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/books/".$id
        );
        $idKategori = $kategoriId['data']['id_kategori'];
        $idAuthor = $kategoriId['data']['id_author'];

        $payloadAuthor = [
            'nama_author' => $request->input('nama_author'),
        ];


        $t1=HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/categori/".$idKategori, $payloadKategori);
        $t2=HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/author/".$idAuthor, $payloadAuthor, $files);

        return redirect()->back();
    }

    public function updateBook(Request $request, $id)
    {
        $payload = [
            'kode_buku' => $request->input("kode_buku"),
            'judul_buku' => $request->input("judul_buku"),
            'jumlah_halaman' => $request->input("jumlah_halaman"),
            'tahun_terbit' => $request->input("tahun_terbit"),
            'id_kategori' => $request->input("id_kategori"),
            'id_author' => $request->input("id_author"),
        ];


        HttpClient::fetch("POST", "https://eb84-113-11-180-57.ap.ngrok.io/api/book/".$id, $payload);

        return redirect()->route('home');
    }
}
