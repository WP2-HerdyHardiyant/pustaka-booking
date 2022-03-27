<?php

namespace App\Controllers;

use CodeIgniter\Model;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang... selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $hasil = $n1 + $n2;

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $hasil;

        return view("View_Latihan", $data);
    }
}
