<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wypożyczalnia filmowa</title>
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
    <link rel="stylesheet" type="text/css" href="public/css/Mediaprofile.css">
</head>
<body>

<?php $this->render('menu');  ?>
<div class="profile"><h5>Nick: <?php echo($data[0]->getNick()) ?></h2>
    <div id="margin">
        <p class="email" >Email: <?php echo($data[0]->getEmail()) ?> </p>
        <p class="o" > Twoje punkty:  <?php echo($data[0]->getPoints()) ?> </p>
    </div>



</div>


</body>
</html>