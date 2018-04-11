<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            {*<ul class="portfolio-categ filter">
                <li class="all active"><a href="#">All</a></li>
                <li class="web"><a href="#" title="">Web design</a></li>
                <li class="icon"><a href="#" title="">Icons</a></li>
                <li class="graphic"><a href="#" title="">Graphic design</a></li>
            </ul>*}
            {if $_acl->permiso("nuevo_publ")}
            <a href="{$_layoutParams.root}galeria/nuevo" class="btn btn-blue pull-right"><i class="glyphicon glyphicon-new-window"></i> INGRESAR GALERIA</a>
            {/if}
            <h2 class="text-center my-5 py-5">GALERIA</h2>
            <div class="clearfix"></div>
            <div class="row">
                <section id="projects">
                    <ul id="thumbs" class="portfolio">
                        {assign var=con value=0}
                        {foreach item=gl from=$galeria}
                            
                            <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-{$con}" data-type="web">
                            
                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{$gl.tema}" href="{$_layoutParams.root}public/img/galeria/thumb/thumb_{$gl.imagen}">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb font-icon-plus"></span>
                        </a>
                        <!-- Thumb Image and Description -->
                        <img src="{$_layoutParams.root}public/img/galeria/thumb/thumb_{$gl.imagen}" alt="{$gl.descripcion}">
                        
                        </li>
                        <!-- End Item Project -->
                        {$con=$con+1}
                        {/foreach}
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
    