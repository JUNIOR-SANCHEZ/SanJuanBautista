<br><br><br>
<div class="container">
    <div class="row">
        <form method="POST" action="{$_layoutParams.root}galeria/edit/{Cifrado::encryption($galeriaId.id)}" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="guardar" value="1"/>
            <input type="hidden" name="nameImagen" value="{$galeriaId.imagen}"
            <fieldset>
                <legend class="text-center header">SUBIR IMAGEN A GALERIA</legend>
               
                <div class="col-md-6 col-md-offset-1 ">
                    <div class="form-group">
                        <span class="col-md-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                        <div class="col-md-11">
                            <input type="text" class="form-control" name="titulo"value="{$galeriaId.tema}" placeholder="INGRESE EL TITULO DEL LA IMAGEN"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="col-md-1  text-center"><i class="fa fa-comments bigicon"></i></span>
                        <div class="col-md-11">
                            <textarea class="form-control"  name="message" placeholder="INGRESE UNA DESCRIPCI&Oacute;N PARA LA IMAGEN" rows="9">{$galeriaId.descripcion}</textarea>
                        </div>
                    </div>
                            
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <div class="col-md-11 col-md-offset-1" id="contenedorImg">
                            <center><img class="text-center" src="{$_layoutParams.root}public/img/galeria/thumb/thumb_{$galeriaId.imagen}" width="255" alt="No se encontro la ruta de la imagen" class="img-thumbnail"></center>
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
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <table class="table table-bordered">
                    <thead>
                        <th>titulo</th>
                        <th>Descripci&oacute;n</th>
                        <th>Imagen</th>
                        <th></th>
                    </thead>
                    <tbody>
                        {foreach item=gl from=$galeria}
                         {if $_acl->permiso("admin_access") || Session::get("id") == $gl.usuario}
                        <tr>
                            <td>{$gl.tema}</td>
                            <td>{$gl.descripcion}</td>
                            <td>
                                <img style="width: 100px;height: 100px;" src="{$_layoutParams.root}public/img/galeria/thumb/thumb_{$gl.imagen}"
                            </td>
                            <td>
                                <a class="btn btn-blue" href="{$_layoutParams.root}galeria/eliminarGaleria/{Cifrado::encryption($gl.id)}"><i class="glyphicon glyphicon-trash"></i></a>
                                <a class="btn btn-blue" href="{$_layoutParams.root}galeria/edit/{Cifrado::encryption($gl.id)}"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        {/if}
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>                   
    
</div>
