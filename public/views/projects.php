<?php
if(!isset($_SESSION["logged"]) || $_SESSION["logged"]==0){
    header("Location: {$url}/login");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wypożyczalnia filmowa</title>
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <link rel="stylesheet" type="text/css" href="../public/css/indexMedia.css">
</head>
<body>

<?php $this->render('menu') ?>
<div id="Content">
    <div class="main-left">
        <h2>Najnowsze filmy:</h2>
        <?php foreach($data[0] as $key=>$movie){ ?>
               <div class="movie">
                   <a href="../movie/<?php echo($movie->getId()) ?>">
                        <img class="movie-poster" src="../public/img/<?php echo($movie->getImage()) ?>" alt="">
                        <p class="movie-name">
                            <?php echo $movie->getName(); ?>
                        </p>
                   </a>
               </div>

        <?php } ?>

    </div>
    <div class="main-right">
        <h3>Lubiane:</h3>
        <ul class="movie-list">
        <?php foreach($over5[0] as $key=>$movie){ ?>
            <li>
                <a href="../movie/<?php echo($movie->getId()) ?>">
                    <?php echo $movie->getName(); ?>, <?php echo $movie->getRating(); ?>
                </a>
            </li>
        <?php } ?>
        </ul>

    </ul>


</div>


</body>
</html>