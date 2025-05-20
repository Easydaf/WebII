<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;


class Buku extends Controller
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'tahun_terbit' => 'required|integer|greater_than_equal_to[1800]|less_than_equal_to[2023]'
        ];

        if (!$this->validate($rules)) {
            return view('buku/create', ['validation' => $this->validator]);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->bukuModel->insert($data);
        return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'tahun_terbit' => 'required|integer|greater_than[1901]|less_than[2024]'
        ];
        if (!$this->validate($rules)) {
            return view('buku/edit', [
                'validation' => $this->validator,
                'buku' => $this->bukuModel->find($id)
            ]);
        }
        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->bukuModel->update($id, $data);
        return redirect()->to('/buku')->with('success', 'Buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus.');
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $data['buku'] = $this->bukuModel->like('judul', $keyword)->findAll();
        return view('buku/index', $data);
    }
}
