<?php /* Smarty version Smarty-3.1.8, created on 2018-03-25 18:22:48
         compiled from "C:\xampp\htdocs\SanJuanBautista\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10857281655ab7ccd8dccc67-36819911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d9e1bbb1995f0e35c9c13204b8a846c88122d0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuanBautista\\views\\index\\index.tpl',
      1 => 1521994926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10857281655ab7ccd8dccc67-36819911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab7ccd8dd3239_28625172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7ccd8dd3239_28625172')) {function content_5ab7ccd8dd3239_28625172($_smarty_tpl) {?>
<div class="container-portada">
    <div class="container-details">
        <div class="details">
            <img class="animated flip infinite" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logo2.png" alt="">
            <br>

        </div>
        <div class="details">
            <br>
            <img class="animated slideInLeft" id="img2" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
texto1.png" alt="">
        </div>


    </div>
</div>

<div class="container-iconos">
    <a href="#">
        <div class="row-icon icon1">
            <h4>Facebook</h4>
            <label class="icon-facebook label1"></label>
        </div>
    </a>
    <a href="#">
        <div class="row-icon icon2">
            <h4>Google+</h4>
            <label class="icon-gplus label2"></label>
        </div>
    </a>
    <a href="#">
        <div class="row-icon icon3">
            <h4>Instagram</h4>
            <label class="icon-instagram label3"></label>
        </div>
    </a>
    <a href="#">
        <div class="row-icon icon4">
            <h4>Twitter</h4>
            <label class="icon-twitter label4"></label>
        </div>
    </a>
    <h2 class="icon-left-circled"></h2>
</div>

<main>
    <div class="contenedor4">
        <div class="contenedor4-item">
            <h4>¿QUIENES SOMOS?</h4>
            <p>La Fundación de Desarrollo Social “SAN JUAN BAUTISTA” es una organización social sin fines de lucro cuyo objetivo principal es, ejecutar proyectos integrales de desarrollo social en beneficio de los sectores más vulnerables y de manera especial de los Grupos de Atención Prioritaria, garantizando el mejoramiento de los niveles de vida de la sociedad y el pleno goce de sus derechos fundamentales.</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
banner.jpg" alt="">
        </div>
    </div>
    <div class="contenedor2">
        <div class="contenedor2-detalles">
            <div class="contenedor2-items">
                <center>
                    <div class="ih-item circle colored effect2 left_to_right">
                        <a href="#">
                            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
huella.png" alt="img"></div>
                            <div class="info">
                                <h3>Marca la diferencia</h3>
                            </div>
                        </a>
                    </div>
                </center>

                <h2>Huellas para la vida</h2>
                <p>Con tu aporte mensual podrás transformar más de 6.000 vidas que forman parte de la comunidad San Juan Bautista</p>

            </div>
            <div class="contenedor2-items">
                <center>
                    <div class="ih-item circle effect1">
                        <a href="#">
                            <div class="spinner"></div>
                            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
voluntario.png" alt=""></div>
                            <div class="info">
                                <div class="info-back">
                                    <h3>Marca la diferencia</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </center>
                <h2>Voluntariado</h2>
                <p>El programa busca intercambiar experiencias entre los voluntarios, los niños y niñas, sus familias y la comunidad.</p>

            </div>
            <div class="contenedor2-items">
                <center>
                    <div class="ih-item circle effect1">
                        <a href="#">
                            <div class="spinner"></div>
                            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
donacion.png" alt=""></div>
                            <div class="info">
                                <div class="info-back">
                                    <h3>Marca la diferencia</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </center>
                <h2>Donaciones Online</h2>
                <p>Anímate a ayudar a los adultos mayores en situacion de vulnerabilidad en la ciudad de El Guabo. Con tu colaboración muchas vidas se pueden cambiar.</p>

            </div>
        </div>
    </div>
    <div class="contenedor3">
        <div class="contenedor-trabajos">
            <h3>ÚLTIMOS TRABAJOS</h3>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
work1.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
work2.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
work3.jpg">
        </div>
    </div>

</main>


<?php }} ?>