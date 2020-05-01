<?php

namespace App\Http\Controllers;

use App\DataTables\ProdutoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Repositories\ProdutoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProdutoController extends AppBaseController
{
    /** @var  ProdutoRepository */
    private $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepo)
    {
        $this->produtoRepository = $produtoRepo;
    }

    /**
     * Display a listing of the Produto.
     *
     * @param ProdutoDataTable $produtoDataTable
     * @return Response
     */
    public function index(ProdutoDataTable $produtoDataTable)
    {
        return $produtoDataTable->render('produtos.index');
    }

    /**
     * Show the form for creating a new Produto.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created Produto in storage.
     *
     * @param CreateProdutoRequest $request
     *
     * @return Response
     */
    public function store(CreateProdutoRequest $request)
    {
        $input = $request->all();

        $produto = $this->produtoRepository->create($input);

        Flash::success('Produto saved successfully.');

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified Produto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            Flash::error('Produto not found');

            return redirect(route('produtos.index'));
        }

        return view('produtos.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified Produto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            Flash::error('Produto not found');

            return redirect(route('produtos.index'));
        }

        return view('produtos.edit')->with('produto', $produto);
    }

    /**
     * Update the specified Produto in storage.
     *
     * @param  int              $id
     * @param UpdateProdutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProdutoRequest $request)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            Flash::error('Produto not found');

            return redirect(route('produtos.index'));
        }

        $produto = $this->produtoRepository->update($request->all(), $id);

        Flash::success('Produto updated successfully.');

        return redirect(route('produtos.index'));
    }

    /**
     * Remove the specified Produto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            Flash::error('Produto not found');

            return redirect(route('produtos.index'));
        }

        $this->produtoRepository->delete($id);

        Flash::success('Produto deleted successfully.');

        return redirect(route('produtos.index'));
    }
}
