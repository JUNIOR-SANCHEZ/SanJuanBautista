<?php /* Smarty version Smarty-3.1.8, created on 2018-03-28 19:31:40
         compiled from "C:\xampp\htdocs\SanJuanBautista\modules\usuarios\views\registro\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8068110465ab7d0b30d0e57-90856059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b73bd8fb7f5574aad5e91a7f25e75e6f15a9b2ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\modules\\usuarios\\views\\registro\\perfil.tpl',
      1 => 1522248207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8068110465ab7d0b30d0e57-90856059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7d0b310ff11_44036800',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7d0b310ff11_44036800')) {function content_5ab7d0b310ff11_44036800($_smarty_tpl) {?><br><br>
<div class="container">
    <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro/perfil" enctype="multipart/form-data">
        <input type="hidden" name="guardar" value="1"/>
        <fieldset>
            <center><legend>DATOS DEL USUARIO</legend></center>
            <br>
        <div class="row">
            <div class="col-md-8">

                    <div class="form-group">
                        <label for="name" class="col-md-4">Nombres y Apellidos</label>
                        <div class="col-md-8">
                            <input type="text" id="name" name="txt_nombre" class="form-control" placeholder="Cu&aacute;l es tu nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user" class="col-md-4">Usuario</label>
                        <div class="col-md-8">
                            <input type="text" id="user" name="txt_usuario" class="form-control" placeholder="Cu&aacute;l es tu usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" id="email" name="txt_correo" class="form-control" placeholder="Cu&aacute;l es tu email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"/>
                         </div>
                    </div>   
                    <div class="form-group">
                        <label for="phone" class="col-md-4">Telefono</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="&iquest;Cu&aacute;l es tu telefono &quest;" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['phone'];?>
"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-md-4">Sexo</label>
                        <div class="col-md-8">
                            <select id="sex" class="form-control">
                                <option selected>Seleccionar</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="hombre"){?> selected <?php }?>>Masculino</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="mujer"){?> selected <?php }?>>Femenino</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="col-md-4">Estado Civil</label>
                        <div class="col-md-8">
                            <select id="estado" class="form-control">
                                <option>Seleccionar</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="soltero"){?> selected <?php }?>>Soltero</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="casado"){?> selected <?php }?> >Cassado</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="divorsiado"){?> selected <?php }?>>Divorsiado</option>
                                <option >otros</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion" class="col-md-4">Ocupaci&oacute;n</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" name="ocupacion" class="form-control" placeholder="En que trabajas" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['ocupacion'];?>
"/>
                         </div>
                    </div>

            </div>
            <div class="col-md-4">
                <center>
                    <div class="form-group" >
                        <div class="col-md-12" id="contenedorImg">
                            <img class="text-center" style="width:100%;height:280px;" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/user/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
" alt="nose encuentra la imagen"/>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="btn btn-primary btn-lg btn-block" for="my-file-selector">
                        <input id="my-file-selector" name="imagen" type="file" style="display:none;">
                        <input type="hidden" name="rutaImagen" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
"/>
                         IMAGEN
                    </label>
                </div>
                </center>
            </div>
        </div>
         <div class="row">
             <div class="col-md-4 col-md-offset-8">
                 <input type="submit" class="btn btn-orange pull-right" value="Guardar Cambios">
             </div>
         </div>
         </fieldset>
     </form>
</div><?php }} ?>