<?php

namespace App\DataTables\Scopes;

use Yajra\DataTables\Contracts\DataTableScope;

class PorIdPedido implements DataTableScope
{

    private $idPedido;

    /**
     * @param $idPedido
     */
    public function __construct($idPedido)
    {
        $this->idPedido = $idPedido;
    }

    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        return $query->where('pedido_id', $this->idPedido);
    }
}
