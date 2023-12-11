<div class="container">
    <button onclick="window.location.href='<?= base_url() ?>pais/c'">Nuevo</button>
    <h1>Lista de países</h1>

    <table class="table table-striped">

        <thead>
            <th>Nombre</th>
            <th>Acciones</th>
        </thead>


        <?php foreach ($paises as $pais): ?>
            <tr>
                <td>
                    <?= $pais->nombre ?>
                </td>
                <td>
                    <form action="<?=base_url()?>pais/u">
                        <button><img src="<?=base_url()?>assets/img/icons/edit.png" height="20" width="20" onclick="submit()" ></button>
                        <input type="hidden" name="id" value="<?= $pais->id ?>"/>
                    </form>

                    <form>
                        <button><img src="<?=base_url()?>assets/img/icons/trash.png" height="20" width="20" onclick="submit()"></button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>