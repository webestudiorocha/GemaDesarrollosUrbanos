<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$imagenes = new Clases\Imagenes();
$portfolio = new Clases\Portfolio();
$novedades = new Clases\Novedades();
$sliders = new Clases\Sliders();
$contenido= new Clases\Contenidos();
$template->set("title", TITULO . " | Redes Sociales");
$template->set("description", " " . TITULO);
$template->set("keywords", "" . TITULO);
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$enviar = new Clases\Email();
$template->themeInit();
?>
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;">Redes Sociales</h1>
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <!-- Place <div> tag where you want the feed to appear -->



    </div><!-- /#page -->
</div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>

