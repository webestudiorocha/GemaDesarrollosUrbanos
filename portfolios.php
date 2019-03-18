<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO . " | Portfolios");
$template->set("description", "Portfolios de gema desarrollos urbanos, gema, gema desarrollos, gema urbanos, gema desarrollos urbanos" . TITULO);
$template->set("keywords", "Productos dePortfolios de gema desarrollos urbanos, gema, gema desarrollos, gema urbanos, gema desarrollos urbanoser-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
$categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : '';
$portfolios = new Clases\Portfolio();
$portfolios->set("categoria", $categoria);
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$novedadesPaginador = $portfolios->paginador('', 3);
$imagenes = new Clases\Imagenes();
$categorias = new Clases\Categorias();
$filter = array("area='portfolios'");
$categoria_data = $categorias->list($filter);



$cantidad = 9;
if ($pagina > 0) {
    $pagina = $pagina - 1;
}
if (@count($_GET) > 1) {
    $anidador = "&";
} else {
    $anidador = "?";
}

if (isset($_GET['pagina'])):
    $url = $funciones->eliminar_get(CANONICAL, 'pagina');
else:
    $url = CANONICAL;
endif;

$portfolio_Data = $portfolios->list("", "", $cantidad * $pagina . ',' . $cantidad);
$numeroPaginas = $portfolios->paginador("", $cantidad);


?>
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">


            <!-- Featured Title -->
            <div id="featured-title" class="featured-title clearfix text-center">
                <h1 style="padding-top: 20px !important;">Portfolios</h1>
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


                                                <div class="themesflat-spacer clearfix" id="" data-desktop="40"
                                                     data-mobile="35" data-smobile="35"></div>
                                                <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                                    <?php foreach ($portfolio_Data as $prod): ?>
                                                        <?php $imagenes->set("cod", $prod["cod"]);
                                                        $img = $imagenes->view(); ?>
                                                        <div class="project-item  villa">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49 imagen">
                                                                    <a href='<?= URL . '/portfolio/' . $funciones->normalizar_link($prod["titulo"]) . '/' . $prod["cod"] ?>'>
                                                                        <img src="<?= URL . "/" . $img["ruta"] ?>"
                                                                             class='img-fluid'
                                                                             style=' background: url("<?= URL . "/" . $img["ruta"] ?>") no-repeat center center/cover;'
                                                                             alt=''>
                                                                        <div class="overlay-effect bg-color-3"></div>
                                                                        <div class="elm-link">
                                                                            <a href="<?= URL . '/portfolio/' . $funciones->normalizar_link($prod['titulo']) . "/" . $prod['cod'] ?>"
                                                                               class="icon-1"> </a>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h5 class="heading"><a
                                                                                href='<?= URL . '/portfolio/' . $funciones->normalizar_link($prod["titulo"]) . '/' . $prod["cod"] ?>'> <?= ucfirst($prod["titulo"]) ?></a>
                                                                    </h5>

                                                                    <div class="elm-meta">
                                                                        <p>
                                                                            <a href='<?= URL . '/portfolio/' . $funciones->normalizar_link($prod["titulo"]) . '/' . $prod["cod"] ?>'> <?= strip_tags(substr($prod["desarrollo"], 0, 200)); ?>...</a>
                                                                        </p>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div><!-- /.product-item -->


                                                    <?php endforeach; ?>
                                                </div><!-- /.themesflat-project -->


                                                <?php if ($numeroPaginas > 1):  ?>

                                                    <div class="themesflat-pagination clearfix">
                                                        <ul>
                                                            <?php if (($pagina + 1) > 1): ?>
                                                                <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= $pagina ?>"
                                                                       class="page-numbers prev"><span class="fa fa-angle-left"></span></a>
                                                                </li><?php endif; ?>
                                                            <?php for ($i = 1; $i <= $numeroPaginas; $i++): ?>
                                                            <li class="<?php if ($i == $pagina + 1) {
                                                                echo "active";
                                                            } ?>"><a href="<?= $url ?><?= $anidador ?>pagina=<?= $i ?>"
                                                                     class="page-numbers current"><?= $i ?></a></li><?php endfor; ?>
                                                            <?php if (($pagina + 2) <= $numeroPaginas): ?>
                                                                <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= ($pagina + 2) ?>"
                                                                       class="page-numbers next"><span class="fa fa-angle-right"></span></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="themesflat-spacer clearfix" data-desktop="72"
                                                     data-mobile="60" data-smobile="60"></div>
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