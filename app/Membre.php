<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'membres';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_membre';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'etat',
    ];
}
