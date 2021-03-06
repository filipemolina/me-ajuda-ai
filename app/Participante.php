<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participante extends Model
{
	use SoftDeletes;

	/**
	 * Fillables
	 */

	protected $fillable = [
		'nome',
		'sexo',
		'cpf',
		'nascimento',
		'rg',
		'emissao_rg',
		'orgao_emissor_rg',
		'mulher_responsavel',
		'email',
		'renda_familiar',
		'tempo_residencia',
		'necessidades_especiais',
		'nis',
		'ctps',
		'bolsa_familia',
		'tipo_deficiencia',
		'codigo_inscricao',
		'vr_bolsa',
		'user_id',
		'motivo_exclusao',
		'exclusao_user_id',
		'bairro_preferencial'
	];

	/**
	* The attributes that should be mutated to dates.
	*
	* @var array
	*/
    protected $dates = ['deleted_at'];

	/**
	 * Calcular a faixa em que o participante se enquadra
	 */

	public function calculaFaixa()
	{
		if($this->renda_familiar <= 1800)
			return "1";
		elseif($this->renda_familiar > 1800 && $this->renda_familiar <= 2600)
			return "1,5";
		elseif($this->renda_familiar > 2600 && $this->renda_familiar <= 4000)
			return "2";
		elseif($this->renda_familiar > 4000 && $this->renda_familiar <= 9000)
			return "3";
	}
    
    /**
     * Relacionamentos
     */

    public function endereco()
    {
    	return $this->hasOne('App\Endereco');
    }

    public function coparticipante()
    {
    	return $this->hasOne('App\Coparticipante');
    }

    public function dependentes()
    {
    	return $this->hasMany('App\Dependente');
    }

    public function telefones()
    {
    	return $this->hasMany('App\Telefone');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function user_exclusao()
    {
    	return $this->belongsTo('App\Models\User', 'exclusao_user_id');
    }
}
