<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicoModel extends Model
{
    protected $table      = 'servicos';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Titulo', 'categoria', 'Texto', 'foto', 'status'];
    
    // Adicione esta linha para desativar validações restritivas que impedem o salvamento:
    protected $skipValidation = true;
}