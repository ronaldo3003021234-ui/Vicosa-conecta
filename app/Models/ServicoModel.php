<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicoModel extends Model
{
    protected $table            = 'servicos';
    protected $primaryKey       = 'Id'; // Note o I maiúsculo se estiver assim na sua tabela
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    // Campos permitidos para inserção via formulário
    protected $allowedFields    = [
        'Titulo',
        'categoria',
        'Texto',
        'foto',
        'status',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}