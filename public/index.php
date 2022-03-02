<?php

require '../src/Standard/header.php';
require '../src/Autoloader.php';
Autoloader::register();

$app = new App();
$app -> run();




require '../src/Standard/footer.php';