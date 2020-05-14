<?php

namespace App\Http\Controllers;

use App\DataTables\ConfiguracaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateConfiguracaoRequest;
use App\Http\Requests\UpdateConfiguracaoRequest;
use App\Repositories\ConfiguracaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ConfiguracaoController extends AppBaseController
{
    /** @var  ConfiguracaoRepository */
    private $configuracaoRepository;

    public function __construct(ConfiguracaoRepository $configuracaoRepo)
    {
        $this->configuracaoRepository = $configuracaoRepo;
    }

    /**
     * Display a listing of the Configuracao.
     *
     * @param ConfiguracaoDataTable $configuracaoDataTable
     * @return Response
     */
    public function index(ConfiguracaoDataTable $configuracaoDataTable)
    {
        return $configuracaoDataTable->render('configuracoes.index');
    }

    /**
     * Show the form for creating a new Configuracao.
     *
     * @return Response
     */
    public function create()
    {
        return view('configuracoes.create');
    }

    /**
     * Store a newly created Configuracao in storage.
     *
     * @param CreateConfiguracaoRequest $request
     *
     * @return Response
     */
    public function store(CreateConfiguracaoRequest $request)
    {
        $input = $request->all();

        $configuracao = $this->configuracaoRepository->create($input);

        Flash::success('Configuracao saved successfully.');

        return redirect(route('configuracoes.index'));
    }

    /**
     * Display the specified Configuracao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            Flash::error('Configuracao not found');

            return redirect(route('configuracoes.index'));
        }

        return view('configuracoes.show')->with('configuracao', $configuracao);
    }

    /**
     * Show the form for editing the specified Configuracao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            Flash::error('Configuracao not found');

            return redirect(route('configuracoes.index'));
        }

        return view('configuracoes.edit')->with('configuracao', $configuracao);
    }

    /**
     * Update the specified Configuracao in storage.
     *
     * @param  int              $id
     * @param UpdateConfiguracaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConfiguracaoRequest $request)
    {
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            Flash::error('Configuracao not found');

            return redirect(route('configuracoes.index'));
        }

        $configuracao = $this->configuracaoRepository->update($request->all(), $id);

        Flash::success('Configuracao updated successfully.');

        return redirect(route('configuracoes.index'));
    }

    /**
     * Remove the specified Configuracao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            Flash::error('Configuracao not found');

            return redirect(route('configuracoes.index'));
        }

        $this->configuracaoRepository->delete($id);

        Flash::success('Configuracao deleted successfully.');

        return redirect(route('configuracoes.index'));
    }
}
