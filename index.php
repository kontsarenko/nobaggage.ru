<?php

$title ="nobaggage — советы путешественникам";   
$menu ="index";

include ("cfg/header.php");
// include ("/cfg/connect.php");

?>

<div class="row place">
	<div class="col-xs-1 col-md-1">
	</div>
	<div class="clearfix visible-xs-block"></div>
	<div class="col-xs-12 col-md-8 main">

<!-- <div class="feature">
  <h1>Советы по быстрым<br>
  и насыщенным путешествиям.</h1>
</div> -->

<h2>Популярные советы</h2>
<div class="row">
  <div class="col-md-6">
  	<div class="card"> 
      <a href="/place.php?id=1"></a>
        <img src="http://i.imgur.com/rOpm5wO.jpg" width="200px">
          <h3>Бангкок</h3>
          <p>Огромный мегаполис Азии. Запах острых приправ, уличная еда, мопеды. Пафосные отели по соседству с бедными кварталами.</p>
          <span class="new">НОВОЕ</span>
    </div>
   </div>
</div>



<?php 
include ("cfg/footer.php");
?>

