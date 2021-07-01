<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PaketModel;

class Paket extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('paket');
        $query   = $builder->get()->getResult();
        $data = [
            'paket' => $query
        ];
        return view('/paket/index', $data);
    }

    public function create()
    {
        return view('/paket/form');
    }

    public function save()
    {
        $paketModel = new PaketModel();
        $paketModel->save([
            'paket' => $this->request->getVar('paket'),
            'harga' => (int)$this->request->getVar('harga')
        ]);

        return redirect()->to('/paket');
    }

    public function edit($id)
    {
        $paketModel = new PaketModel();
        $paket = $paketModel->where('id', $id)
            ->first();
        $data = [
            'paket' => $paket
        ];
        return view('/paket/edit', $data);
    }

    public function update($id)
    {
        $paketModel = new PaketModel();
        $data = [
            'paket' => $this->request->getVar('paket'),
            'harga' => (int)$this->request->getVar('harga')
        ];
        $paketModel->update($id, $data);

        return redirect()->to('/paket');
    }

    public function delete($id)
    {
        $paketModel = new PaketModel();
        $paketModel->delete($id);

        return redirect()->to('/paket');
    }
}
