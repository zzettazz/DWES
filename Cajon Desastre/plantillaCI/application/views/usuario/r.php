<div class="container">
    <button onclick="window.location.href='<?=base_url()?>usuario/c'">Nueva</button>
    <h1>Lista de usuarios</h1>

    <table class="table table-striped">

        <thead>
            <th>Nombre</th>
        </thead>


        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td>
                    <?= $usuario->loginname ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>