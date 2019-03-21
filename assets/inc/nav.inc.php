<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicio_data = $servicio->lista("", "", "");
$funciones_nav = new Clases\PublicFunction();
?>

<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                <div class="top-bar-content">
                    <div class="inner">
                        <span class="address content">Roque Sáenz Peña 450, Porteña, Córdoba</span>
                        <span class="phone content">03564 - 452050/624956</span>
                    </div>
                </div><!-- /.top-bar-content -->

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="text">Seguinos</span>
                        <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </span>
                    </div>
                </div><!-- /.top-bar-socials -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner clearfix">
                <div id="site-logo" class="clearfix">
                    <div id="site-log-inner">
                        <a href="<?= URL; ?>/index" rel="home" class="main-logo">
                            <img src="<?= URL; ?>/assets/img/Gema desarrollos urbanos_fondo verde.jpg" alt="Autora" width="186" height="39" data-retina="<?= URL; ?>/assets/img/Gema desarrollos urbanos_fondo verde.jpg" data-width="186" data-height="39">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button">
                    <span></span>
                </div><!-- /.mobile-button -->

                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"index")) { echo "current-menu-item"; } ?> ">
                            <a  href="<?= URL; ?>/index">Inicio</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"empresa")) { echo "current-menu-item"; } ?> ">
                            <a href="<?= URL; ?>/c/empresa" alt="EMPRESA">Sobre Nosotros</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"servicios")) { echo "current-menu-item"; } ?>">
                            <a href="<?= URL; ?>/servicios">Servicios</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"portfolios")) { echo "current-menu-item"; } ?>">
                            <a href="<?= URL; ?>/portfolios">Portfolios</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"blogs")) { echo "current-menu-item"; } ?>">
                            <a href="<?= URL; ?>/blogs">Blog</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"social")) { echo "current-menu-item"; } ?>">
                            <a href="<?= URL; ?>/social">Redes Sociales</a>
                        </li>
                        <li class="menu-item menu-item-has-children <?php if(strpos(CANONICAL,"contacto")) { echo "current-menu-item"; } ?>">
                            <a href="<?= URL; ?>/contacto">Contacto</a>
                        </li>
                    </ul>
                </nav><!-- /#main-nav -->


            </div><!-- /.wrap-inner -->
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- #site-header-wrap -->
