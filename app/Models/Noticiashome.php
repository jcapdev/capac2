<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticiashome
 *
 * @property $id
 * @property $imagen
 * @property $title
 * @property $autor
 * @property $date
 * @property $time
 * @property $place
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noticiashome extends Model
{
    
    static $rules = [
		'imagen' => 'required',
		'title' => 'required',
		'autor' => 'required',
		'date' => 'required',
		'time' => 'required',
		'place' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','title','autor','date','time','place','descripcion'];



}
