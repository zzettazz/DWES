<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
        <title>Ejemplo APP</title>
    </head>
    <body>
        <?= $usuario ?>
        <div class="container bg-dark">
            <div class="row text-center">
                <div class="col">
                    <button type="button" class="btn btn-dark fw-bolder">INICIO</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-dark fw-bolder" onclick="window.location.href='<?=base_url()?>login'">LOGIN</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-dark fw-bolder" onclick="window.location.href='<?=base_url()?>signup'">REGISTRO</button>
                </div>
            </div>
            <h4 style="padding-bottom: 2vh;" class="text-white">Por favor, <a href="<?=base_url()?>login">identifícate</a> o <a href="<?=base_url()?>signup">regístrate</a></h4>
        </div>