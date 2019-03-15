<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$portfolio = new Clases\Portfolio();
$portfolio->set("cod", $cod);
$portfolioData = $portfolio->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod='" . $portfolioData['cod'] . "'");
$imagenes_data = $imagenes->view();
$imagenes_array = $imagenes->list($filter);
$categoria = new Clases\Categorias();
$categoria->set("cod", $portfolioData['categoria']);
$categoriaData = $categoria->view();
$template = new Clases\TemplateSite();
$template->set("title", TITULO . " | " . ucfirst(strip_tags($portfolioData['titulo'])));
$template->set("imagen", LOGO);
$template->set("favicon", LOGO);
$template->set("keywords", strip_tags($portfolioData['keywords']));
$template->set("description", ucfirst(substr(strip_tags($portfolioData['desarrollo']), 0, 160)));
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
?>

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">


        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;"> <?php echo $portfolioData['titulo']; ?></h1>
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="page-content">
                            <!-- PROJECT DETAIL -->
                            <div class="row-project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="detail-inner-wrap">
                                                <div class="detail-gallery">
                                                    <div class="themesflat-headings style-2 clearfix">
                                                        <h2 class="heading line-height-62"><?= ucfirst($portfolioData['titulo']); ?></h2>
                                                        <div class="sep has-width w80 accent-bg clearfix">
                                                        </div>

                                                    </div>
                                                    <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                                    <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">

                                                        <div class="owl-carousel owl-theme">
                                                            <?php for ($i = 0; $i < count($imagenes_array); $i++) { ?>
                                                                <div class="gallery-item" >

                                                                    <div class="inner">
                                                                        <div class="thumb" style="background: url(<?= URL ?>/<?= $imagenes_array[$i]['ruta'] ?>)center/cover;">
                                                                            <img src="<?= URL ?>/<?= $imagenes_array[$i]['ruta'] ?>" alt="Image">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div><!-- /.themesflat-cousel-box -->
                                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                                    <div class="flat-content-wrap style-3 clearfix">
                                                        <div class="sep has-width w60 accent-bg  clearfix"></div>
                                                        <p class="margin-top-28"><?= ucfirst($portfolioData['desarrollo']); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                        </div>
                                    </div><!-- /.row -->

                                </div><!-- /.container -->
                            </div>
                            <!-- END PROJECT DETAIL -->
                        </div><!-- /.page-content -->

                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->


    </div><!-- /#page -->
</div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>
