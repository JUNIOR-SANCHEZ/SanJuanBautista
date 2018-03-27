<br><br><br>
<div class="container">
<div class="row">
    <form method="POST" action="{$_layoutParams.root}blog/editar/{Cifrado::encryption($noticia.id)}" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="guardar" value="1"/>
        <input type="hidden" name="nameImagen" value="{$noticia.imagen}" />
        
        <fieldset>
            <legend class="text-center header">EDITAR NOTICIA</legend>
            <div class="col-md-6 col-md-offset-1 ">
                <div class="form-group">
                    <span class="col-md-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-11">
                        <input type="text" class="form-control" name="name" value="{$noticia.nombre}" placeholder="INGRESE EL TITULO DEL LA IMAGEN"/>
                    </div>
                </div>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-comments bigicon"></i></span>
                    <div class="col-md-11">
                        <textarea class="form-control"  name="cuerpo"  placeholder="INGRESE UNA DESCRIPCI&Oacute;N PARA LA IMAGEN" rows="9">{$noticia.cuerpo}</textarea>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group" >
                    <div class="col-md-11 col-md-offset-1" id="contenedorImg">
                        <center><img class="text-center" src="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$noticia.imagen}" width="260" alt="No se encontro la ruta de la imagen" class="img-thumbnail"></center>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-11 col-md-offset-1">
                        <center><label id="imagen" class="btn btn-primary btn-lg btn-block" for="my-file-selector">
                                <input id="my-file-selector" name="imagen"  type="file" style="display:none;">
                             IMAGEN
                        </label></center>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-6 col-md-offset-1">
                <div class="form-group">
                    <label class="col-md-1"></label>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-blue btn-lg" value="GUARDAR"/>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>
