<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
use CodeIgniter\Exceptions\PageNotFoundException;
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

        // Jika komik tidak ada di table
        if (empty($data['komik'])) {
            throw new PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan');
        }
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Komik',
            'active' => 'komik',
        ];
        return view('komik/create', $data);
    }

    public function store()
    {
        helper('slug');

        $slug = create_slug($this->request->getPost('judul'));
        $this->komikModel->save([
            'judul' => $this->request->getPost('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'sampul' => $this->request->getPost('sampul'),
        ]);

        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/komik');
    }
}
