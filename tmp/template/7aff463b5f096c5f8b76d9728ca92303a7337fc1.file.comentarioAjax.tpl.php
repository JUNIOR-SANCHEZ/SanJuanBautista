<?php /* Smarty version Smarty-3.1.8, created on 2018-04-11 23:38:22
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\blog\vistaAjax\comentarioAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5213253885ab99272c609d6-99445372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aff463b5f096c5f8b76d9728ca92303a7337fc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\blog\\vistaAjax\\comentarioAjax.tpl',
      1 => 1523482579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5213253885ab99272c609d6-99445372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab99272cef8a8_45506835',
  'variables' => 
  array (
    'comentarios' => 0,
    'root' => 0,
    'cmt' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab99272cef8a8_45506835')) {function content_5ab99272cef8a8_45506835($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['root'] = new Smarty_variable("http://localhost/SanjuanBautista/", null, 0);?>

<?php  $_smarty_tpl->tpl_vars['cmt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->key => $_smarty_tpl->tpl_vars['cmt']->value){
$_smarty_tpl->tpl_vars['cmt']->_loop = true;
?>
<li class="media">
  <div class="media-left">
    <a href="#">
        <img class="media-object img-circle" width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/user/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['cmt']->value['imagen'];?>
" alt="...">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading">
          <?php echo $_smarty_tpl->tpl_vars['cmt']->value['nick'];?>
 
          <?php if (Session::get("id")==$_smarty_tpl->tpl_vars['cmt']->value['usuario']||$_smarty_tpl->tpl_vars['_acl']->value->permiso("admin_access")){?>
              <abbr title="Eliminar Comentario" class="initialism"><a class="eliminarComentario btn btn-blue btn-small pull-right" attr-noticiaId="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['cmt']->value['noticia']);?>
" attr-comentarioId="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['cmt']->value['id']);?>
">
                  <i class="glyphicon glyphicon-trash"></i>
              </a></abbr>
              <abbr title="Editar Comentario" class="initialism"><a class="editarComentario btn btn-blue btn-small pull-right" attr-comentarioId="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['cmt']->value['id']);?>
"  attr-coment="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['comentario'];?>
">
                  <i class="glyphicon glyphicon-edit"></i>
              </a></abbr>
          <?php }?>
      </h4>
    <?php echo $_smarty_tpl->tpl_vars['cmt']->value['comentario'];?>
 
  </div>
</li>
<?php } ?><?php }} ?>