<div class="container">
    <h1>Nuevo usuario</h1>
    <form action="<?= base_url() ?>usuario/cPost" method="post">

        <label for="id-usuario">Nombre</label>
        <input id="id-usuario" type="text" name="nombre" />
        <br />

        <label for="id-pwd">Contraseña</label>
        <input id="id-pwd" type="password" name="passwd" />
        <br />

        <input type="submit" />
    </form>
</div>