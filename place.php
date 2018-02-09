<?php

$title ="Бангкок: как добраться, где остановиться, что делать";
$menu ="place";

include ("cfg/header_place.php");
include ("cfg/connect.php");

?>


<?php

	$id = (int) $_GET['id'];
	$results = mysqli_query("SELECT id,place,summary FROM `places` WHERE `id`='" . $id . "'", $db);
	if (!is_null($result)) {
		while ($row = mysqli_fetch_assoc($results)) {
			printf("<h1>%s</h1><p>%s</p>", $row["place"], $row["summary"]);
		}
		mysqli_free_result($results);
	}
?>

<div class='slider'>
<ul>

<?php

	$id = (int) $_GET['id'];
	$results = mysqli_query("SELECT id,place_id,url FROM `photos` WHERE `place_id`='" . $id . "' ORDER BY id ASC", $db);
	if (!is_null($result)) {
		while ($row = mysqli_fetch_assoc($results, MYSQLI_BOTH)) {
			printf("<li><img src='%s'></li>", $row["url"]);
		}
		mysqli_free_result($results);
	}

?>

</ul>
</div>

<hr>

<?php

	$id = (int) $_GET['id'];
	$results = mysqli_query("SELECT id,visa,fly,transfer,hotel,internet,money,todo,food,movies FROM `places` WHERE `id`='" . $id . "'", $db);
	if (!is_null($result)) {
		while ($row = mysqli_fetch_assoc($results, MYSQLI_BOTH)) {
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
		mysqli_free_result($results);
	}

?>

<?php
include ("cfg/footer_place.php");
?>
