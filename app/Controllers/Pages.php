<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Website Bima',
            'active' => 'home'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {

        return view('pages/about', [
            'title' => 'About | Website Bima',
            'active' => 'about'

        ]);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Website Bima',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Pancoran, Jakarta Selatan'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Kebayoran Lama, Jakarta Selatan'
                ]
            ],
            'active' => 'contact'


        ];
        return view('pages/contact', $data);
    }
}
