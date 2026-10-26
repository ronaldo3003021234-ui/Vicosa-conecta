<?php
namespace App\Controllers;

use App\Models\ServicoModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ServicoController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function listar(): string
    {
        $model = new ServicoModel();
        return view('servico/listar', [
            'servicos' => $model->findAll()
        ]);
    }

    public function editar($id): string
    {
        $model = new ServicoModel();
        $servico = $model->find($id);

        if ($servico === null) {
            throw PageNotFoundException::forPageNotFound('Serviço não encontrado.');
        }

        return view('servico/editar', [
            'servico' => $servico,
            'erros' => []
        ]);
    }

    public function atualizar($id)
    {
        $model = new ServicoModel();
        
        $dadosPost = [
            'Titulo' => $this->request->getPost('Titulo'),
            'Texto' => $this->request->getPost('Texto'),
        ];

        $model->update($id, $dadosPost);

        return redirect()->to(site_url('servicos'))->with('mensagem', 'Atualizado com sucesso!');
    }
}