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
     public function getTotalAttribute()
     {
        return $this->produtos()->sum('preco');
     }

    /**
     * Acessor para o created_at formatado
     */
     public function getDataFormatadaAttribute()
     {
        return $this->created_at->format('d/m/Y');
     }

}
