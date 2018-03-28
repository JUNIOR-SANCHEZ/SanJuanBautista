{if isset($noticia) && !empty($noticia)}
<article>
    <div id="fb-root"></div>
    {foreach item=dt from=$noticia}
    <div class="post-image">
            <div class="post-heading">
                    <h3>
                        <a href="{$_layoutParams.root}blog/noticia/{Cifrado::encryption($dt.id)}">{$dt.nombre}</a>
                        {if $_acl->permiso("admin_access")}
                        <abbr title="Eliminar Noticia" class="initialism"><a href="{$_layoutParams.root}blog/eliminarNoticia/{Cifrado::encryption($dt.id)}" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i></a></abbr>
                        <abbr title="Editar Noticia" class="initialism"><a href="{$_layoutParams.root}blog/editar/{Cifrado::encryption($dt.id)}" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-edit"></i></a></abbr>
                        {/if}
                    </h3>
            </div>
                    {if !empty($dt.imagen)}<img style="width: 800px;height: 400px;" src="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$dt.imagen}" alt="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$dt.imagen}" />{/if}
    </div>
    <p>
             {$dt.cuerpo}
    </p>
    <div class="bottom-article">
            <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="#">{$dt.fecha|date_format}</a></li>
                    <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
            </ul>
            <a href="{$_layoutParams.root}blog/noticia/{Cifrado::encryption($dt.id)}" class="pull-right">Continuar leyendo<i class="icon-angle-right"></i></a>
    </div>
    {/foreach}
</article>
{if isset($paginacion)}
    <center>  {$paginacion} </center>
{/if}
{else}
    <div class="">
        <center><h3>NO HAY NOTICIAS QUE MOSTRAR</h3></center>
    </div>
{/if}