<?php
$db = mysql_connect("localhost", "nobaggag_admin", "LbJR8UAe") or die ("Ошибка подключения к базе данных");
mysql_query("SET NAMES utf8");
mysql_select_db("nobaggag_core", $db);
mysql_query("SET lc_time_names = 'ru_RU'");
?>