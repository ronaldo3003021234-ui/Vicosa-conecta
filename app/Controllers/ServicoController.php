<?php

namespace App\Controllers;

use App\Models\ServicoModel;

class ServicoController extends BaseController
{
    public function index()
    {
        $model = new ServicoModel();
        $data['servicos'] = $model->findAll();

        return view('servicos/listar', $data);
    }

    public function novo()
    {
        return view('servicos/form');
    }

    public function salvar()
    {
        $model = new ServicoModel();

        $file = $this->request->getFile('foto');
        $nomeFoto = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $nomeFoto = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $nomeFoto);
        }

        $data = [
            'Titulo'    => $this->request->getPost('Titulo'),
            'categoria' => $this->request->getPost('categoria'),
            'Texto'     => $this->request->getPost('Texto'),
            'status'    => $this->request->getPost('status'),
        ];

        if ($nomeFoto) {
            $data['foto'] = $nomeFoto;
        }

        $id = $this->request->getPost('Id');

        if ($id) {
            if (!$nomeFoto) {
                unset($data['foto']); // Mantém a foto anterior caso nenhuma nova seja enviada
            }
            $model->update($id, $data);
        } else {
            $model->save($data);
        }

        return redirect()->to(base_url('servicos'));
    }

    public function editar($id)
    {
        $model = new ServicoModel();
        $data['servico'] = $model->find($id);

        return view('servicos/form', $data);
    }

    public function excluir($id)
    {
        $model = new ServicoModel();
        $model->delete($id);

        return redirect()->to(base_url('servicos'));
    }
}