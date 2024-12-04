<?php
require_once('class/User.php');
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php if (!isset($_POST['submit'])): ?>
        <!-- pokaż tą część jeśli nie wysłaliśmy formularza -->
        <div class="container">
            <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
                <h1 class="mb-3">Zarejestruj nowe konto</h1>
                <form action="register.php" method="post">
                    <!-- pole na email oraz labelka do niego -->
                    <label for="emailInput" class="form-label mb-1">Login:</label>
                    <input type="email" name="emailInput" id="emailInput" class="form-control mb-3">
                    <!-- pole na hasło oraz labelka do niego -->
                    <label for="passwordInput" class="form-label mb-1">Hasło:</label>
                    <input type="password" name="passwordInput" id="passwordInput" class="form-control mb-3">
                    <!-- guzik wyślij -->
                    <input type="submit" name="submit" value="Zarejestruj" class="btn btn-primary w-100"> 
                </form>
            </div>
        </div>
    <?php else: ?>
        <!-- pokaż tą część jeśli wysłaliśmy formularz -->
        <?php
        //przepisz zmienne z formularza do lokalnych zmiennych
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];
        User::register($email, $password);
        ?>
        <h1>Rejestracja zakończona pomyślnie</h1>
        <a href="index.php">Powrót do głównej strony</a>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>