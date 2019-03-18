<?php
$enviar = new Clases\Email();
$funciones = new Clases\PublicFunction();
$novedades = new Clases\Novedades();
$contenido = new Clases\Contenidos();
$imagenes = new Clases\Imagenes();
$funciones = new Clases\PublicFunction();
$novedadesData = $novedades->listWithOps("", "", "3");
?>
<!-- Footer -->
<footer id="footer" class="clearfix">
    <div id="footer-widgets" class="container">
        <div class="themesflat-row gutter-30">
            <div class="col span_1_of_4">
                <div class="widget widget_text">

                    <div>
                        <?php $contenido->set("cod", "FOOTER");
                       $conFooter =  $contenido->view();
                       echo $conFooter["contenido"];
                        ?>

                    </div>

                </div><!-- /.widget_text -->
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
            </div><!-- /.col -->

            <div class="col span_1_of_4">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>

                <div class="widget widget_lastest">
                    <h2 class="widget-title"><span>Blogs Recientes</span></h2>
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
                                    <a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>" class="icon-2"> <div class="overlay-effect bg-color-2"></div></a>
                                </div>
                                <div class="text">
                                    <h3><a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"><?= $nov['titulo'] ?></a></h3>
                                    <span class="post-date"><span class="entry-date"><?= $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span></span>
                                </div>
                            </li>

                        </ul>
                    <?php } ?>
                </div><!-- /.widget_lastest -->
            </div><!-- /.col -->

            <div class="col span_1_of_4">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                <div class="widget widget_tags">
                    <h2 class="widget-title margin-bottom-30"><span>Danos Me gusta</span></h2>

                </div>

            </div><!-- /.col -->


        </div><!-- /.themesflat-row -->
    </div><!-- /#footer-widgets -->
</footer><!-- /#footer -->
<div id="bottom" class="clearfix has-spacer">
    <div id="bottom-bar-inner" class="container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-content">
                <div id="copyright">2019<span class="text">Copyright © <a target="_blank" href="https://www.estudiorochayasoc.com/" class="text-accent"> Estudio Rocha y Asociados</a></span>
                </div>
            </div><!-- /.bottom-bar-content -->


        </div><!-- /.bottom-bar-inner-wrap -->
    </div><!-- /#bottom-bar-inner -->
</div><!-- /#bottom -->

</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="<?= URL; ?>/assets/js/jquery.min.js"></script>
<script src="<?= URL; ?>/assets/js/plugins.js"></script>
<script src="<?= URL; ?>/assets/js/tether.min.js"></script>
<script src="<?= URL; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= URL; ?>/assets/js/animsition.js"></script>
<script src="<?= URL; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= URL; ?>/assets/js/countto.js"></script>
<script src="<?= URL; ?>/assets/js/equalize.min.js"></script>
<script src="<?= URL; ?>/assets/js/jquery.isotope.min.js"></script>
<script src="<?= URL; ?>/assets/js/owl.carousel2.thumbs.js"></script>


<script src="<?= URL; ?>/assets/js/jquery.cookie.js"></script>
<script src="<?= URL; ?>/assets/js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="<?= URL; ?>/assets/js/shortcodes.js"></script>
<script src="<?= URL; ?>/assets/js/jquery-validate.js"></script>
<script src="<?= URL; ?>/assets/js/main.js"></script>

<!-- Revolution Slider -->
<script src="<?= URL; ?>/includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= URL; ?>/assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= URL; ?>/includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>