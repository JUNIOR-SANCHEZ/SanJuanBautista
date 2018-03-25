$(document).on('ready', function(){
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
    
    $("#buscarnoticia").keyup(function(){
        paginacion();
    });
    
        
// 
    $("#addComentario").click(function(){
        var url = _root_+'blog/addComentario';
        $.ajax({
            type:"POST",
            url: url,
            data: $("#formComentario").serialize(),
            success: function($data){
                $("#textareaComentario").val('');
                $("#comentarioTexto").html('');
                $("#comentarioTexto").html($data);
            }
        });
        
        return false;
        
    });
    
    $(".eliminarComentario").live('click',function(){
        var url = _root_+'blog/eliminarComentario/';
        var noticiaId = $(this).attr("attr-noticiaId");
        var comentarioId = $(this).attr("attr-comentarioId");
        
        $.ajax({
            type:"POST",
            url: url,
            data: { noticiaId: noticiaId, comentarioId: comentarioId },
            success: function($data){
                $("#textareaComentario").val('');
                $("#comentarioTexto").html('');
                $("#comentarioTexto").html($data);
            }
        });
    });
    
    $(".editarComentario").live('click',function(){
        
    });
    
});