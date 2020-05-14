<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateConfiguracaoAPIRequest;
use App\Http\Requests\API\UpdateConfiguracaoAPIRequest;
use App\Models\Configuracao;
use App\Repositories\ConfiguracaoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ConfiguracaoController
 * @package App\Http\Controllers\API
 */

class ConfiguracaoAPIController extends AppBaseController
{
    /** @var  ConfiguracaoRepository */
    private $configuracaoRepository;

    public function __construct(ConfiguracaoRepository $configuracaoRepo)
    {
        $this->configuracaoRepository = $configuracaoRepo;
    }

    /**
     * Display a listing of the Configuracao.
     * GET|HEAD /configuracoes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $configuracoes = $this->configuracaoRepository->all()->first();
        return $this->sendResponse($configuracoes->toArray(), 'Configuracoes retrieved successfully');
    }

    /**
     * Store a newly created Configuracao in storage.
     * POST /configuracoes
     *
     * @param CreateConfiguracaoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateConfiguracaoAPIRequest $request)
    {
        $input = $request->all();

        $configuracao = $this->configuracaoRepository->create($input);

        return $this->sendResponse($configuracao->toArray(), 'Configuracao saved successfully');
    }

    /**
     * Display the specified Configuracao.
     * GET|HEAD /configuracoes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Configuracao $configuracao */
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            return $this->sendError('Configuracao not found');
        }

        return $this->sendResponse($configuracao->toArray(), 'Configuracao retrieved successfully');
    }

    /**
     * Update the specified Configuracao in storage.
     * PUT/PATCH /configuracoes/{id}
     *
     * @param int $id
     * @param UpdateConfiguracaoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConfiguracaoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Configuracao $configuracao */
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            return $this->sendError('Configuracao not found');
        }

        $configuracao = $this->configuracaoRepository->update($input, $id);

        return $this->sendResponse($configuracao->toArray(), 'Configuracao updated successfully');
    }

    /**
     * Remove the specified Configuracao from storage.
     * DELETE /configuracoes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Configuracao $configuracao */
        $configuracao = $this->configuracaoRepository->find($id);

        if (empty($configuracao)) {
            return $this->sendError('Configuracao not found');
        }

        $configuracao->delete();

        return $this->sendSuccess('Configuracao deleted successfully');
    }
}
