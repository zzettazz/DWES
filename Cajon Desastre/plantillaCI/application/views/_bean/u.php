<div class="container">
    <h1>Editar país</h1>
    <form action="<?= base_url() ?>_bean/uPost" method="post">
        <label for="id-_bean">Nombre</label>
        <input id="id-_bean" type="text" name="nombre" value="<?=$_bean->nombre?>" autofocus="autofocus"/>
        <input type="hidden" name="id" value="<?=$_bean->id?>"/>
        <br />

        <input type="submit" value="Modificar"/>
    </form>

    <button onclick="window.location.href='<?=base_url()?>_bean/r'">Cancelar</button>
</div>