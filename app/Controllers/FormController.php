<?php

namespace App\Controllers;

class FormController extends BaseController
{
    public function submit()
    {
        $nama = $this->request->getPost('nama');
        $nama = $this->request->getPost('nim');
        $nama = $this->request->getPost('kelas');
        $nama = $this->request->getPost('matakuliah');
        $nama = $this->request->getPost('dosen');
        $nama = $this->request->getPost('asisten');

        return view('result', compact('nama', 'nim', 'kelas', 'matakuliah', 'dosen', 'asisten'));
    }
}
