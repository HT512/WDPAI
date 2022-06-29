<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wypożyczalnia filmowa</title>
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
</head>
<body>

<?php $this->render('menu');  ?>
<div id="Content"><h2><?php echo($data[0]->getNick()) ?></h2>
    <div id="margin">
        <p class="email" >Email: <?php echo($data[0]->getEmail()) ?> </p>
        <p class="points" > Points:  <?php echo($data[0]->getPoints()) ?> </p>
    </div>



</div>


</body>
</html>