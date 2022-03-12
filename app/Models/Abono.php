<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Abono
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $monto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Abono extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'telefono' => 'required',
		'monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','telefono','monto'];



}
