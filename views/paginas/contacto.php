<main class="contenedor">
    <h1>Contacto</h1>

    <?php if($mensaje) { ?>
            <p class="alerta exito"><?php echo $mensaje ?></p>
    <?php } ?>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>

    <h2>Llene el formulario de Contacto</h2>
    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <div class="formulario__campos">
                <div class="formulario__campo">
                    <label class="formulario__label" for="nombre">Nombre</label>
                    <input class="formulario__entrada" type="text" id="nombre" placeholder="Tu nombre" name="contacto[nombre]" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__label" for="mensaje">Mensaje</label>
                    <textarea class="formulario__entrada" id="mensaje" name="contacto[mensaje]" required></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <div class="formulario__campos">
                <div class="formulario__campo">
                    <label class="formulario__label" for="opciones">Vende o Compra</label>
                    <select class="formulario__entrada" id="opciones" name="contacto[tipo]" required>
                        <option value="" disabled selected>-- Seleccione --</option>
                        <option value="compra">Compra</option>
                        <option value="vende">Vende</option>
                    </select>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__label" for="precio">Precio</label>
                    <input class="formulario__entrada" type="number" id="precio" placeholder="Tu presupuesto" name="contacto[precio]" required>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="formulario__campos">
                <div class="formulario__campo">
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Teléfono</label>
                        <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>
                        <label for="contactar-email">E-mail</label>
                        <input type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
                    </div>
                </div>
            </div>

            <div id="contacto">

            </div>

            
        </fieldset>
        <input type="submit" value="Enviar" class="boton--verde">
    </form>
</main>