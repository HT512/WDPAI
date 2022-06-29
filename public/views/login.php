<?php
if(isset($_SESSION["logged"]) && $_SESSION["logged"]==1){
    header("Location: {$url}/projects");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/login.css">
    <title>Logowanie</title>
</head>

<body>
<div class="container">

    <div class="logo-container">
        <img class="logo" src="../public/img/cineman.png">
    </div>

    <div class="login-container">
        <div class="message">
            <span id="hello">Logowanie</span>
            <span id="hello2">Wpisz swoje dane, a sprawdzimy czy wszystko się zgadza</span>
        </div>
        <form id="login-form" method="POST" action="login">
            <input name="email" type="text" placeholder="Adres Email">
            <input name="password" type="password" placeholder="Hasło">
            <button id="login-button" type="submit">Zaloguj</button>
            <span id="bottom-text">A może jednak nie posiadasz konta. Nic straconego wystarczy że powrócisz do poprzedniej strony klikając tutaj -> <a href="/register">Rejestracja</a></span>
            <div class="messages">
                <?php if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
        </form>

    </div>

</div>

</body>

</html>