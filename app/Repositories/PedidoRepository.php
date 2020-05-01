<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories
 * @version May 1, 2020, 7:13 pm -03
*/

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome_cliente',
        'celular',
        'endereco'
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
        return Pedido::class;
    }
}
