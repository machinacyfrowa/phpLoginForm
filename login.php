<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php if(!isset($_POST['submit'])): ?>
    <!-- pokaż tą część jeśli nie wysłaliśmy formularza -->
    <h1>Zaloguj się</h1>
    <form action="login.php" method="post">
        <!-- pole na email oraz labelka do niego -->
        <label for="emailInput">Login:</label>
        <input type="email" name="emailInput" id="emailInput"><br>
        <!-- pole na hasło oraz labelka do niego -->
        <label for="passwordInput">Hasło:</label>
        <input type="password" name="passwordInput" id="passwordInput"><br>
        <!-- guzik wyślij -->
        <input type="submit" name="submit" value="Zaloguj">
    </form>
    <?php else: ?>
    <!-- pokaż tą część jeśli wysłaliśmy formularz -->
    <?php
        $db = new mysqli('localhost', 'root', '', 'phploginform');
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $db->query($sql);
        //spodziewamy się JEDNEGO użytkownika
        if($result->num_rows == 1) {
            //do zmiennej $row wyciągamy jeden wiersz z wyniku zapytania
            $row = $result->fetch_assoc();
            //sprawdz czy wyciągnięty przez nas wiersz ma identyczne hasło
            //jak podane w formularzu zaszyfrowane md5
            if($row['password'] == md5($password)) {
                //wyświetl ładny komunikat
                echo '<h1>Zalogowano pomyślnie</h1>';
            } else {
                //jeśli nie wyświetl nieładny komunikat
                echo '<h1>Błędny email lub hasło</h1>';
            }
        } else {
            echo '<h1>Błędny email lub hasło</h1>';
        }
    ?>
    <?php endif; ?>
</body>
</html>