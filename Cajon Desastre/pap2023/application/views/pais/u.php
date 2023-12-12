<div class="container">
    <h1>Editar país</h1>
    <form action="<?= base_url() ?>pais/uPost" method="post">
        <label for="id-pais">Nombre</label>
        <input id="id-pais" type="text" name="nombre" value="<?=$pais->nombre?>" autofocus="autofocus"/>
        <input type="hidden" name="id" value="<?=$pais->id?>"/>
        <br />

        <input type="submit" value="Modificar"/>
    </form>

    <button onclick="window.location.href='<?=base_url()?>pais/r'">Cancelar</button>
</div>