<?php /* Smarty version Smarty-3.1.8, created on 2018-03-27 17:38:24
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\galeria\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7593100365aba62650355d5-74860931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7720d7148627053ab02a308e502bf056b1da73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\galeria\\edit.tpl',
      1 => 1522165026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7593100365aba62650355d5-74860931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aba626507e130_05740532',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'galeriaId' => 0,
    'galeria' => 0,
    '_acl' => 0,
    'gl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aba626507e130_05740532')) {function content_5aba626507e130_05740532($_smarty_tpl) {?><br><br><br>
<div class="container">
    <div class="row">
        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
galeria/edit/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['galeriaId']->value['id']);?>
" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="guardar" value="1"/>
            <input type="hidden" name="nameImagen" value="<?php echo $_smarty_tpl->tpl_vars['galeriaId']->value['imagen'];?>
"
            <fieldset>
                <legend class="text-center header">SUBIR IMAGEN A GALERIA</legend>
               
                <div class="col-md-6 col-md-offset-1 ">
                    <div class="form-group">
                        <span class="col-md-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                        <div class="col-md-11">
                            <input type="text" class="form-control" name="titulo"value="<?php echo $_smarty_tpl->tpl_vars['galeriaId']->value['tema'];?>
" placeholder="INGRESE EL TITULO DEL LA IMAGEN"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="col-md-1  text-center"><i class="fa fa-comments bigicon"></i></span>
                        <div class="col-md-11">
                            <textarea class="form-control"  name="message" placeholder="INGRESE UNA DESCRIPCI&Oacute;N PARA LA IMAGEN" rows="9"><?php echo $_smarty_tpl->tpl_vars['galeriaId']->value['descripcion'];?>
</textarea>
                        </div>
                    </div>
                            
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <div class="col-md-11 col-md-offset-1" id="contenedorImg">
                            <center><img class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/galeria/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['galeriaId']->value['imagen'];?>
" width="255" alt="No se encontro la ruta de la imagen" class="img-thumbnail"></center>
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
                        <?php  $_smarty_tpl->tpl_vars['gl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gl']->key => $_smarty_tpl->tpl_vars['gl']->value){
$_smarty_tpl->tpl_vars['gl']->_loop = true;
?>
                         <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("admin_access")||Session::get("id")==$_smarty_tpl->tpl_vars['gl']->value['usuario']){?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['gl']->value['tema'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['gl']->value['descripcion'];?>
</td>
                            <td>
                                <img style="width: 100px;height: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/galeria/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['gl']->value['imagen'];?>
"
                            </td>
                            <td>
                                <a class="btn btn-blue" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
galeria/eliminarGaleria/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['gl']->value['id']);?>
"><i class="glyphicon glyphicon-trash"></i></a>
                                <a class="btn btn-blue" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
galeria/edit/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['gl']->value['id']);?>
"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>                   
    
</div>
<?php }} ?>