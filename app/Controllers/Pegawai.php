<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PaketModel;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function login()
    {
        return view('/pegawai/login');
    }

    public function check()
    {
        $pegawaiModel = new PegawaiModel();
        $user = $pegawaiModel->where('username', $_POST["username"])
            ->where('password', sha1($_POST["password"]))
            ->first();
        if ($user == true) {
            if ($user["level"] == 1) {
                echo "<script>
                    alert('Login Berhasil');
                  </script>";
                return redirect()->to('/pegawai');
            } else if ($user["level"] == 2) {
                echo "<script>
                    alert('Login Berhasil');
                  </script>";
                return redirect()->to('/pelanggan');
            }
        } else {
            echo "<script>
                    alert('Login Gagal');
                  </script>";
            return redirect()->to('/login');
        }
    }

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $builder->select('pegawai.id,pegawai.username,pegawai.nama,pegawai.alamat,pegawai.level,role.nama as role');
        $builder->join('role', 'pegawai.level = role.id');
        $pegawai   = $builder->get()->getResult();
        // dd($pegawai);
        $data = [
            'pegawai' => $pegawai
        ];
        return view('/pegawai/index', $data);
    }

    public function create()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('role');
        $role   = $builder->get()->getResult();
        $data = [
            'role' => $role
        ];
        return view('/pegawai/form', $data);
    }

    public function save()
    {
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->save([
            'username' => $this->request->getVar('username'),
            'password' => sha1($this->request->getVar('password')),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'level' => $this->request->getVar('level')
        ]);

        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();
        $user = $pegawaiModel->where('id', $id)
            ->first();
        $data = [
            'user' => $user
        ];
        return view('/pegawai/edit', $data);
    }

    public function update($id)
    {
        $pegawaiModel = new PegawaiModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => sha1($this->request->getVar('password')),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'level' => $this->request->getVar('level')
        ];
        $pegawaiModel->update($id, $data);

        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $pegawaiModel = new pegawaiModel();
        $pegawaiModel->delete($id);

        return redirect()->to('/pegawai');
    }
}
