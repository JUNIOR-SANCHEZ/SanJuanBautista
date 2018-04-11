<?php /* Smarty version Smarty-3.1.8, created on 2018-04-07 19:10:35
         compiled from "C:\xampp\htdocs\SanJuanBautista\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19895678555ab96548a3f8f4-62044915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0ee6bf8fcb9b614b6fcf4493c3517e3a30a2c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1523121034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19895678555ab96548a3f8f4-62044915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab96548ab54b2_26874067',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab96548ab54b2_26874067')) {function content_5ab96548ab54b2_26874067($_smarty_tpl) {?><style>
    .form-register {
  width: 95%;
  max-width: 500px;
  margin: auto;

  background-color: cornflowerblue;
  border-radius: 7px;
}

.form-titulo {
  background-color: darkblue;
  color: white;
  padding: 20px;
  text-align: center;
  font-weight: 100;
  font-size: 30px;
  border-top-left-radius: 7px;
  border-top-right-radius: 7px;
  border-bottom: 5px solid crimson;
  justify-content: space-between;
}

input {
  margin-bottom: 15px;
  padding: 15px;
  font-size: 16px;
  border-radius: 3px;
  border: 1px solid darkgray;
}

.registra-inputs {
  padding: 10px 30px;
  display: flex;
  flex-wrap: wrap;
}

.input-100 {
  width: 100%;
}

.btn-enviar {
  background-color: crimson;
  color: white;
  margin: auto;
  padding: 10px 40px;
  cursor: pointer;
}

.form-link {
  width: 100%;
  margin: 7px;
  font-size: 14px;
  text-align: center;
}

@media screen and (max-width:800px) {
  .form-register {
    margin-top: 70px;
  }
}
</style>


<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro" id="formRegister" class="form-register" enctype="multipart/form-data">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="name"  placeholder="Nombre"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="text" name="user"  placeholder="Usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['user'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="email" name="email"  placeholder="email"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" >
        <input class="input-100" type="password" name="password" id="password" placeholder="Contraseña" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="password" name="password2"  placeholder="Confirmar Contraseña"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['password2'])===null||$tmp==='' ? '' : $tmp);?>
" >
        <input class="input-100" type="file" name="image"/>
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login"> INGRESAR</a></p>
    </div>

</form><?php }} ?>