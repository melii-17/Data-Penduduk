<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index(): string
{
    $jumlahBiodata = 10;

    $data = [
        'judul' => 'sistem informasi Biodata',
        'jumlahBiodata' => $jumlahBiodata
    ];

    return view('templates/v-header', $data)
         . view('templates/v-sidebar')
         . view('templates/v-topbar')
         . view('home/index', $data)
         . view('templates/v-footer');
}
}