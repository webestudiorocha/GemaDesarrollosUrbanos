<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $cod);
$servicio_data = $servicio->view();
$serviciosData = $servicio->lista("", "", "3");
$imagenes = new Clases\Imagenes();
$imagenes_data = $imagenes->list("");
$template->set("title", TITULO . ' | ' . ucfirst(strip_tags($servicio_data['titulo'])));
$template->set("description", ucfirst(substr(strip_tags($servicio_data['desarrollo']), 0, 160)));
$template->set("keywords", strip_tags($servicio_data['keywords']));
$template->set("imagen", LOGO);
$template->set("body", "header-fixed page sidebar-left header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
?>
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Featured Title -->
            <div id="featured-title" class="featured-title clearfix text-center">
                <h1 style="padding-top: 60px !important;"><?= ucfirst($servicio_data["titulo"]); ?></h1>
            </div>
            <!-- End Featured Title -->
            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap" class="container">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60"
                                 data-smobile="60"></div>
                            <div class="themesflat-row equalize sm-equalize-auto clearfix row col-md-12">
                                <div >
                                    <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px"
                                         data-mobilemargin="0 15px 0 15px">
                                        <?php
                                        $imagenes->set("cod", $servicio_data["cod"]);
                                        $img = $imagenes->view(); ?>
                                        <div class="themesflat-headings style-2 clearfix">
                                            <img src="<?= URL . '/' . $img['ruta'] ?>"
                                                 style="width: 100%; background: no-repeat center center/cover;">
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24"><?= ucfirst($servicio_data['desarrollo']); ?></p>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="56" data-mobile="56"
                                         data-smobile="56"></div>
                                </div>
                            </div><!-- /.themesflat-row -->
                            <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="39"
                                 data-smobile="39"></div>
                            <div class="themesflat-spacer clearfix" data-desktop="37" data-mobile="35"
                                 data-smobile="35"></div>
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                    <div id="sidebar">
                        <br>
                        <div class="widget widget_lastest">
                            <h2 class="widget-title"><span>Más Servicios</span></h2>
                            <?php
                            foreach ($serviciosData as $nov) {
                                $imagenes->set("cod", $nov['cod']);
                                $img = $imagenes->view();
                                ?>
                                <ul class="lastest-posts data-effect clearfix">
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon ">
                                            <a href="<?php echo URL . '/servicio/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">
                                                <img src="<?= URL . '/' . $img['ruta'] ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a href="<?php echo URL . '/servicio/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"><?= $nov['titulo'] ?></a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60"
                             data-smobile="60"></div>
                    </div><!-- /#sidebar -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->
        </div><!-- /#page -->
    </div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>