<div class="container">
    <h1>Nueva persona</h1>
    <form action="<?= base_url() ?>persona/cPost" method="post">
        <label for="id-persona">Nombre</label>
        <input id="id-persona" type="text" name="nombre" />
        <br />

        <input type="submit" />
    </form>
</div>