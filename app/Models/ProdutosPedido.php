<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProdutosPedido
 * @package App\Models
 * @version May 1, 2020, 9:37 pm -03
 *
 * @property \App\Models\Produto produto
 * @property \App\Models\Pedido pedido
 * @property integer produto_id
 * @property integer pedido_id
 * @property integer quantidade
 */
class ProdutosPedido extends Model
{
    public $table = 'produtos_pedido';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $appends = [
        'foto'
    ];


    public $fillable = [
        'produto_id',
        'pedido_id',
        'quantidade',
        'confirmado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'produto_id' => 'integer',
        'pedido_id' => 'integer',
        'quantidade' => 'integer',
        'confirmado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'produto_id' => 'required',
        'pedido_id' => 'required',
        'quantidade' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function produto()
    {
        return $this->belongsTo(\App\Models\Produto::class, 'produto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pedido()
    {
        return $this->belongsTo(\App\Models\Pedido::class, 'pedido_id');
    }

    /**
     * Acessor para
     */
     public function getFotoAttribute()
     {
        return $this->produto->foto;
     }

}
