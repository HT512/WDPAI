<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wypożyczalnia filmowa</title>
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
</head>
<body>

<?php $this->render('menu') ?>
<? if ($data[0] != null): ?>
<div id="Content" ><h2><?php echo($data[0]->getName()) ?></h2>
    <div id="margin2">
        <p class="email" >Dyrektor: <?php echo($data[0]->getDirector()) ?> </p>
        <p class="points" > Gatunek:  <?php echo($data[0]->getGenre()) ?> </p>
        <p class="points" > Rok wydania:  <?php echo($data[0]->getYearOfRelease()) ?> </p>
        <p class="points" > Koszt:  <?php echo($data[0]->getPointCost()) ?> </p>
        <p class="points" > Ranking:  <?php echo($data[0]->getRating()) ?> </p>
        <p class="image" > Zdjęcie:   <?php echo($data[0]->getImage()) ?> </p>
    </div>
    <? else: ?>
        <h2>Brak takiego filmu!</h2>
    <? endif; ?>


</div>


</body>
</html>