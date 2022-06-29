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
<div class="points">

    <p class="ps">Masz <?php echo($points) ?> punktów.</p>
    <form method="post" action="/add_points">
        <input size="14" type="number" min="0" max="1000" id="in" name="points" value="0">
        <input class="submit" type="submit" value="dodaj punkty">
    </form>
</div>
</body>
</html>