<?php
// phpinfo();
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

$param1 = $_GET['param1'];
$param2 = $_GET['param2'];

// Получение текущего URL-запроса
$current_url = $_SERVER['REQUEST_URI'];


echo "Параметр 1 = $param1 </br>";
echo "Параметр 2 = $param2 </br>";
echo "Текущая ссылка = $current_url";
?>