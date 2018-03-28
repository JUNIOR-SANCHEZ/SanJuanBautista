<?php /* Smarty version Smarty-3.1.8, created on 2018-03-28 19:29:42
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14500574265abbd1066a37c4-35718366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e754e15d2cbb63746894f66916f856ddb477679c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\acl\\index.tpl',
      1 => 1521994926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14500574265abbd1066a37c4-35718366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5abbd106727311_43970058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abbd106727311_43970058')) {function content_5abbd106727311_43970058($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>