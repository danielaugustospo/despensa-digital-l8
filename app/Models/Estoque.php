<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;
    
    /**
     * Alterarei a coluna "created at" para "criadoEm".
     *
     * @var string
     */
    const CREATED_AT = 'criadoEm';

    /**
     * Alterarei a coluna "updated at" para "atualizadoEm".
     *
     * @var string
     */
    const UPDATED_AT = 'atualizadoEm';

    /**
     * Alterarei a coluna "deleted at" para "excluidoEm".
     *
     * @var string
     */
    const DELETED_AT = 'excluidoEm';
}
