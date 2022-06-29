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
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
</head>
<body>

<?php $this->render('menu') ?>
<div id="Content2"><h2>Najnowsze filmy:</h2>
    <div id="margin">
        <?php foreach($data as $key=>$movie){ ?>
           <a href="../movie/<?php echo($movie->getId()) ?>">
               <div class="movie">
                    <img class="movie-poster" src="../public/img/<?php echo($movie->getImage()) ?>" alt="">
                    <p class="movie-name">
                        <?php echo $movie->getName(); ?>
                    </p>
               </div>
           </a>
        <?php } ?>

    </div>



</div>


</body>
</html>