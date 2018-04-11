<?php /* Smarty version Smarty-3.1.8, created on 2018-04-07 17:33:22
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\layout\bootstrap\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7322019855ab7ec09d2da87-31206307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a55283c3f945e5607ae8d0c9dc7572be5bdc8961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\layout\\bootstrap\\template.tpl',
      1 => 1523112968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7322019855ab7ec09d2da87-31206307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7ec09d641f1_86627574',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'widgets' => 0,
    'tp' => 0,
    '_contenido' => 0,
    'sr' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7ec09d641f1_86627574')) {function content_5ab7ec09d641f1_86627574($_smarty_tpl) {?><html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
miestilo.css" />

</head>
<body>
    <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top_default'])){?>
       <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top_default']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

       <?php } ?>
    <?php }?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <div class="col-lg-4">
                   <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
                       <?php  $_smarty_tpl->tpl_vars['sr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sr']->key => $_smarty_tpl->tpl_vars['sr']->value){
$_smarty_tpl->tpl_vars['sr']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['sr']->value;?>

                       <?php } ?>
                    <?php }?> 
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
    </script>
    
    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
    <?php } ?>
    <?php }?>
    
</body>
</html>



<?php }} ?>