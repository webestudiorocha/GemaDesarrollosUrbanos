<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", "Gema| Blogs");
$template->set("description", "Blogs de arquitectos, blogs de constructores, arquitectos, constructores, venta de puertas" . TITULO);
$template->set("keywords", "Blogs de gema, arquitectos, constructores, ultimos blogs de gema, ultimos blogs de  arquitectos, ultimas novedades en arquitectos" . TITULO);
$template->set("body", "header-fixed sidebar-right header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
$novedades = new Clases\Novedades();
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';
$novedadesPaginador = $novedades->paginador('', 3);
$imagenes = new Clases\Imagenes();
$funciones = new Clases\PublicFunction();
$enviar = new Clases\Email();


$cantidad = 3;

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

$novedadesData = $novedades->listWithOps("", "", $cantidad * $pagina . ',' . $cantidad);
$numeroPaginas = $novedades->paginador("", $cantidad);
?>
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Featured Title -->
            <div id="featured-title" class="featured-title clearfix text-center">
             <h1 style="padding-top: 20px !important;">Blogs</h1>
            </div>
            <!-- End Featured Title -->
            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap" class="container">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <article class="hentry data-effect">
                                <?php
                                foreach ($novedadesData as $nov) {
                                    $imagenes->set("cod", $nov['cod']);
                                    $img = $imagenes->view();
                                    $fecha = explode("-", $nov['fecha']);
                                    ?>
                                    <div class="post-media has-effect-icon offset-v-25 offset-h-24 data-effect-item clerafix">
                                        <a  href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"><img src="<?= URL . '/' . $img['ruta'] ?>"
                                                                             alt="Image"></a>
                                        <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day"><?= $fecha[2] ?></span>
                                              <span class="month"><?php
                                                  setlocale(LC_ALL, "es_ES");
                                                  echo ucfirst(strftime("%B", strtotime($nov['fecha']))) ;
                                                  ?></span>
                                        </span>
                                    </span>
                                            <div style="width: 100% !important; background: url(<?= URL . '/' . $img['ruta'] ?>)  no-repeat center center/cover;"></div>
                                        </div>

                                       <a  href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"> <div class="overlay-effect bg-color-1">
                                        </div></a>
                                        <div class="elm-link">
                                            <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"
                                               class="icon-1"> </a>

                                        </div>
                                    </div><!-- /.post-media -->

                                    <div class="post-content-wrap clearfix">
                                        <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">
                                           <?= ucfirst($nov['titulo']) ?></a>
                                    </span>
                                        </h2><!-- /.post-title -->
                                        <div class="post-content post-excerpt">
                                            <p> <?= strip_tags(substr($nov["desarrollo"], 0, 400)); ?>...</p>
                                        </div><!-- /.post-excerpt -->
                                        <div class="post-read-more">
                                            <div class="post-link">
                                                <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">Leer
                                                    Más</a>
                                            </div>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.post-content-wrap -->
                                <?php } ?>
                            </article><!-- /.hentry -->
                            <?php if ($numeroPaginas > 1): ?>
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
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                    <div id="sidebar">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60"
                             data-smobile="60"></div>
                        <div id="inner-sidebar" class="inner-content-wrap">
                            <div class="widget widget_follow">
                                <h2 class="widget-title"><span>Seguinos</span></h2>
                                <div class="follow-wrap clearfix col3 g8">
                                    <div class="follow-item facebook">
                                        <div class="inner">
                                        <span class="socials">
                                            <a href="https://www.facebook.com/pages/category/Product-Service/Gema-Arquitectura-y-Construcci%C3%B3n-323910314828274/" target="_blank">
                                                <i class="fa fa-facebook"></i></a>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="follow-item instagram">
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