<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/15
 * Time: 18:05
 */

namespace App\Http\Controllers;
use App\App\Entities\Archivo;
use Illuminate\Support\Facades\DB;
use App\App\Repositories\ArchivosRepo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ArchivosController extends BaseController {
    protected $archivosRepo;
    public function __construct(ArchivosRepo $archivosRepo){
        $this->archivosRepo = $archivosRepo;
    }
    public function upLoadFile(){
        $archivo = $this->archivosRepo->createArchivo(Input::all()['file']->getClientOriginalName(),base64_encode(Input::all()['file']));
    }

    public function getArchivos() {
        $archivos = Archivo::all();
        return View::make('tableArchivos', compact('archivos'));
    }

    public function getCreateArchivo() {
        return View::make('formArchivos');
    }

    public function deleteGaleria() {
        $id = Input::all()['id'];
        $galeria = Galeria::find($id);
        $galeria->delete();
        return $galeria;
    }
} 