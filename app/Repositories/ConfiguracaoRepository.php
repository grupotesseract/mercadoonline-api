<?php

namespace App\Repositories;

use App\Models\Configuracao;
use App\Repositories\BaseRepository;

/**
 * Class ConfiguracaoRepository
 * @package App\Repositories
 * @version May 13, 2020, 10:14 pm -03
*/

class ConfiguracaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome_loja',
        'numero_whatsapp',
        'link_logo',
        'cor_principal',
        'cor_secundaria',
        'link_facebook',
        'link_instagram',
        'link_website',
        'texto_rodape'
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
        return Configuracao::class;
    }
}
