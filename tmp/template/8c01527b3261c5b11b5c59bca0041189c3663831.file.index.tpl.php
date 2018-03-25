<?php /* Smarty version Smarty-3.1.8, created on 2018-03-25 18:15:15
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\galeria\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6584594855ab6f43d603550-42849680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c01527b3261c5b11b5c59bca0041189c3663831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\galeria\\index.tpl',
      1 => 1521994515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6584594855ab6f43d603550-42849680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab6f43d603fd6_07518411',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab6f43d603fd6_07518411')) {function content_5ab6f43d603fd6_07518411($_smarty_tpl) {?><br/><br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="portfolio-categ filter">
                <li class="all active"><a href="#">All</a></li>
                <li class="web"><a href="#" title="">Web design</a></li>
                <li class="icon"><a href="#" title="">Icons</a></li>
                <li class="graphic"><a href="#" title="">Graphic design</a></li>
            </ul>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
galeria/nuevo" class="btn btn-blue pull-right"><i class="glyphicon glyphicon-new-window"></i> Insertar Galeria</a>
            <div class="clearfix"></div>
            <div class="row">
                <section id="projects">
                    <ul id="thumbs" class="portfolio">
                        
                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/1.jpg">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb font-icon-plus"></span>
                        </a>
                        <!-- Thumb Image and Description -->
                        <img src="img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                        </li>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="img/works/2.jpg">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb font-icon-plus"></span>
                        </a>
                        <!-- Thumb Image and Description -->
                        <img src="img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                        </li>
                        <!-- End Item Project -->
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
    <?php }} ?>