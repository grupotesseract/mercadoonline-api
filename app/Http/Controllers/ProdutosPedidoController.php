<?php

namespace App\Http\Controllers;

use App\DataTables\ProdutosPedidoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProdutosPedidoRequest;
use App\Http\Requests\UpdateProdutosPedidoRequest;
use App\Repositories\ProdutosPedidoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProdutosPedidoController extends AppBaseController
{
    /** @var  ProdutosPedidoRepository */
    private $produtosPedidoRepository;

    public function __construct(ProdutosPedidoRepository $produtosPedidoRepo)
    {
        $this->produtosPedidoRepository = $produtosPedidoRepo;
    }

    /**
     * Display a listing of the ProdutosPedido.
     *
     * @param ProdutosPedidoDataTable $produtosPedidoDataTable
     * @return Response
     */
    public function index(ProdutosPedidoDataTable $produtosPedidoDataTable)
    {
        return $produtosPedidoDataTable->render('produtos_pedidos.index');
    }

    /**
     * Show the form for creating a new ProdutosPedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos_pedidos.create');
    }

    /**
     * Store a newly created ProdutosPedido in storage.
     *
     * @param CreateProdutosPedidoRequest $request
     *
     * @return Response
     */
    public function store(CreateProdutosPedidoRequest $request)
    {
        $input = $request->all();

        $produtosPedido = $this->produtosPedidoRepository->create($input);

        Flash::success('Produtos Pedido saved successfully.');

        return redirect(route('produtosPedidos.index'));
    }

    /**
     * Display the specified ProdutosPedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produtosPedido = $this->produtosPedidoRepository->find($id);

        if (empty($produtosPedido)) {
            Flash::error('Produtos Pedido not found');

            return redirect(route('produtosPedidos.index'));
        }

        return view('produtos_pedidos.show')->with('produtosPedido', $produtosPedido);
    }

    /**
     * Show the form for editing the specified ProdutosPedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produtosPedido = $this->produtosPedidoRepository->find($id);

        if (empty($produtosPedido)) {
            Flash::error('Produtos Pedido not found');

            return redirect(route('produtosPedidos.index'));
        }

        return view('produtos_pedidos.edit')->with('produtosPedido', $produtosPedido);
    }

    /**
     * Update the specified ProdutosPedido in storage.
     *
     * @param  int              $id
     * @param UpdateProdutosPedidoRequest $request
     *
     * @return Response
     */
    public function update($id)
    {
        $produtosPedido = $this->produtosPedidoRepository->find($id);

        if (empty($produtosPedido)) {
            Flash::error('Produtos Pedido not found');

            return redirect(route('produtosPedidos.index'));
        }

        $produtosPedido = $this->produtosPedidoRepository->update(\Request::all(), $id);

        Flash::success('Pedido atualizado.');

        return redirect(route('pedidos.show', $produtosPedido->pedido_id));
    }

    /**
     * Remove the specified ProdutosPedido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produtosPedido = $this->produtosPedidoRepository->find($id);

        if (empty($produtosPedido)) {
            Flash::error('Produtos Pedido not found');

            return redirect(route('produtosPedidos.index'));
        }

        $this->produtosPedidoRepository->delete($id);

        Flash::success('Produtos Pedido deleted successfully.');

        return redirect(route('produtosPedidos.index'));
    }
}
