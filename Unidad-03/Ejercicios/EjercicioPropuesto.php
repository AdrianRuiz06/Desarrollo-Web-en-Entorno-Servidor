<?php
// 1. Iniciar la sesión para tener memoria
session_start();

// 2. Si el array de memoria no existe en la sesión, lo creamos
if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = array();
}

// 3. Comprobamos si se ha pulsado Submit Y si el campo 'texto' está definido
if (isset($_POST['enviar']) && isset($_POST['texto'])) {
    
    // Quitamos espacios en blanco al principio y final
    $textoLimpio = trim($_POST['texto']);

    // 4. SOLO lo añadimos a la memoria si NO está vacío
    if (!empty($textoLimpio)) {
        $_SESSION['lista'][] = htmlspecialchars($textoLimpio);
    }

    // 5. Cuando acumulemos exactamente 10 elementos, los mostramos
    if (count($_SESSION['lista']) == 10) {
        
        // Unimos los 10 elementos por un espacio
        echo implode(" ", $_SESSION['lista']);

        // Borramos la lista para reiniciar la memoria
        $_SESSION['lista'] = array();
    }
}
?>

<!-- Formulario con 'name' en el input y en el submit -->
<form action="" method="POST">
    <input type="text" name="texto" required>
    <input type="submit" name="enviar" value="Submit">
</form>