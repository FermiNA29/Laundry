<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PaketModel;

class Pelanggan extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        if (!$session->get('username') == null) {
            $db      = \Config\Database::connect();
            $builder = $db->table('pelanggan');
            $builder->select('pelanggan.id,pelanggan.nama,pelanggan.berat,paket.paket,paket.harga,pelanggan.tglMasuk,pelanggan.tglKeluar,pelanggan.status');
            $builder->join('paket', 'pelanggan.idPaket = paket.id');
            $pelanggan = $builder->get()->getResult();
            $data = [
                'pelanggan' => $pelanggan,
                'nama' => $session->get('nama')
            ];
            return view('/pelanggan/index', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function create()
    {
        $session = \Config\Services::session();

        if (!$session->get('username') == null) {
            $paketModel = new PaketModel();
            $paket = $paketModel->findAll();
            $data = [
                'paket' => $paket,
                'nama' => $session->get('nama')
            ];
            return view('/pelanggan/form', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {
        $pelangganModel = new PelangganModel();
        $pelangganModel->save([
            'nama' => $this->request->getVar('nama'),
            'berat' => $this->request->getVar('berat'),
            'idPaket' => $this->request->getVar('paket'),
            'tglMasuk' => $this->request->getVar('tglMasuk'),
            'tglKeluar' => $this->request->getVar('tglKeluar'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/pelanggan');
    }

    public function edit($id)
    {
        $session = \Config\Services::session();

        if (!$session->get('username') == null) {
            $pelangganModel = new PelangganModel();
            $paketModel = new PaketModel();
            $user = $pelangganModel->where('id', $id)
                ->first();
            $paket = $paketModel->findAll();
            $data = [
                'user' => $user,
                'paket' => $paket,
                'nama' => $session->get('nama')
            ];
            return view('/pelanggan/edit', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function update($id)
    {
        $pelangganModel = new PelangganModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'berat' => $this->request->getVar('berat'),
            'idPaket' => $this->request->getVar('paket'),
            'tglMasuk' => $this->request->getVar('tglMasuk'),
            'tglKeluar' => $this->request->getVar('tglKeluar'),
            'status' => $this->request->getVar('status')
        ];
        $pelangganModel->update($id, $data);

        return redirect()->to('/pelanggan');
    }

    public function delete($id)
    {
        $pelangganModel = new PelangganModel();
        $pelangganModel->delete($id);

        return redirect()->to('/pelanggan');
    }
}
