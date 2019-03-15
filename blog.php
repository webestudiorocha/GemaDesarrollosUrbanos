<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$enviar = new Clases\Email();
$novedades->set("cod", $cod);
$novedades_data = $novedades->view();
$imagenes->set("cod", $novedades_data['cod']);
$filter = array("cod='" . $novedades_data['cod'] . "'");
$novedadesData = $novedades->listWithOps("", "", "3");

$imagenes_data = $imagenes->view();
$fecha = explode("-", $novedades_data['fecha']);
$template->set("title", TITULO . ' | ' . ucfirst(strip_tags($novedades_data['titulo'])));
$template->set("imagen", URL . "/" . $imagenes_data['ruta']);
$template->set("favicon", LOGO);
$template->set("keywords", strip_tags($novedades_data['keywords']));
$template->set("description", ucfirst(substr(strip_tags($novedades_data['desarrollo']), 0, 160)));
$template->set("body", "header-fixed sidebar-right header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();

?>

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->


        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;">  <?= ucfirst($novedades_data['titulo']); ?></h1>
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <article class="hentry data-effect">
                            <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24 clerafix">
                                <a><img src="<?= URL . '/' . $imagenes_data['ruta'] ?>" alt="Image"></a>

                            </div><!-- /.post-media -->

                            <div class="post-content-wrap clearfix">
                                <div class="post-meta">
                                    <div class="post-meta-content">
                                        <div class="post-meta-content-inner">
                                            <span class="post-date item"><span class="inner"><span
                                                            class="entry-date"><?= $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span></span></span>
                                        </div>
                                    </div>
                                </div><!-- /.post-meta -->
                                <div class="post-content post-excerpt margin-bottom-43">
                                    <p class="line-height-27 letter-spacing-005">  <?= $novedades_data['desarrollo']; ?></p>
                                </div><!-- /.post-excerpt -->
                                <div class="post-tags-socials">
                                    <div class="post-socials ">
                                        <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                        <a href="#" class="instagram"><span class="fa fa-instagram"></span></a>
                                    </div>
                                </div>

                            </div><!-- /.post-content-wrap -->
                        </article><!-- /.hentry -->

                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
                <div id="sidebar">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                    <div id="inner-sidebar" class="inner-content-wrap">

                        <div class="widget widget_follow">
                            <h2 class="widget-title"><span>Seguinos en nuestras redes sociales</span></h2>
                            <div class="follow-wrap clearfix col3 g8">
                                <div class="follow-item facebook">
                                    <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="follow-item instagram ">
                                    <div class="inner instagram">
                                        <span class="socials instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div><!-- /.widget_follow -->

                        <div class="widget widget_lastest">
                            <h2 class="widget-title"><span>Recientes</span></h2>
                            <?php
                            foreach ($novedadesData as $nov) {
                                $imagenes->set("cod", $nov['cod']);
                                $img = $imagenes->view();
                                $fecha = explode("-", $nov['fecha']);
                                ?>
                                <ul class="lastest-posts data-effect clearfix">
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">
                                                <img src="<?= URL . '/' . $img['ruta'] ?>" alt="Image">
                                            </a>

                                            <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">
                                                <div class="overlay-effect bg-color-1">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"><?= $nov['titulo'] ?></a>
                                            </h3>
                                            <span class="post-date"><span
                                                        class="entry-date"><?= $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span></span>
                                        </div>
                                    </li>

                                </ul>
                            <?php } ?>
                        </div><!-- /.widget_lastest -->

                    </div>
                </div><!-- /#sidebar -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->


    </div><!-- /#page -->
</div><!-- /#wrapper -->

<?php $template->themeEnd(); ?>
