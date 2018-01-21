
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Сделал Филипп Концаренко -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport"></meta>
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/i/favicon.ico">

<title><?php echo $title; ?></title>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 -->
<!-- Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<!-- Яндекс.Метрика -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44440741 = new Ya.Metrika({
                    id:44440741,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44440741" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Яндекс.Метрика -->

<link href="/cfg/style.css" rel="stylesheet">
<link rel="stylesheet" href="/cfg/slider.css">

</head>

<body>

<div class="header">
<div class="logo">
  <a href="/"><img src="/i/logo.png" width="150px"></a>
</div>

<!-- <nav>
  <ul class="menu menu-pills">

    <?php

    if ($menu == "about")
    {
    echo "<li role='presentation' class='active'><a href='/about'>Принципы</a></li>";
    }
    else
    {
    echo "<li role='presentation'><a href='/about'>Принципы</a></li>";
    }

    ?>

    <?php

    if ($menu == "places")
    {
    echo "<li role='presentation' class='active'><a href='/programmes.php'>Места</a></li>";
    }
    else
    {
    echo "<li role='presentation'><a href='/programmes.php'>Места</a></li>";
    }

    ?>

  </ul>
</nav> -->

</div>
<div class="container">