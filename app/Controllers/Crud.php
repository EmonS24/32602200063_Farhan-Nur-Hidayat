<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }
    public function index()
    {
        return view('crud/view');
    }
    public function tambah()
    {

        if (isset($_POST['nim'])) {

            $nim = $_POST['nim'];

            $upload = [
                'nim' => $nim
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        } else {
            return view('crud/upload');
        }
    }
    public function edit()
    {
        return view('crud/edit');
    }
}