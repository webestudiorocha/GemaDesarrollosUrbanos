<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$contenido = new Clases\Contenidos();
$contenido->set("cod", $id);
$contenidoData = $contenido->view();
$template->set("title", TITULO . " | Empresa");
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", ucfirst(substr(strip_tags($contenidoData['contenido']), 0, 160)));
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$template->themeInit();
?>


<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">


        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;">Empresa</h1>
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading"><?= $contenidoData["cod"]; ?></h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading"></p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="text-wrap">
                                                        <p class="sub-heading"><?= $contenidoData["contenido"]; ?>
                                                    </div></p>
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
                                        <div class="col-md-6 half-background style-1">
                                                <img src="<?= URL?>/assets/img/arms-care-check-905874.jpg">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 bg-light-grey">
                                            <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                                <div class="themesflat-headings style-1 clearfix">
                                                    <h2 class="heading">Gema Desarrollos Urbanos</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                                    <p class="sub-heading margin-top-30"><?php $contenido->set("cod", "DESCRIPCION");
                                                        $conDescripcion =  $contenido->view();
                                                        echo $conDescripcion["contenido"];
                                                        ?></p>
                                                </div>
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- END ABOUT -->
                          <br>
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->



    </div><!-- /#page -->
</div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>
