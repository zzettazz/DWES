<div class="container">
    <form action="<?=base_url()?>usuario/loginPost" method="post">

    <label for="id-nombre">Nombre</label>
        <input id="id-nombre" type="text" name="nombre" autofocus="autofocus"  required="required"/>
        <br/>

        <label for="id-pwd">Contraseña</label>
        <input id="id-pwd" type="password" name="passwd" required="required"/>
        <br/>

        <input type="submit"/>
        <br/>

    </form>
</div>