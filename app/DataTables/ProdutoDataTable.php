<?php

namespace App\DataTables;

use App\Models\Produto;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ProdutoDataTable extends DataTable
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
            ->addColumn('preco', 'components.price')
            ->addColumn('action', 'produtos.datatables_actions')
            ->addColumn('disponivel', 'produtos.partials.disponivel')
            ->blacklist(['foto'])
            ->rawColumns(['foto', 'preco', 'action', 'disponivel']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Produto $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Produto $model)
    {
        return $model->newQuery();
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
            ->addAction(config('datatables.actions'))
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'foto' => ['filterable' => false, 'searchable' => false, 'orderable' => false],
            'titulo',
            'preco' => ['title' => 'Preço'],
            'disponivel',
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
