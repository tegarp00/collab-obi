<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;

class HomeController extends Controller
{
    public function index()
    {
        $responsePengguna = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/books"
        );
        $books = $responsePengguna["data"];
        return view('home', [
            "books" => $books
        ]);
    }

    public function createBook()
    {
        $author = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/authors"
        );
        $kategori = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/categories"
        );
        $kategori = $kategori["data"];
        $authors = $author["data"];
        return view('addbook', [
            "authors" => $authors,
            "kategori" => $kategori
        ]);
    }

    public function update($id)
    {
        $author = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/authors"
        );
        $kategori = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/categories"
        );
        $kategoriId = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/books/".$id
        );
        $kategori = $kategori["data"];
        $authors = $author["data"];
        return view('updatebook', [
            "authors" => $authors,
            "kategori" => $kategori,
            "kategoriById" => $kategoriId['data']
        ]);
    }

    public function destroy($id)
    {
        HttpClient::fetch("DELETE", "https://eb84-113-11-180-57.ap.ngrok.io/api/book/".$id);
        return redirect()->route('home');
    }

    public function detail($id)
    {
        $bookId = HttpClient::fetch(
            "GET",
            "https://eb84-113-11-180-57.ap.ngrok.io/api/books/".$id
        );

        return view('detailbook', compact('bookId'));
    }
}
