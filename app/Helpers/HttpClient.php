<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HttpClient
{
    static function fetch($method, $url, $body = [], $files = [])
    {
        // jika method get, langsung return
        if($method === "GET") return Http::get($url)->json();

        // jika terdapat file, client berupa multipart
        if(sizeof($files) > 0) {
            $client = Http::asMultipart();

            // attach setiap file pada client
            foreach ($files as $key => $file) {
                $path = $file->getPathname();
                $name = $file->getClientOriginalName();

                // attach file
                $client->attach($key, file_get_contents($path), $name);
            }

            // fetch api
            return $client->post($url, $body)->json();
        }

        // fetch post
        return Http::post($url, $body)->json();
    }
}