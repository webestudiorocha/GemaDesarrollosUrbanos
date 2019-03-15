<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", TITULO . ' | Servicios');
$template->set("imagen", LOGO);
$template->set("keywords", "Servicios de " . TITULO);
$template->set("description", "Servicios de " . TITULO);
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
//Clases
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$categoriaGET = isset($_GET["categoria"]) ? $_GET["categoria"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicio_data = $servicio->lista("", "", "");
$imagenes = new Clases\Imagenes();
$categoria = new Clases\Categorias();
$filter = array("area='servicios'");
$categoria_data = $categoria->list($filter);
$funciones = new Clases\PublicFunction();
?>
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;">Servicios</h1>
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">

                                                <div class="owl-carousel owl-theme">
                                                    <?php foreach ($servicio_data as $port): ?>
                                                    <?php
                                                    $imagenes->set("cod", $port['cod']);
                                                    $img = $imagenes->view();

                                                    ?>
                                                    <div class="themesflat-image-box style-2 clearfix">
                                                        <div class="image-box-item">

                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                  <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>">
                                                                          <img style=" width: 100%;height: 250px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;" src="<?= URL . '/' . $img['ruta'] ?>" alt="Image">
                                                                      <div class="overlay-effect bg-color-accent"></div>   </a>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h5 class="heading"><a href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"><?= ucfirst($port['titulo']); ?></a></h5>
                                                                    <p class="letter-spacing-01"><?= strip_tags(substr($port["desarrollo"], 0, 200)); ?>...</p>
                                                                    <div class="elm-readmore">
                                                                        <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>">Detalles</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.themesflat-image-box -->
                                                    <?php endforeach; ?>
                                                </div>

                                            </div><!-- /.themesflat-carousel-box -->                                            
                                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->




    </div><!-- /#page -->
</div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>
