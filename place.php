<?php

$title ="Бангкок: как добраться, где остановиться, что делать";   
$menu ="index";

include ("/cfg/header_place.php");
include ("/cfg/connect.php");

?>


<?php

	$id = (int) $_GET['id']; 
	$results = mysql_query("SELECT id,place,summary FROM `places` WHERE `id`='" . $id . "'", $db);
	while ($row = mysql_fetch_assoc($results, MYSQL_BOTH)) {
		printf("<h1>%s</h1><p>%s</p>", $row["place"], $row["summary"]);
	}
	mysql_free_result($results);

?>

<div class='slider'>
<ul>

<?php

	$id = (int) $_GET['id']; 
	$results = mysql_query("SELECT id,place_id,url FROM `photos` WHERE `place_id`='" . $id . "' ORDER BY id ASC", $db);
	while ($row = mysql_fetch_assoc($results, MYSQL_BOTH)) {
		printf("<li><img src='%s'></li>", $row["url"]);
	}
	mysql_free_result($results);

?>

</ul>
</div>

<hr>

<?php	

	$id = (int) $_GET['id']; 
	$results = mysql_query("SELECT id,visa,fly,transfer,hotel,internet,money,todo,food,movies FROM `places` WHERE `id`='" . $id . "'", $db);
	while ($row = mysql_fetch_assoc($results, MYSQL_BOTH)) {
		printf("
				<dl class='dl-horizontal place_tip'>
				<dt>Виза 📃</dt><dd>%s</dd>
				<hr>
				<dt>Как добраться ✈️</dt>
				<dd>%s</dd>
				<hr>
				<dt>Из аэропорта 🚊</dt>
				<dd>%s</dd>
				<hr>
				<dt>Отель 🏨</dt>
				<dd>%s</dd>
				<hr>
				<dt>Интернет 📱</dt>
				<dd>%s</dd>
				<hr>
				<dt>Валюта 💵</dt>
				<dd>%s</dd>
				<hr>
				<dt>Что делать 👀</dt>
				<dd>%s</dd>
				<hr>
				<dt>Еда 🍲</dt>
				<dd>%s</dd>
				<hr>
				<dt>Фильмы 🎬</dt>
				<dd>%s</dd>
			</dl>
			 ", $row["visa"], $row["fly"], $row["transfer"], 
			 $row["hotel"], $row["internet"], $row["money"], 
			 $row["todo"], $row["food"], $row["movies"]);
	}
	mysql_free_result($results);

?>

<?php 
include ("cfg/footer_place.php");
?>

