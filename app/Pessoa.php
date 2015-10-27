<?php
/**
 * Created by PhpStorm.
 * User: mauri870
 * Date: 26/10/15
 * Time: 21:05
 */

namespace Agenda;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'apelido',
        'email',
        'endereco',
    ];


    /**
     * A person hasMany phones
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }


}