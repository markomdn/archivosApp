@extends('layout')

@section('content')
<h3 class="page-title">
    Archivos
</h3>
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            Listado
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button id="newGaleria" class="btn green">
                            Agregar <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Contenido
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($archivos as $archivo)
            <tr>
                <td id="{{ $archivo->id }}">
                    {{ $archivo->titulo }}
                </td>
                <td>
                    {{ $archivo->contenido }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('') }}js/archivos.js" />
@endsection