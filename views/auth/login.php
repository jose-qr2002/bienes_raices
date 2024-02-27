<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach;?>
    <form class="formulario" method="POST" action="/login">
    <fieldset>
            <legend>Email y Password</legend>
            <div class="formulario__campos">
                <div class="formulario__campo">
                    <label class="formulario__label" for="email">E-mail</label>
                    <input name="email" class="formulario__entrada" type="email" id="email" placeholder="Tu e-mail" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__label" for="password">Passord</label>
                    <input name="password" class="formulario__entrada" type="password" id="password" placeholder="Tu contraseña" required>
                </div>
            </div>
        </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton boton--verde">
    </form>
</main>