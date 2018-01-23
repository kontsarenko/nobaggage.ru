<?php
$db = mysql_connect("localhost", "root", "password") or die ("Ошибка подключения к базе данных");
mysql_query("SET NAMES utf8");
mysql_select_db("db_name", $db);
mysql_query("SET lc_time_names = 'ru_RU'");
?>
