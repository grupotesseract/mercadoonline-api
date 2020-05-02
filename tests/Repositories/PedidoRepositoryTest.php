<?php namespace Tests\Repositories;

use App\Models\Pedido;
use App\Repositories\PedidoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PedidoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PedidoRepository
     */
    protected $pedidoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->pedidoRepo = \App::make(PedidoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_pedido()
    {
        $pedido = factory(Pedido::class)->make()->toArray();

        $createdPedido = $this->pedidoRepo->create($pedido);

        $createdPedido = $createdPedido->toArray();
        $this->assertArrayHasKey('id', $createdPedido);
        $this->assertNotNull($createdPedido['id'], 'Created Pedido must have id specified');
        $this->assertNotNull(Pedido::find($createdPedido['id']), 'Pedido with given id must be in DB');
        $this->assertModelData($pedido, $createdPedido);
    }

    /**
     * @test read
     */
    public function test_read_pedido()
    {
        $pedido = factory(Pedido::class)->create();

        $dbPedido = $this->pedidoRepo->find($pedido->id);

        $dbPedido = $dbPedido->toArray();
        $this->assertModelData($pedido->toArray(), $dbPedido);
    }

    /**
     * @test update
     */
    public function test_update_pedido()
    {
        $pedido = factory(Pedido::class)->create();
        $fakePedido = factory(Pedido::class)->make()->toArray();

        $updatedPedido = $this->pedidoRepo->update($fakePedido, $pedido->id);

        $this->assertModelData($fakePedido, $updatedPedido->toArray());
        $dbPedido = $this->pedidoRepo->find($pedido->id);
        $this->assertModelData($fakePedido, $dbPedido->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_pedido()
    {
        $pedido = factory(Pedido::class)->create();

        $resp = $this->pedidoRepo->delete($pedido->id);

        $this->assertTrue($resp);
        $this->assertNull(Pedido::find($pedido->id), 'Pedido should not exist in DB');
    }
}
