<?php /* Smarty version Smarty-3.1.8, created on 2018-04-11 20:43:32
         compiled from "C:\xampp\htdocs\SanJuanBautista\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10694420615ab7ec09e5bbb9-14267182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1637ed21d01c4ca53329b8dad1036b00d32cb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1523472212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10694420615ab7ec09e5bbb9-14267182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7ec09e64731_50373484',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuarios' => 0,
    'us' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7ec09e64731_50373484')) {function content_5ab7ec09e64731_50373484($_smarty_tpl) {?><div class="row">
    <div class="col-md-4">
        <h2>Usuarios</h2>
    </div>
    <div class=" col-md-8" >
        <form class="navbar-form navbar-right"  action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios" method="POST" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar por usuario" name="share" id="share">
            </div>
            <button type="submit" class="btn btn-default">BUSCAR</button>
        </form>
    </div>
    
</div>


<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['us'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['us']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['us']->key => $_smarty_tpl->tpl_vars['us']->value){
$_smarty_tpl->tpl_vars['us']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['usuario'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['role'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
">
                   Permisos
                </a>
            </td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['us']->value['role']!="Administrador"){?>  <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/eliminarUsuario/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['us']->value['id']);?>
" >Eliminar</a><?php }?>
            </td>
        </tr>
            
        <?php } ?>
    </table>
<?php }?><?php }} ?>