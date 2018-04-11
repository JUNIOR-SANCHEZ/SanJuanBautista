{assign var=root value="http://localhost/SanjuanBautista/"}

{foreach item=cmt from=$comentarios}
<li class="media">
  <div class="media-left">
    <a href="#">
        <img class="media-object img-circle" width="60" height="60" src="{$root}public/img/user/thumb/thumb_{$cmt.imagen}" alt="...">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading">
          {$cmt.nick} 
          {if Session::get("id") == $cmt.usuario || $_acl->permiso("admin_access")}
              <abbr title="Eliminar Comentario" class="initialism"><a class="eliminarComentario btn btn-blue btn-small pull-right" attr-noticiaId="{Cifrado::encryption($cmt.noticia)}" attr-comentarioId="{Cifrado::encryption($cmt.id)}">
                  <i class="glyphicon glyphicon-trash"></i>
              </a></abbr>
              <abbr title="Editar Comentario" class="initialism"><a class="editarComentario btn btn-blue btn-small pull-right" attr-comentarioId="{Cifrado::encryption($cmt.id)}"  attr-coment="{$cmt.comentario}">
                  <i class="glyphicon glyphicon-edit"></i>
              </a></abbr>
          {/if}
      </h4>
    {$cmt.comentario} 
  </div>
</li>
{/foreach}