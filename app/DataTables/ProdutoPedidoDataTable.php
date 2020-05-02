<?php

namespace App\DataTables;

use App\Models\ProdutosPedido;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ProdutoPedidoDataTable extends DataTable
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

        return $dataTable
            ->addColumn('foto', 'produtos.partials.foto_datatable')
            ->addColumn('action', 'produtos.partials.confirmacao_pedido_datatable')
            ->rawColumns(['foto', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Produto $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ProdutosPedido $model)
    {
        return $model->with('produto');
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
            ->addAction(['width' => '120px', 'printable' => false])
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
            'foto',
            'titulo' => ['data' => 'produto.titulo'],
            'quantidade',
            'confirmado'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'produtosdatatable_' . time();
    }
}
