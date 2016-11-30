var url = window.location.origin;
var token = $('meta[name="csrf_token"]').attr('content');

$(document).ready(function(){
    if(window.location.pathname == '/newGaleria'){
        $(".widgetMultipleImage").hide();
    }
});

$("#newGaleria").on('click',function(){
    window.location.href = url + '/newArchivo';
});

$("#input_sucursal_id").change(function(){
    var sucursal_id = $("#input_sucursal_id").val();
    $.ajax({
        url: url + '/getSeccionesSucursal',
        type: 'get',
        data:{
            'sucursal_id': sucursal_id
        },
        success: function(data){
            var selectSecciones = $("#input_seccion_id");
            selectSecciones.empty();
            var spanOption = $("#select2-chosen-2");
            spanOption.text('');
            var options = '';
            for(i = 0; i < data.length; i++){
                options = options + '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
            }
            selectSecciones.append(options);
            if(data.length == 0){
                spanOption.text('No hay secciones en la sucursal');
            }else{
                spanOption.text(data[0].nombre);
            }
        }
    })
});

$("#botonAgregarFoto").on('click', function(e){
    e.preventDefault();
    var modalGaleriaUp = new window.services.modal("", "Preparando entorno", "85vw", function(){

    });
    modalGaleriaUp.init();
    modalGaleriaUp.show();

    var tmpp = _.template($('#template-galeriaUpfoto').html());

    modalGaleriaUp.display(tmpp());

    $("#agregarImagenes").on('click', function(){
        if($("#path_image").val() != ''){
            $("#galeriaDeImagenes").prepend('<div class="col-md-3 itemGaleria">'
                +'<div style="background-color: #808080" class="actionFotoGaleria">'
                +'<i class="btn fa icon-close closeFoto"></i>'
                +'</div>'
                +'<img class="fotoGaleriaItem" src="'+window.location.origin+'/'+$("#path_image").val()+'"/>'
                +'<input type="hidden" class="pathImageGaleriaItem" value="'+$("#path_image").val()+'"/>'
                +'</div>');
            modalGaleriaUp.hide();

            $(".itemGaleria").mouseover(function(){
                $(this).children('.actionFotoGaleria').show();
            }).mouseout(function(){
                $(this).children('.actionFotoGaleria').hide();
            });

            $(".closeFoto").on('click',function(){
                $(this).parent().parent().remove();
            });
        }else{
            window.notify.error('Imagen', 'Por favor ingrese una imagen.');
        }
    });

    $("#cancelarImagenes").live('click', function(){
        modalGaleriaUp.hide();
    });

    $('#my-form').submit( function( e ) {
        e.preventDefault();
        extensiones = [".gif", ".jpg", ".png"];
        var image = $("#input_image").val();
        extension = (image.substring(image.lastIndexOf("."))).toLowerCase();
        var band = false;

        for(var i = 0; i < extensiones.length; i++){
            if(extensiones[i] == extension){
                band = true;
            }
        }
        if(band){
            $.ajax({
                url: url + '/upLoadImageGaleria',
                type: 'post',
                data: new FormData( this ),
                processData: false,
                contentType: false
            }).done(function(data){
                $("#path_image").val(data);
                $("#image_old").remove();
                $("#new_image").attr('src',window.location.origin+'/'+data);
                window.notify.success('Imagen', 'La imagen se cargo correctamente.');
            });
        }else{
            window.notify.error('Imagen', 'Por favor ingrese una imagen con un formato valido.');
            $("#input_image").val('');
        }
    });

});

$("#galeriaImage").live('click',function(e){
    e.preventDefault();
    var modalGaleria = new window.services.modal("", "Preparando entorno", "85vw", function(){
    });
    modalGaleria.init();
    modalGaleria.show();

    var tmpp = _.template($('#template-galeria').html());

    modalGaleria.display(tmpp());
    $('.vd-modal-container').css('margin-top', '9vh');
    $.ajax({
        url: url + '/imagesPath',
        type: 'get',
        success: function(data){
            for(var w = 0; w < data.length; w++){
                $("#galleryContent").append('<div class="col-md-3">' +
                    '<a class="imageGallery">' +
                    '<img class="imageGaleriaItem" style="width: 100%; height: 150px; margin-bottom: 15px" src="'+window.location.origin+'/'+data[w]+'" alt=""/>' +
                    '</a>' +
                    '<div class="optionsGallery">' +
                    '<div class="row iconsGallery" id="'+data[w]+'">' +
                    '<div class="col-md-6"><a class="btn btn-icon-only btn-circle yellow"><i class="fa fa-check"></i></a>' +
                    '</div>' +
                    '<div class="col-md-6"><a class="btn btn-icon-only btn-circle yellow"><i class="fa fa-search"></i></a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
            }
            $(".optionsGallery").hide();
            $(".col-md-3").mouseover(function(){
                $(this).children(".optionsGallery").show();
            }).mouseout(function(){
                $(this).children(".optionsGallery").hide();
            });

            $(".optionsGallery .fa-search").on('click',function(){
                var modalGaleriaItem = new window.services.modal("", "Preparando entorno", "85vw", function(){

                });
                modalGaleriaItem.init();
                modalGaleriaItem.show();
                var tmpp = _.template($('#template-galeria-item').html());

                modalGaleriaItem.display(tmpp());
                $('.vd-modal-container').css('margin-top', '9vh');
                $("#pathImageModal").attr('src', window.location.origin+'/'+$(this).parents('.iconsGallery').attr('id'));
            });

            $(".optionsGallery .fa-check").on('click',function(){
                $.ajax({
                    url: url + '/upLoadImageGaleriaApi',
                    type: 'post',
                    data: {
                        'image': $(this).parents('.iconsGallery').attr('id'),
                        '_token': token
                    },
                    success: function(data){
                        $("#input_imageUp").val(data);
                        $("#path_image").val(data);
                        $("#image_old").attr('src', url+'/'+data);
                        $("#new_image").attr('src', url+'/'+data);
                        modalGaleria.hide();
                    }
                });
            });
        }
    });
});

$("#addGaleria").on('click', function(){
    token = $('meta[name="csrf_token"]').attr('content');

    titulo = $("#input_titulo").val();
    seccion = $("#input_seccion_id").val();
    $(this).attr('disabled',true);

    fotosGaleria = [];

    for(var o = 0; o < $('.fotoGaleriaItem').length; o++){
        fotosGaleria.push($($('.fotoGaleriaItem')[o]).next().val());
    }
    if(titulo != ''){
        $.ajax({
            url: url + '/addGaleria',
            type: 'post',
            data:{
                'user': $("#user").attr('name'),
                'titulo': titulo,
                'seccion': seccion,
                '_token': token
            },
            success: function(data){
                console.log(data);
                window.notify.success('Galeria', 'La galeria se creo correctamente, ya puede cargar las imagenes');
                $("#input_titulo").attr('disabled', true);
                $("#input_seccion_id").attr('disabled', true);
                $("#input_sucursal_id").attr('disabled', true);
                $("#addGaleria").attr('disabled', true);
                $(".widgetMultipleImage").show();
                $("#idGaleria").val(data.id);
            }
        });

    }else{
        window.notify.error('Galeria', 'El titulo de la galeria se encuentra vacio');
    }
    $(this).attr('disabled',false);
    return false;
});

$('.edit_galeria').on('click', function(e){
    var idGaleria = e.currentTarget.parentNode.parentNode.childNodes[1].id;
    window.location.href = url + '/galeriaEdit/'+ idGaleria;
});

$('#editGaleria').on('click', function(e){
    token = $('meta[name="csrf_token"]').attr('content');
    $(this).attr('disabled',true);
    titulo = $("#input_titulo").val();
    seccion = $("#input_seccion_id").val();

    if(titulo != ''){
        $.ajax({
            url: url + '/editGaleria',
            type: 'post',
            data:{
                'id': $("#input_id_galeria").val(),
                'user': $("#user").attr('name'),
                'titulo': titulo,
                'seccion': seccion,
                '_token': token
            },
            success: function(data){
                window.notify.success('Galeria', 'La galeria se modifico correctamente');
                $("#input_titulo").attr('disabled', true);
                $("#input_seccion_id").attr('disabled', true);
                $("#input_sucursal_id").attr('disabled', true);
                $("#addGaleria").attr('disabled', true);
            }
        });

    }else{
        window.notify.error('Galeria', 'El titulo de la galeria se encuentra vacio');
    }
    $(this).attr('disabled',true);
    return false;
});

function changeSucursal(){
    var sucursal_id = $("#input_sucursal_id").val();
    $.ajax({
        url: url + '/getSeccionesSucursal',
        type: 'get',
        data:{
            'sucursal_id': sucursal_id
        },
        success: function(data){
            var selectSecciones = $("#input_seccion_id");
            selectSecciones.empty()
            var spanOption = $("#select2-chosen-2");
            spanOption.text('');
            var options = '';
            for(i = 0; i < data.length; i++){
                options = options + '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
            }
            selectSecciones.append(options);
            if(data.length == 0){
                spanOption.text('No hay secciones en la sucursal');
            }else{
                spanOption.text(data[0].nombre);
            }
        }
    })
}
$(".itemGaleria").mouseover(function(){
    $(this).children('.actionFotoGaleria').show();
}).mouseout(function(){
    $(this).children('.actionFotoGaleria').hide();
});

$(".closeFoto").on('click',function(){
    var idFoto = $(this).parent().next().attr('data-class');
    $.ajax({
        url: url + '/deleteFoto',
        type: 'get',
        data:{
            'idFoto': idFoto
        },
        success: function(data){
            console.log(data)
        }
    });
    $(this).parent().parent().remove();
});

$("#pruebaMultiple").change(function() {
    var names = [];
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
        names.push($(this).get(0).files[i].name);
        $("#formPrueba").append('<input name="files'+i+'" type="file" value="'+$(this).get(0).files[i].name+'"/>');
    }
    console.log(names);
});

$(".dz-image-preview").mouseover(function(){
    $(this).append('<div class="removeImageGaleria"></div>')
});


$(".eliminar_galeria").click(function(e) {
    var idGaleria = e.currentTarget.parentNode.parentNode.childNodes[1].id;
    var item = $(this);
    $.ajax({
        url: url+'/deleteGaleria',
        type: 'post',
        data:{
            id: idGaleria,
            '_token': token
        },
        success: function(data) {
            $(item).parent().parent().remove();
            window.notify.success('Galeria', 'La galeria se elimino correctamente');

        }
    })
});