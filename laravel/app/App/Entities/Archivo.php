<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/15
 * Time: 18:23
 */

namespace App\App\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Archivo extends Model {

    protected $table = "archivos";

    protected $fillable = [
        'id',
        'titulo',
        'contenido'
    ];
} 