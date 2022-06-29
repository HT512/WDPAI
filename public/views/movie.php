<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wypożyczalnia filmowa</title>
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <link rel="stylesheet" type="text/css" href="../public/css/movieMedia.css">
</head>
<body>

<?php $this->render('menu') ?>
<? if ($data[0] != null): ?>
    <div class="Mov" style="background-image: url('<?php echo("../public/img/".$data[0]->getImage()) ?>')"><h2><?php echo($data[0]->getName()) ?></h2>
        <div class="margin2">
            <p class="email" >Dyrektor: <?php echo($data[0]->getDirector()) ?> </p>
            <p class="o" > Gatunek:  <?php echo($data[0]->getGenre()) ?> </p>
            <p class="o" > Rok wydania:  <?php echo($data[0]->getYearOfRelease()) ?> </p>
            <p class="o" > Koszt:  <?php echo($data[0]->getPointCost()) ?> </p>
            <p class="o" > Ranking:  <?php echo($data[0]->getRating()) ?> </p>
        </div>
        <div class="margin-right">
            <?php echo($owned) ?>
            <? if ($owned): ?>
                <div class="owned">Już zakupione</div>
            <? else: ?>
                <form action="/buy" method="post">
                    <input type="hidden" id="movieid" name="movieid" value=<?php echo($data[0]->getId()) ?> >
                    <input type="hidden" id="cost" name="cost" value=<?php echo($data[0]->getPointCost()) ?> >
                    <input type="submit" value="Kup dostęp" />
                </form>
            <? endif; ?>
        </div>
    <? else: ?>
        <h2>Brak takiego filmu!</h2>
    <? endif; ?>


</div>


</body>
</html>