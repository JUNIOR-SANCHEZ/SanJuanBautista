<?php /* Smarty version Smarty-3.1.8, created on 2018-04-11 23:27:01
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\blog\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7945837245aba9da9471f54-60271153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78ba98d1b425154072d12feace3724c371568bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\blog\\edit.tpl',
      1 => 1522248208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7945837245aba9da9471f54-60271153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aba9da94b9ed2_47725539',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aba9da94b9ed2_47725539')) {function content_5aba9da94b9ed2_47725539($_smarty_tpl) {?><br><br><br>
<div class="container">
<div class="row">
    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/editar/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['noticia']->value['id']);?>
" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="guardar" value="1"/>
        <input type="hidden" name="nameImagen" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
" />
        
        <fieldset>
            <legend class="text-center header">EDITAR NOTICIA</legend>
            <div class="col-md-6 col-md-offset-1 ">
                <div class="form-group">
                    <span class="col-md-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-11">
                        <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
" placeholder="INGRESE EL TITULO DEL LA IMAGEN"/>
                    </div>
                </div>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-comments bigicon"></i></span>
                    <div class="col-md-11">
                        <textarea class="form-control"  name="cuerpo"  placeholder="INGRESE UNA DESCRIPCI&Oacute;N PARA LA IMAGEN" rows="9"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['cuerpo'];?>
</textarea>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group" >
                    <div class="col-md-11 col-md-offset-1" id="contenedorImg">
                        <center><img class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
" width="260" alt="No se encontro la ruta de la imagen" class="img-thumbnail"></center>
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
<?php }} ?>