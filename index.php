<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$imagenes = new Clases\Imagenes();
$producto = new Clases\Productos();
$novedades = new Clases\Novedades();
$sliders = new Clases\Sliders();
$servicio = new Clases\Servicios();
$contenido= new Clases\Contenidos();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio->set("cod", $cod);
$servicio_data = $servicio->lista("", "", "");
$template->set("title", TITULO . " | Inicio");
$template->set("description", "Estudio de arquitectos, constructora, ventas de puertas, arquitectos, constructores " . TITULO);
$template->set("keywords", "Estudio de arquitectos, constructora, ventas de puertas, arquitectos, constructores, puertas, construccion" . TITULO);
$template->set("imagen", LOGO);
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search");
$template->themeInit();
$producto->set("cod", $id);
$sliders_data = $sliders->list('', '', '');
$producto_data = $producto->list("", "", "4");
$novedades_data = $novedades->list('', '', '3');
$categoria = new Clases\Categorias();
$filter = array("area='portfolio'");
$categoria_data = $categoria->list($filter);
?>
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                           <!-- SLIDER -->
                            <div class="rev_slider_wrapper fullwidthbanner-container" >
                                <div id="rev-slider1" class="rev_slider fullwidthabanner" ><ul>
                                    <?php
                                    $activo = 0;
                                    foreach ($sliders_data as $sli) {
                                    $imagenes->set("cod", $sli['cod']);
                                    $img_data = $imagenes->view();
                                    ?>


                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <img  src="<?= URL . '/' . $img_data['ruta'] ?>"   >
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                                                data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                data-fontsize="['20','20','20','16']"
                                                data-lineheight="['70','70','40','24']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];"
                                                data-mask_out="x:inherit;y:inherit;"
                                                data-start="700"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-responsive_offset="on">
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->

                                        <?php
                                    }
                                    ?></ul>
                                </div>

                            </div>
                            <!-- END SLIDER -->
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">Empresa</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12" style="padding-right: 0px !important;">
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div >
                                                        <?php $contenido->set("cod", "EMPRESA");
                                                        $conEmpresa =  $contenido->view();
                                                        echo $conEmpresa["contenido"];
                                                        ?>

                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->                                         
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->


                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                            <!-- ABOUT -->
                           <div class="row-about">
                               <div class="container-fluid">
                                   <div class="row equalize sm-equalize-auto">
                                       <div class="col-md-6 half-background style-1" style="padding-right: 0px !important;">
                                           <img src="<?= URL?>/assets/img/Gema desarrollos urbanos_fondo verde1.jpg" style="width: 100%">
                                       </div><!-- /.col-md-6 -->
                                       <div class="col-md-6 bg-light-grey">
                                           <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                               <div class="themesflat-headings style-1 clearfix">
                                                   <h2 class="heading">Gema Desarrollos Urbanos</h2>
                                                   <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                                   <p class="sub-heading margin-top-30">
                                                       <?php $contenido->set("cod", "DESCRIPCION");
                                                       $conDescripcion =  $contenido->view();
                                                       echo strip_tags(substr($conDescripcion["contenido"],0, 400)) ;

                                                       ?>
                                                   ...</p>
                                               </div>
                                           </div><!-- /.themesflat-content-box -->
                                       </div><!-- /.col-md-6 -->
                                   </div><!-- /.row -->
                               </div><!-- /.container-fluid -->
                           </div>
                            <!-- END ABOUT -->
                           <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                           <div class="elm-button text-center">
                               <a href="<?= URL ;?>/c/empresa" class="themesflat-button bg-accent">Sobre Nosotros</a>
                           </div>
                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">Servicios</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <a  href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix row" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                                                <div class="owl-carousel owl-theme">
                                                    <?php foreach ($servicio_data as $port): ?>
                                                    <?php
                                                    $imagenes->set("cod", $port['cod']);
                                                    $img = $imagenes->view();

                                                    ?>
                                                    <div class="themesflat-image-box style-1 has-icon icon-right w65 clearfix">
                                                        <div class="image-box-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>">
                                                                        <img src="<?= URL . '/' . $img['ruta'] ?>" alt="Image">
                                                                    <div class="overlay-effect bg-color-accent"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h5 class="heading"><a href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"><?= ucfirst($port['titulo']); ?></a></h5>
                                                                    <span class="icon-wrap">
                                                                      <a  href="<?= URL . '/servicio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"> <i class="fa fa-angle-right"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-image-box -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="<?= URL ?>/servicios.php" class="themesflat-button bg-accent">Todos los Servicios</a>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->

                            <!-- PROJECT -->
                            <div class="row-project parallax parallax-1 parallax-overlay">                                
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <div class="themesflat-spacer clearfix"></div>
                                            <br>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading text-white">Productos</h2>
                                                <div class="sep has-icon width-125 border-color-light clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="false">
                                                <div class="owl-carousel owl-theme">
                                                    <?php foreach ($producto_data as $port): ?>
                                                    <?php
                                                    $imagenes->set("cod", $port['cod']);
                                                    $img = $imagenes->view();

                                                    ?>
                                                    <div class="themesflat-project style-1 data-effect  clearfix">
                                                        <div class="project-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                                    <img  src="<?= URL . '/' . $img['ruta'] ?>" alt="Image">
                                                                    <div class="text-wrap text-center">
                                                                        <h5 class="heading"><a href="<?= URL . '/producto/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"><?= ucfirst($port['titulo']); ?></a></h5>
                                                                        <h6 style="color: white !important;">
                                                                            <a
                                                                                    href='<?= URL . '/producto/' . $funciones->normalizar_link($port["titulo"]) . '/' . $port["cod"] ?>'>$<?= ucfirst($port["precio"]) ?></a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="elm-link text-center">
                                                                        <a href="<?= URL . '/producto/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"class="icon-1"></a>
                                                                    </div>
                                                                    <div class="overlay-effect bg-color-3"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-project -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="<?= URL ?>/productos.php" class="themesflat-button bg-accent">Todos los productos </a>
                                            </div>
                                            <br>
                                            <br>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                                <div class="bg-parallax-overlay overlay-black"></div>
                            </div>
                            <!-- END PROJECT -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
        <?php $template->themeEnd(); ?>



