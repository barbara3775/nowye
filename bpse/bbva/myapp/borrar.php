<?php
$file_path = __DIR__ . '/messi.json';

if (file_exists($file_path)) {
    file_put_contents($file_path, '');

    echo 'borrado los datos exitosamente.';
} else {
    echo 'El archivo messi.json no existe.';
}
?>
