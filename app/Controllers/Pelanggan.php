<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PaketModel;

class Pelanggan extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggan');
        $builder->select('pelanggan.id,pelanggan.nama,pelanggan.berat,paket.paket,paket.harga,pelanggan.tglMasuk,pelanggan.tglKeluar,pelanggan.status');
        $builder->join('paket', 'pelanggan.idPaket = paket.id');
        $pelanggan = $builder->get()->getResult();
        $data = [
            'pelanggan' => $pelanggan
        ];
        return view('/pelanggan/index', $data);
    }

    public function create()
    {
        $paketModel = new PaketModel();
        $paket = $paketModel->findAll();
        $data = [
            'paket' => $paket
        ];
        return view('/pelanggan/form', $data);
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
        $pelangganModel = new PelangganModel();
        $paketModel = new PaketModel();
        $user = $pelangganModel->where('id', $id)
            ->first();
        $paket = $paketModel->findAll();
        $data = [
            'user' => $user,
            'paket' => $paket
        ];
        return view('/pelanggan/edit', $data);
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
