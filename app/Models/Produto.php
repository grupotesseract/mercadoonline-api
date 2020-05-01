<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produto
 * @package App\Models
 * @version May 1, 2020, 5:56 pm -03
 *
 * @property \App\Models\Cidade cidade
 * @property string titulo
 * @property string subtitulo
 * @property number preco
 * @property integer ean
 * @property boolean disponivel
 * @property string descricao
 * @property string descricao_sem_acento
 * @property string marca
 * @property integer ncm
 * @property string foto
 * @property string st
 * @property integer cfop
 * @property string icms_trib
 * @property integer icms_cst
 * @property integer pis_cst
 * @property integer cofins_cst
 * @property integer cest
 */
class Produto extends Model
{
    use SoftDeletes;

    public $table = 'produtos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'subtitulo',
        'preco',
        'ean',
        'disponivel',
        'descricao',
        'descricao_sem_acento',
        'marca',
        'ncm',
        'foto',
        'st',
        'cfop',
        'icms_trib',
        'icms_cst',
        'pis_cst',
        'cofins_cst',
        'cest'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'subtitulo' => 'string',
        'preco' => 'float',
        'ean' => 'integer',
        'disponivel' => 'boolean',
        'descricao' => 'string',
        'descricao_sem_acento' => 'string',
        'marca' => 'string',
        'ncm' => 'integer',
        'foto' => 'string',
        'st' => 'string',
        'cfop' => 'integer',
        'icms_trib' => 'string',
        'icms_cst' => 'integer',
        'pis_cst' => 'integer',
        'cofins_cst' => 'integer',
        'cest' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'preco' => 'required',
        'ean' => 'required',
        'disponivel' => 'required',
        'descricao' => 'required',
        'descricao_sem_acento' => 'required',
        'marca' => 'required',
        'ncm' => 'required',
        'foto' => 'required',
        'st' => 'required',
        'cfop' => 'required',
        'icms_trib' => 'required',
        'icms_cst' => 'required',
        'pis_cst' => 'required',
        'cofins_cst' => 'required',
        'cest' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cidade()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'cidade_id');
    }
}
