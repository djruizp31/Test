<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
<?php
    $FileWithIps = 'ip.json';
    $ips = file_get_contents($FileWithIps);
    $contenido = json_decode($ips, true);

    if(isset($_GET["mostrar"])){
        echo "<p>IP: <b>".$contenido[$_GET["k"]] ."</b></p>";        
    }
    else{
        $contenido[$_GET["k"]] = $_SERVER[REMOTE_ADDR];
        file_put_contents($FileWithIps, json_encode($contenido));
    }
?>

    <H1>Hola Ya tengo tu Ip</H1>
</body>

</html>