@extends('layout')

@section('content')
<h3 class="page-title">
    Archivos
</h3>
<div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            Carga de archivos
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <div class="form-horizontal" id="formGaleria">
            <div class="form-body">
                <div class="form-group widgetMultipleImage">
                    <div class="row">
                        <div class="col-md-3 control-label"><label class="control-label">Agregue la fotos a la galeria:</label></div>
                        <div class="col-md-7 fotos">
                            <form action="{{ asset('') }}upLoadFile" class="dropzone" id="my-dropzone">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="idGaleria" value="" id="idGaleria">

                            </form>
                        </div>
                    </div>
                </div>
            </div><!--
            <div class="form-actions widgetMultipleImage">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button id="addGaleriaFotos" class="btn green-haze">Guardar</button>
                        <button id="cancelarGaleria" type="button" class="btn default">Cancelar</button>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <div id="respuesta"></div>

    @stop

    @section('script')
    <script type="text/javascript" src="{{ asset('js/archivos.js') }}" />

    @stop