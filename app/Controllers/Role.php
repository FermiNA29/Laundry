<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PaketModel;
use App\Models\PegawaiModel;
use App\Models\RoleModel;

class Role extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('role');
        $role   = $builder->get()->getResult();
        $data = [
            'role' => $role
        ];
        return view('/role/index', $data);
    }

    public function create()
    {
        return view('/role/form');
    }

    public function save()
    {
        $roleModel = new RoleModel();
        $roleModel->save([
            'nama' => $this->request->getVar('nama')
        ]);

        return redirect()->to('/role');
    }

    public function edit($id)
    {
        $roleModel = new RoleModel();
        $user = $roleModel->where('id', $id)
            ->first();
        $data = [
            'user' => $user
        ];
        return view('/role/edit', $data);
    }

    public function update($id)
    {
        $roleModel = new RoleModel();
        $data = [
            'nama' => $this->request->getVar('nama')
        ];
        $roleModel->update($id, $data);

        return redirect()->to('/role');
    }

    public function delete($id)
    {
        $roleModel = new RoleModel();
        $roleModel->delete($id);

        return redirect()->to('/role');
    }
}
