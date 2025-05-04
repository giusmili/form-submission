<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassRoom - PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>
        Compléter le code <kbd>PHP</kbd> suivant
        </h1>
    </header>
    <main>
        <fieldset>
            <legend>
                Remplir les champs
            </legend>
    <?php
        include_once __DIR__ .'/controller/baseController.php';
    ?>
    <form action="index.php" method="post">
  
        <label for="login">Login</label>
            <input type="email" id="login" name="login" placeholder="Votre login" aria-required="true" required>
       
        <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true" required>
      
        <label>
            <input type="checkbox" name="admin" value="1"> Vous êtes admin 🔒
        </label>
        <button type="submit">Envoyer</button>
    </form>

    </fieldset>
    </main>

    <footer>
        <p>
            &copy; - PHP - 2025
        </p>
    </footer>
</body>
</html>