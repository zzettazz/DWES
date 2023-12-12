<div class="container">
    <button onclick="window.location.href='<?= base_url() ?>pais/c'">Nuevo</button>
    <h1>Lista de países</h1>

    <table class="table table-striped">

        <thead class="row">
            <th class="col-2">Nombre</th>
            <th class="col-4">Acciones</th>
        </thead>


        <?php foreach ($paises as $pais): ?>
            <tr class="row">
                <td class="col-2">
                    <?= $pais->nombre ?>
                </td>
                <td class="col-4">
                    <div class="row">
                        <form action="<?= base_url() ?>pais/u" class="col">
                            <button>
                                <img src="<?= base_url() ?>assets/img/icons/edit.png" height="20" width="20" onclick="submit()">
                            </button>
                            <input type="hidden" name="id" value="<?= $pais->id ?>" />
                        </form>

                        <form action="<?= base_url() ?>pais/dPost" method="post" class="col">
                            <button>
                                <img src="<?= base_url() ?>assets/img/icons/trash.png" height="20" width="20" onclick="submit()"></button>
                            <input type="hidden" name="id" value="<?= $pais->id ?>" />
                        </form>
                    </div>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>