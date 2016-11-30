<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/15
 * Time: 18:27
 */

namespace App\App\Repositories;
use App\App\Entities\Archivo;

class ArchivosRepo {

    public function getArchivos(){
        return Archivo::all();
    }

    public function createArchivo($titulo, $contenido){
        return Archivo::create([
            'titulo'           => $titulo,
            'contenido'        => $contenido
        ]);
    }

    public function getArchivoById($id){
        return Archivo::where('id', $id)
            ->get();
    }
}