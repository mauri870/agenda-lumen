<?php
/**
 * Created by PhpStorm.
 * User: mauri870
 * Date: 26/10/15
 * Time: 21:08
 */

namespace Agenda;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'descricao',
        'pessoa_id',
        'telefone',
        'codPais',
        'ddd',
    ];

    /**
     *
     */
    public function getNumeroAttribute()
    {
        return "{$this->codPais} ({$this->ddd}) {$this->telefone}";
    }


    /**
     * A phone belongs to a person
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}