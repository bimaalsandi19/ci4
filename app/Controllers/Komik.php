<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
use CodeIgniter\HTTP\ResponseInterface;

class Komik extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'active' => 'komik',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikModel->getKomik($slug);
        $data = [
            'title' => 'Detail Komik',
            'active' => 'komik',
            'komik' => $komik
        ];
        return view('komik/detail', $data);
    }
}
