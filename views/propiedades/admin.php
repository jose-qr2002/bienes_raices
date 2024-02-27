<main class="contenedor">
    <h1>Administrador de bienes raices</h1>
    
    <?php 
        if($resultado) {
            $mensaje = mostrarNotificacion(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje) ?></p>
    <?php   }
        }
    ?>

    <a href="/propiedades/crear" class="boton boton--verde">Nueva Propiedad</a>
    <a href="/vendedores/crear" class="boton boton--amarillo">Nuevo Vendedor</a>

    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody><!--Mostrar los resultados-->
            <?php foreach( $propiedades as $propiedad ):?>
            <tr>
                <th><?php echo $propiedad->id; ?></th>
                <th><?php echo $propiedad->titulo; ?></th>
                <th>
                    <div class="imagen-campo">
                        <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla" alt="Imagen propiedad">
                    </div>    
                </th>
                <th>$ <?php echo $propiedad->precio; ?></th>
                <th>
                    <form action="/propiedades/eliminar" method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton--rojo-block w-100 ln-1_15" value="Eliminar">
                    </form>
                    <a href="/propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="boton--amarillo-block">Actualizar</a>
                </th>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <h2>Vendedores</h2>
        <table class="propiedades">
            <thead>
                
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody><!--Mostrar los resultados-->
                <?php foreach( $vendedores as $vendedor ):?>
                <tr>
                    <th><?php echo $vendedor->id; ?></th>
                    <th><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></th>
                    <th><?php echo $vendedor->telefono; ?></th>
                    <th>
                        <form method="POST" class="w-100" action="/vendedores/eliminar">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <input type="submit" class="boton--rojo-block w-100 ln-1_15" value="Eliminar">
                        </form>
                        <a href="/vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton--amarillo-block">Actualizar</a>
                    </th>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</main>