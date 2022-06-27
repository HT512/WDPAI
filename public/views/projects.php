<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Rejestracja</title>
</head>

<body>
<div class="container">

    <div class="logo-container">
        <img class="logo" src="public/img/cineman.png">
    </div>

    <div class="login-container">
        <div class="message">
            <span id="hello">Witaj nowy użytkowniku</span>
            <span id="hello2">Nim zaczniemy musimy wiedzieć kim jesteś</span>
        </div>
        <form method="POST" action="register">
            <input name="email" type="text" placeholder="Adres email">
            <input name="name" type="text" placeholder="Pseudonim">
            <input name="password" type="password" placeholder="Hasło">
            <input name="confirmedPassword" type="password" placeholder="Powtórz Hasło">
            <button id="login-button" type="submit">Zarejestruj</button>
            <span id="bottom-text">Jeżeli masz już konto, kliknij tutaj -> <a href="/login">Logowanie</a></span>
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