<?php /* Smarty version Smarty-3.1.8, created on 2018-04-07 17:32:53
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\galeria\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10390965995ab7d0aff0f784-91510972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19bca45ef70cf5dc484bbee83fd7166ac3f8b517' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\galeria\\index.tpl',
      1 => 1523115173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10390965995ab7d0aff0f784-91510972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7d0aff34da7_28716791',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'galeria' => 0,
    'con' => 0,
    'gl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7d0aff34da7_28716791')) {function content_5ab7d0aff34da7_28716791($_smarty_tpl) {?><br/><br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("nuevo_publ")){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
galeria/nuevo" class="btn btn-blue pull-right"><i class="glyphicon glyphicon-new-window"></i> INGRESAR GALERIA</a>
            <?php }?>
            <h2 class="text-center my-5 py-5">GALERIA</h2>
            <div class="clearfix"></div>
            <div class="row">
                <section id="projects">
                    <ul id="thumbs" class="portfolio">
                        <?php $_smarty_tpl->tpl_vars['con'] = new Smarty_variable(0, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['gl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gl']->key => $_smarty_tpl->tpl_vars['gl']->value){
$_smarty_tpl->tpl_vars['gl']->_loop = true;
?>
                            
                            <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-<?php echo $_smarty_tpl->tpl_vars['con']->value;?>
" data-type="web">
                            
                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $_smarty_tpl->tpl_vars['gl']->value['tema'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/galeria/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['gl']->value['imagen'];?>
">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb font-icon-plus"></span>
                        </a>
                        <!-- Thumb Image and Description -->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/galeria/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['gl']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gl']->value['descripcion'];?>
">
                        
                        </li>
                        <!-- End Item Project -->
                        <?php $_smarty_tpl->tpl_vars['con'] = new Smarty_variable($_smarty_tpl->tpl_vars['con']->value+1, null, 0);?>
                        <?php } ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
    <?php }} ?>