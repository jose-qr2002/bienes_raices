<?php

define('TEMPLATES_URL', __DIR__.'/templates');
define('FUNCIONES_URL', __DIR__.'/funciones.php');
define('CARPETAS_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL."/".$nombre.".php";
}

function estadoAutenticado(){
    session_start();
    if(!$_SESSION['login']){
        header('Location: /bienesraices_inicio/index.php');
    }
}

function debugear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / sanitizar el HTML
function s($html) {
    $s = htmlspecialchars($html);
    return $s;
}

// Validar tipo de contenido 
function validarTipoContenido($tipo) {
    $tipos = ['vendedor', 'propiedad'];

    return in_array($tipo, $tipos);
}

// Mostrar los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = "";

    switch($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}

function validarORedireccionar(string $url) {
    // Validar la url
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id){
        header("Location: $url");
    }

    return $id;
}