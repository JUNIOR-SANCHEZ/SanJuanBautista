<?php /* Smarty version Smarty-3.1.8, created on 2018-03-26 02:16:45
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13759491825ab7ccd8be1fb0-14698482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b12a5b576b18aeb314a06464c8c4da95d60a37f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\layout\\default\\template.tpl',
      1 => 1522023403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13759491825ab7ccd8be1fb0-14698482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7ccd8c5ebf8_51385971',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'widgets' => 0,
    'tp' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7ccd8c5ebf8_51385971')) {function content_5ab7ccd8c5ebf8_51385971($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
 </title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
mdb.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
miestilo.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
theme/fancybox/jquery.fancybox.css" rel="stylesheet">

        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
theme/flexslider.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
theme/skins/default.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
theme/style.css" />
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
iconos/css/fontello.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
ihover.css">
        <!--------------------------------------------------------------------------------->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
grupo_trabajo.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/alertify.js-0.3.11/themes/alertify.core.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/alertify.js-0.3.11/themes/alertify.default.css">
        
        
    </head>

    <body>
        <header>
            <div class="contenedor-menu">
                <input type="checkbox" id="icono-barra">
                <label class="icon-th-list" for="icono-barra"></label>
                <h2>MENU</h2>
                <p>
                    <font color="white"> ¿Necesitas informacion? &nbsp<span class="icon-phone"></span>&nbsp(+593) 999187456 &nbsp<span class="icon-mail"></span>fundacion_bautista@gmail.com</font>
                </p>
               <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
               <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

               <?php } ?>
               
               
               <?php }?>
            </div>
        </header>

        <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?><div class="alert alert-success text-center"> <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
 </div> <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?><div class="alert alert-success text-center"> <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
 </div> <?php }?>
        
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        

<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.easing.1.3.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.fancybox.pack.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.fancybox-media.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
google-code-prettify/prettify.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
portfolio/jquery.quicksand.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
portfolio/setting.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.flexslider.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
animate.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
custom.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
miscript.js"></script>
        
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



        
        <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['footer'])){?>
        
         <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

         <?php } ?>
        
        <?php }?>
        

</body>
</html>
 <?php }} ?>