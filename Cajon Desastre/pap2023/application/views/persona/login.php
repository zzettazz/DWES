<div class="container">
    <form action="<?=base_url()?>persona/loginPost" method="post">

    <label for="id-nombre">Nombre</label>
        <input id="id-nombre" type="text" name="nombre"/>
        <br/>

        <label for="id-pwd">Contraseña</label>
        <input id="id-pwd" type="password" name="passwd"/>
        <br/>

        <input type="submit"/>
        <BR/>

    </form>
</div>