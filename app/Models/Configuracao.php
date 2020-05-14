<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Configuracao
 * @package App\Models
 * @version May 13, 2020, 10:14 pm -03
 *
 * @property \Illuminate\Database\Eloquent\Collection produtos
 * @property string nome_loja
 * @property integer numero_whatsapp
 * @property string link_logo
 * @property string cor_principal
 * @property string cor_secundaria
 * @property string link_facebook
 * @property string link_instagram
 * @property string link_website
 * @property string texto_rodape
 */
class Configuracao extends Model
{
    use SoftDeletes;

    public $table = 'configuracoes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome_loja',
        'numero_whatsapp',
        'link_logo',
        'cor_principal',
        'cor_secundaria',
        'link_facebook',
        'link_instagram',
        'link_website',
        'texto_rodape'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome_loja' => 'string',
        'numero_whatsapp' => 'integer',
        'link_logo' => 'string',
        'cor_principal' => 'string',
        'cor_secundaria' => 'string',
        'link_facebook' => 'string',
        'link_instagram' => 'string',
        'link_website' => 'string',
        'texto_rodape' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome_loja' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function produtos()
    {
        return $this->belongsToMany(\App\Models\Produto::class, 'produtos_pedido', 'produto_id', 'pedido_id');
    }
}
