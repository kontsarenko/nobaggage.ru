<?php
$db = mysqli_connect("localhost", "root", "password") or die ("Ошибка подключения к базе данных");
mysqli_query("SET NAMES utf8");
mysqli_select_db("db_name", $db);
mysqli_query("SET lc_time_names = 'ru_RU'");
?>
