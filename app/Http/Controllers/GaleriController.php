<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Data galeri bisa kamu ambil dari database jika ada
        // Contoh data dummy:
        $galeriItems = [
            ['title' => 'Event 1', 'image' => 'event1.jpg'],
            ['title' => 'Event 2', 'image' => 'event2.jpg'],
            ['title' => 'Event 3', 'image' => 'event3.jpg'],
        ];

        return view('gallery', [
            'title' => 'galeri',
            'activePage' => 'galeri',
            'galeriItems' => $galeriItems
        ]);
    }
}
