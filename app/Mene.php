<?php

namespace App;


use Illuminate\Foundation\Auth\Mene as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mene extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "mensalidade";
    protected $fillable = [
        'name', 'email',  'mensalidade', 'filtro'
    ];


}
