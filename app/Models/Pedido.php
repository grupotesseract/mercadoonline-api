<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido
 * @package App\Models
 * @version May 1, 2020, 7:13 pm -03
 *
 * @property \Illuminate\Database\Eloquent\Collection produtos
 * @property string nome_cliente
 * @property integer celular
 * @property string endereco
 */
class Pedido extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome_cliente',
        'celular',
        'endereco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome_cliente' => 'string',
        'celular' => 'integer',
        'endereco' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    public $appends = [
        'total',
        'dataFormatada'
    ];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function produtos()
    {
        return $this->belongsToMany(\App\Models\Produto::class, 'produtos_pedido')
            ->withPivot('quantidade');
    }
    /**
     * Acessor para o total do pedido
     */
    public function getTotalConfirmadoAttribute()
    {

        $produtosConfirmado = $this->produtosConfirmados->each(function($produto) {
            $produto->valor = $produto->preco * $produto->pivot->quantidade;
        });

        return number_format($produtosConfirmado->sum('valor'), 2);
    }

    /**
     * Acessor para o total do pedido
     */
    public function getTotalAttribute()
    {
        return $this->totalConfirmado;
    }

    /**
     * Acessor para o total do pedido
     */
    public function getTotalFaltandoAttribute()
    {
        $produtosFaltando = $this->produtosFaltando->each(function($produto) {
            $produto->valor = $produto->preco * $produto->pivot->quantidade;
        });

        return number_format($produtosFaltando->sum('valor'), 2);
    }

    /**
     * Acessor para o created_at formatado
     */
    public function getDataFormatadaAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }


    /**
     * Acessor para os produtos confirmados
     */
    public function getProdutosConfirmadosAttribute()
    {
        return $this->produtos()->where('confirmado', true)->get();
    }

    /**
     * Acessor para os produtos confirmados
     */
    public function getProdutosFaltandoAttribute()
    {
        return $this->produtos()->where('confirmado', false)->get();
    }

    /**
     * Acessor para a mensagem de confirmacao da compra
     */
    public function getMensagemConfirmacaoAttribute()
    {
        $mensagem = [];

        $produtos = $this->produtosConfirmados;

        $mensagem[] = "Segue a confirmação da compra:";

        foreach ($produtos as $Produto) {
            $mensagem[] = "- ".$Produto->pivot->quantidade ."x $Produto->titulo";
        }

        $mensagem[] = "----------------------------------------";
        $mensagem[] = "Total: R$ " . $this->totalConfirmado;

        return implode("\n", $mensagem);
    }

    /**
     * Acessor para a mensagem de itens faltando da compra
     */
    public function getMensagemFaltandoAttribute()
    {
        $mensagem = [];

        $produtos = $this->produtosFaltando;

        $mensagem[] = "Infelizmente os itens a seguir acabaram :(";

        foreach ($produtos as $Produto) {
            $mensagem[] = "- ".$Produto->pivot->quantidade ."x $Produto->titulo";
        }

        $mensagem[] = "----------------------------------------";
        $mensagem[] = "Então o valor de R$ " . $this->totalFaltando . " foi descontado da compra.";
        ;
        return implode("\n", $mensagem);
    }

}
