<div class="container">
    <h1>Nuevo país</h1>
    <form action="<?= base_url() ?>pais/cPost" method="post">
        <label for="id-pais">Nombre</label>
        <input id="id-pais" type="text" name="nombre" autofocus="autofocus"/>
        <br />

        <input type="submit" />
    </form>
</div>