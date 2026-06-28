<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT nama_wilayah, ST_AsText(polygon) as polygon, jumlah_penduduk FROM wilayah");

        $data = [
            'judul'   => 'Maps', // Ubah bagian ini agar sidebar membaca menu Maps yang aktif
            'wilayah' => $query->getResultArray(),
        ];

        return view('templates/v-header', $data)
             . view('templates/v-sidebar', $data)
             . view('templates/v-topbar')
             . view('home/maps', $data)
             . view('templates/v-footer');
    }
}