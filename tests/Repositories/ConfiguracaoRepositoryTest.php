<?php namespace Tests\Repositories;

use App\Models\Configuracao;
use App\Repositories\ConfiguracaoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ConfiguracaoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ConfiguracaoRepository
     */
    protected $configuracaoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->configuracaoRepo = \App::make(ConfiguracaoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_configuracao()
    {
        $configuracao = factory(Configuracao::class)->make()->toArray();

        $createdConfiguracao = $this->configuracaoRepo->create($configuracao);

        $createdConfiguracao = $createdConfiguracao->toArray();
        $this->assertArrayHasKey('id', $createdConfiguracao);
        $this->assertNotNull($createdConfiguracao['id'], 'Created Configuracao must have id specified');
        $this->assertNotNull(Configuracao::find($createdConfiguracao['id']), 'Configuracao with given id must be in DB');
        $this->assertModelData($configuracao, $createdConfiguracao);
    }

    /**
     * @test read
     */
    public function test_read_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();

        $dbConfiguracao = $this->configuracaoRepo->find($configuracao->id);

        $dbConfiguracao = $dbConfiguracao->toArray();
        $this->assertModelData($configuracao->toArray(), $dbConfiguracao);
    }

    /**
     * @test update
     */
    public function test_update_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();
        $fakeConfiguracao = factory(Configuracao::class)->make()->toArray();

        $updatedConfiguracao = $this->configuracaoRepo->update($fakeConfiguracao, $configuracao->id);

        $this->assertModelData($fakeConfiguracao, $updatedConfiguracao->toArray());
        $dbConfiguracao = $this->configuracaoRepo->find($configuracao->id);
        $this->assertModelData($fakeConfiguracao, $dbConfiguracao->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();

        $resp = $this->configuracaoRepo->delete($configuracao->id);

        $this->assertTrue($resp);
        $this->assertNull(Configuracao::find($configuracao->id), 'Configuracao should not exist in DB');
    }
}
