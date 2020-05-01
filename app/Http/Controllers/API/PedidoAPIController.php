<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePedidoAPIRequest;
use App\Http\Requests\API\UpdatePedidoAPIRequest;
use App\Models\Pedido;
use App\Repositories\PedidoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PedidoController
 * @package App\Http\Controllers\API
 */

class PedidoAPIController extends AppBaseController
{
    /** @var  PedidoRepository */
    private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedido.
     * GET|HEAD /pedidos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pedidos = $this->pedidoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($pedidos->toArray(), 'Pedidos retrieved successfully');
    }

    /**
     * Store a newly created Pedido in storage.
     * POST /pedidos
     *
     * @param CreatePedidoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidoAPIRequest $request)
    {
        $input = $request->all();

        $pedido = $this->pedidoRepository->create($input);

        return $this->sendResponse($pedido->toArray(), 'Pedido saved successfully');
    }

    /**
     * Display the specified Pedido.
     * GET|HEAD /pedidos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        return $this->sendResponse($pedido->toArray(), 'Pedido retrieved successfully');
    }

    /**
     * Update the specified Pedido in storage.
     * PUT/PATCH /pedidos/{id}
     *
     * @param int $id
     * @param UpdatePedidoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        $pedido = $this->pedidoRepository->update($input, $id);

        return $this->sendResponse($pedido->toArray(), 'Pedido updated successfully');
    }

    /**
     * Remove the specified Pedido from storage.
     * DELETE /pedidos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        $pedido->delete();

        return $this->sendSuccess('Pedido deleted successfully');
    }
}
