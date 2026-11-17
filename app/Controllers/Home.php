<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function mahasiswa()
    {
        return view('mahasiswa/index');
    }

    public function dosen()
    {
        return view('dosen/index');
    }

    public function matakuliah()
    {
        return view('matakuliah/index');
    }

    public function tentang()
    {
        return view('tentang');
    }
}

// namespace App\Controllers;

// class Home extends BaseController
// {
//     public function index(): string
//     {
//         //return view('welcome_message');
//         return view('home', [
//         'nama' => 'Andi',
//         'nim' => '23001'
//             ]);

//     }
//     public function coba()
//     {
//        echo "Ini method coba";
//     }

//     public function beranda()
//     {
//        echo "Ini halaman beranda";
//     }

//     public function mahasiswa()
//     {
//        echo "Ini halaman mahasiswa";
//     }

//     public function dosen()
//     {
//        echo "Ini halaman dosen";
//     }
//     public function tentang()
//     {
//        echo "Ini halaman tentang";
//     }

    
// }
