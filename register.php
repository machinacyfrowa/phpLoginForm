<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_POST['submit'])): ?>
    <!-- pokaż tą część jeśli nie wysłaliśmy formularza -->
    <h1>Zarejestruj nowe konto</h1>
    <form action="register.php" method="post">
        <!-- pole na email oraz labelka do niego -->
        <label for="emailInput">Login:</label>
        <input type="email" name="emailInput" id="emailInput"><br>
        <!-- pole na hasło oraz labelka do niego -->
        <label for="passwordInput">Hasło:</label>
        <input type="password" name="passwordInput" id="passwordInput"><br>
        <!-- guzik wyślij -->
        <input type="submit" name="submit" value="Zarejestruj">
    </form>
    <?php else: ?>
    <!-- pokaż tą część jeśli wysłaliśmy formularz -->
    <?php    
        $db = new mysqli('localhost', 'root', '', 'phploginform');
        //przepisz zmienne z formularza do lokalnych zmiennych
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];
        //zaszyfruj hasło używając md5
        $password = md5($password);
        //przygotuj kwerendę
        $sql = "INSERT INTO user (email, password) VALUES ('$email','$password')";
        //wyślij kwerendę do bazy
        $result = $db->query($sql);
    ?>
    <h1>Rejestracja zakończona pomyślnie</h1>
    <a href="index.php">Powrót do głównej strony</a>
    <?php endif; ?>
</body>
</html>