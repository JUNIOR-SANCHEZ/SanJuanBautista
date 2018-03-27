<?php /* Smarty version Smarty-3.1.8, created on 2018-03-26 16:41:34
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18845524445ab9057b90ef89-07381820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0bd8ab19510a743baec76e4dd09785cf8281d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\error\\access.tpl',
      1 => 1522075293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18845524445ab9057b90ef89-07381820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab9057b948757_92923856',
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab9057b948757_92923856')) {function content_5ab9057b948757_92923856($_smarty_tpl) {?><br><br><br><br><br><br>

<center><h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al inicio</a> 
<span class="">--</span>
<a href="javascript:history.back(1)">Volver a la pagina anterior</a>

<?php if (!Session::get('autenticado')){?>
<a href=" <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" >Iniciar session</a>
<?php }?>
</center>
<?php }} ?>