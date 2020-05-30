<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Configuracao;

class ConfiguracaoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_configuracao()
    {
        $configuracao = factory(Configuracao::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/configuracoes', $configuracao
        );

        $this->assertApiResponse($configuracao);
    }

    /**
     * @test
     */
    public function test_read_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/configuracoes/'.$configuracao->id
        );

        $this->assertApiResponse($configuracao->toArray());
    }

    /**
     * @test
     */
    public function test_update_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();
        $editedConfiguracao = factory(Configuracao::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/configuracoes/'.$configuracao->id,
            $editedConfiguracao
        );

        $this->assertApiResponse($editedConfiguracao);
    }

    /**
     * @test
     */
    public function test_delete_configuracao()
    {
        $configuracao = factory(Configuracao::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/configuracoes/'.$configuracao->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/configuracoes/'.$configuracao->id
        );

        $this->response->assertStatus(404);
    }
}
