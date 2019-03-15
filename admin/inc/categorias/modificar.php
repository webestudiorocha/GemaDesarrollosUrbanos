<?php
$categorias = new Clases\Categorias();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$categorias->set("cod", $cod);
$data = $categorias->view();
$imagenes = new Clases\Imagenes();
$zebra = new Clases\Zebra_Image();
$cod = $funciones->antihack_mysqli(isset($_GET["cod"]) ? $_GET["cod"] : '');
$borrarImg = $funciones->antihack_mysqli(isset($_GET["borrarImg"]) ? $_GET["borrarImg"] : '');

if ($borrarImg != '') {
    $imagenes->set("id", $borrarImg);
    $imagenes->delete();
    $funciones->headerMove(URL . "/index.php?op=categorias&accion=modificar&cod=$cod");
}
if (isset($_POST["agregar"])) {
    $count = 0;
    $cod = $data["cod"];
    $categorias->set("cod", $cod);
    $categorias->set("titulo", $funciones->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : ''));
    $categorias->set("area", $funciones->antihack_mysqli(isset($_POST["area"]) ? $_POST["area"] : ''));

    foreach ($_FILES['files']['name'] as $f => $name) {
        $imgInicio = $_FILES["files"]["tmp_name"][$f];
        $tucadena = $_FILES["files"]["name"][$f];
        $partes = explode(".", $tucadena);
        $dom = (count($partes) - 1);
        $dominio = $partes[$dom];
        $prefijo = substr(md5(uniqid(rand())), 0, 10);
        if ($dominio != '') {
            $destinoFinal = "../assets/archivos/" . $prefijo . "." . $dominio;
            move_uploaded_file($imgInicio, $destinoFinal);
            chmod($destinoFinal, 0777);
            $destinoRecortado = "../assets/archivos/recortadas/a_" . $prefijo . "." . $dominio;

            $zebra->source_path = $destinoFinal;
            $zebra->target_path = $destinoRecortado;
            $zebra->jpeg_quality = 80;
            $zebra->preserve_aspect_ratio = true;
            $zebra->enlarge_smaller_images = true;
            $zebra->preserve_time = true;

            if ($zebra->resize(800, 700, ZEBRA_IMAGE_NOT_BOXED)) {
                unlink($destinoFinal);
            }

            $imagenes->set("cod", $cod);
            $imagenes->set("ruta", str_replace("../", "", $destinoRecortado));
            $imagenes->add();
        }
        $count++;
    }
    $categorias->edit();
    $funciones->headerMove(URL . "/index.php?op=categorias");
}

$imagenes->set("cod", $data['cod']);
$imagenes->set("link", "categorias&accion=modificar");

?>

<div class="col-md-12">
    <h4>Categorías</h4>
    <hr/>
    <form method="post" class="row" enctype="multipart/form-data">
        <label class="col-md-4">Título:<br/>
            <input type="text" value="<?= $data["titulo"] ?>" name="titulo">
        </label>
        <label class="col-md-4">Área:<br/>
            <select name="area">
                <option value="<?= $data["area"] ?>" selected><?= ucwords($data["area"]) ?></option>
                <option>---------------</option>
                <option value="sliders">Sliders</option>
                <option value="categorias">Novedades</option>
                <option value="portfolio">Portfolio</option>
                <option value="servicios">Servicios</option>
                <option value="galerias">Galerias</option>
                <option value="productos">Productos</option>
            </select>
        </label>
        <br/>
        <div class="col-md-12">
            <div class="row">
                <?php
                $imagenes->imagenesAdmin();
                ?>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <label class="col-md-12">
            Imágenes:<br/>
            <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*"/>
        </label>
        <div class="clearfix"></div>
        <br/>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" name="agregar" value="Crear Categoría"/>
        </div>
    </form>
</div>
