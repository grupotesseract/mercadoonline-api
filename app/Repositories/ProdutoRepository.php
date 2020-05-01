<?php

namespace App\Repositories;

use App\Models\Produto;
use App\Repositories\BaseRepository;

/**
 * Class ProdutoRepository
 * @package App\Repositories
 * @version May 1, 2020, 5:56 pm -03
*/

class ProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'subtitulo',
        'preco',
        'ean',
        'disponivel',
        'descricao',
        'descricao_sem_acento',
        'marca',
        'ncm',
        'foto',
        'st',
        'cfop',
        'icms_trib',
        'icms_cst',
        'pis_cst',
        'cofins_cst',
        'cest'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produto::class;
    }
}
