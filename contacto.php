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
$template->set("title", TITULO . " | Contacto");
$template->set("description", "Contacto de gema, contacto de arquitectos en brikmann, contacto de constructores en brikmann " . TITULO);
$template->set("keywords", "Contacto de gema, contacto de arquitectos en brikmann, contacto de constructores en brikmann, gema, arquitectos, constructores " . TITULO);
$template->set("body", "header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search");
$enviar = new Clases\Email();
$template->themeInit();
?>
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix text-center">
            <h1 style="padding-top: 20px !important;">Contacto</h1>
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
                                                <h2 class="heading">CONTACTO</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row gutter-16 ">
                                        <?php $contenido->set("cod", "CONTACTO");
                                        $conContacto =  $contenido->view();
                                        echo $conContacto["contenido"];

                                        ?>
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                           <!-- CONTACT -->
                           <div class="row-contact">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-4">
                                           <div class="themesflat-contact-form style-2 w100 clearfix">
                                               <?php if (isset($_POST["enviar"])):
                                                   $nombre = $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '');
                                                   $email = $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
                                                   $telefono = $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : '');
                                                   $consulta = $funciones->antihack_mysqli(isset($_POST["consulta"]) ? $_POST["consulta"] : '');
                                                   $asunto = $funciones->antihack_mysqli(isset($_POST["asunto"]) ? $_POST["asunto"] : '');

                                                   $mensajeFinal = "<b>Nombre</b>: " . $nombre . " <br/>";
                                                   $mensajeFinal .= "<b>Email</b>: " . $email . "<br/>";
                                                   $mensajeFinal .= "<b>Teléfono</b>: " . $telefono . " <br/>";
                                                   $mensajeFinal .= "<b>Consulta</b>: " . $consulta . "<br/>";

                                                   //USUARIO
                                                   $enviar->set("asunto", "Realizaste tu consulta");
                                                   $enviar->set("receptor", $email);
                                                   $enviar->set("emisor", EMAIL);
                                                   $enviar->set("mensaje", $mensajeFinal);
                                                   if ($enviar->emailEnviar() == 1):
                                                       echo '<div class="alert alert-success" role="alert">¡Consulta enviada correctamente!</div>';
                                                   endif;

                                                   //ADMIN

                                                   $mensajeFinalAdmin = "<b>Nombre</b>: " . $nombre . " <br/>";
                                                   $mensajeFinalAdmin .= "<b>URL</b>: " . $asunto . "<br/>";
                                                   $mensajeFinalAdmin .= "<b>Email</b>: " . $email . "<br/>";
                                                   $mensajeFinalAdmin .= "<b>Teléfono</b>: " . $telefono . " <br/>";
                                                   $mensajeFinalAdmin .= "<b>Consulta</b>: " . $consulta . "<br/>";
                                                   //ADMIN
                                                   $enviar->set("asunto", "Consulta Web");
                                                   $enviar->set("receptor", EMAIL);
                                                   $enviar->set("mensaje", $mensajeFinalAdmin);
                                                   if ($enviar->emailEnviar() == 0):
                                                       echo '<div class="alert alert-danger" role="alert">¡No se ha podido enviar la consulta!</div>';
                                                   endif;
                                               endif; ?>
                                               <form id="contact-form" method="post">
                                                   <input type="text"  id="name" name="nombre" value="" class="wpcf7-form-control" placeholder="Nombre" required>
                                                   <input type="hidden" name="asunto" class="form-control" placeholder="Nombre" required id="name"
                                                          title="asunto" value="<?= CANONICAL ?>"/>
                                                   <input type="email"  id="email" name="email" value="" class="wpcf7-form-control" placeholder=" Email" required>
                                                   <input type="text"  id="telefono" name="telefono" value="" class="wpcf7-form-control" placeholder="Telefono">



                                                   <textarea name="consulta"   id="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Consulta" required ></textarea>

                                                   <div class="col-md-12">
                                                       <input type="submit" name="enviar" id="submit" value="Enviar Mensaje">
                                                   </div>
                                               </form>
                                           </div><!-- /.themesflat-contact-form -->
                                       </div><!-- /.col-md-6 -->
                                       <div class="col-md-8">
                                           <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3419.4278748817505!2d-62.06619658517087!3d-31.01432648402163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x943520afde3e45ef%3A0x50bd1a099cb8935d!2zUm9xdWUgU8OhZW56IFBlw7FhLCBQb3J0ZcOxYSwgQ8OzcmRvYmE!5e0!3m2!1ses!2sar!4v1552910663016" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>                                    </div><!-- /.col-md-6 -->
                                   </div><!-- /.row -->
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                       </div><!-- /.col-md-12 -->
                                   </div><!-- /.row -->
                               </div><!-- /.container -->
                           </div>
                            <!-- END CONTACT -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->


    </div><!-- /#page -->
</div><!-- /#wrapper -->
<?php $template->themeEnd(); ?>

