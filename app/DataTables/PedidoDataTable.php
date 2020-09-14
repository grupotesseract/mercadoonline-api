<?php

namespace App\DataTables;

use App\Models\Pedido;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PedidoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'pedidos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pedido $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pedido $model)
    {
        return $model->newQuery()->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '400px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'asc']],
                'buttons'   => [
                    ['extend' => 'create', 'text' => '<i class="fa fa-plus"></i> Adicionar', 'className' => 'btn btn-sm'],
                    ['extend' => 'export', 'text' => '<i class="fa fa-download"></i> Exportar', 'className' => 'btn btn-sm'],
                    ['extend' => 'print', 'text' => '<i class="fa fa-print"></i>', 'className' => 'btn btn-sm'],
                    ['extend' => 'reload', 'text' => '<i class="fa fa-refresh"></i>', 'className' => 'btn btn-sm'],
                ],
                'language' => [
                    'url' => url('https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json'),
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'created_at' => ['visible' => false],
            'dataFormatada' => ['title' => 'Data do pedido', 'filterable' => false, 'searchable' => false, 'orderable' => false],
            'nome_cliente',
            'celular',
            'endereco',
            'total' => ['filterable' => false, 'searchable' => false, 'orderable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pedidosdatatable_' . time();
    }
}
