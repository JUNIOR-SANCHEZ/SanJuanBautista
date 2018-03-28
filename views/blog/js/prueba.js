$(document).on('ready', function(){
    var comentarioId = 0;
    var bandera = "";
    var ruta = "";
    var message = "";
    var noticiaId = 0;
    $(".pagina").live('click', function(){
        paginacion($(this).attr("pagina"));
        
    });
    
    var paginacion = function(pagina){
        var pagina = 'pagina=' + pagina;
        var noticia = "&noticia="+$("#buscarnoticia").val();
        console.log(noticia);
        $.post(_root_ + 'blog/paginacionGetNoticiaAjax', pagina + noticia, function(data){
            $("#lista_registros").html('');
            $("#lista_registros").html(data);
        });
        return false;
    };
    
    var comentarios = function(){
        $.ajax({
            type:"POST",
            url: ruta,
            data: {guardar:1,message:message,noticiaId:noticiaId,comentarioId:comentarioId},
            success: function($data){
                $("#textareaComentario").val('');
                $("#comentarioTexto").html('');
                $("#comentarioTexto").html($data);
               ruta="";
               comentarioId=0;
               bandera = "";
            }
            
        });
        
    };
    
    $("#buscarnoticia").keyup(function(){
        paginacion();
        return false;
    });
    

    $("#addComentario").click(function(){
        switch (bandera){
            case "edit":
                ruta = _root_+'blog/editComentario';
                break;
            default :
                ruta = _root_+'blog/addComentario';
                break;
        }
        message = $("#textareaComentario").val();
        noticiaId = $("#textareaComentario").attr("attr-noticiaId") ;
        comentarios();
        return false;
    });
    
    $(".eliminarComentario").live('click',function(){
        ruta = _root_+'blog/eliminarComentario/';
        noticiaId = $(this).attr("attr-noticiaId");
        comentarioId = $(this).attr("attr-comentarioId");
        comentarios();
    });
    
    $(".editarComentario").live("click",function(){
        var comentario = $(this).attr("attr-coment");
        comentarioId = $(this).attr("attr-comentarioId");
        $("#textareaComentario").val(comentario);
        bandera = "edit";
       
    });
    
});