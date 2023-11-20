<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//require_once 'core/Main.php';
spl_autoload_register(function ($class) {
    require_once 'core/' . $class . '.php';
});
require_once 'app/config/config.php';

$main = new Main();

?>
</body>
</html>