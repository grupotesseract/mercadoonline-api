<?php

namespace App\Repositories;

use App\Models\ProdutosPedido;
use App\Repositories\BaseRepository;

/**
 * Class ProdutosPedidoRepository
 * @package App\Repositories
 * @version May 1, 2020, 10:00 pm -03
*/

class ProdutosPedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'produto_id',
        'pedido_id',
        'quantidade'
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
        return ProdutosPedido::class;
    }
}
