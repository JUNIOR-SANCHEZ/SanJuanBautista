<?php /* Smarty version Smarty-3.1.8, created on 2018-03-25 18:22:57
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\blog\vistaAjax\vista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:575480425ab7cce116f932-24305989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61090e11e285c37f730e8c606ee22ba7c2198202' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\blog\\vistaAjax\\vista.tpl',
      1 => 1521994926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575480425ab7cce116f932-24305989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticia' => 0,
    'dt' => 0,
    'root' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7cce11bdbd5_73045039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7cce11bdbd5_73045039')) {function content_5ab7cce11bdbd5_73045039($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\SanJuanBautista\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars['root'] = new Smarty_variable("http://localhost/sanjuanbautista/", null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['noticia']->value)&&!empty($_smarty_tpl->tpl_vars['noticia']->value)){?>
<article>
    <div id="fb-root"></div>
    <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value){
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
    <div class="post-image">
            <div class="post-heading">
                    <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['dt']->value['nombre'];?>
</a></h3>
            </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['dt']->value['imagen'])){?><img style="width: 800px;height: 400px;" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" /><?php }?>
    </div>
    <p>
             <?php echo $_smarty_tpl->tpl_vars['dt']->value['cuerpo'];?>

    </p>
    <div class="bottom-article">
            <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="#"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dt']->value['fecha']);?>
</a></li>
                    <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
            </ul>
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
blog/noticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['dt']->value['id']);?>
" class="pull-right">Continuar leyendo<i class="icon-angle-right"></i></a>
    </div>
    <?php } ?>
</article>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?>
    <center>  <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 </center>
<?php }?>
<?php }else{ ?>
    <div class="">
        <center><h3>NO HAY NOTICIAS QUE MOSTRAR</h3></center>
    </div>
<?php }?><?php }} ?>