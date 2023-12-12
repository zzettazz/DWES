<div class="container">
    <button onclick="window.location.href='<?=base_url()?>persona/c'">Nueva</button>
    <h1>Lista de personas</h1>

    <table class="table table-striped">

        <thead>
            <th>Nombre</th>
        </thead>


        <?php foreach ($personas as $persona): ?>
            <tr>
                <td>
                    <?= $persona->nombre ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>