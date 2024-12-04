<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- kontener bootstrapa na siatkę kolumn -->
    <div class="container">
        <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
            <h1 class="mb-5">Menu główne</h1>
            <a href="register">
                <button type="button" class="btn btn-primary btn-lg w-100 mb-5">Zarejestruj</button>
            </a>
            <br>
            <a href="login">
                <button type="button" class="btn btn-primary btn-lg w-100 mb-5">Zaloguj</button>
            </a>
            <?php if(isset($_SESSION['user'])): ?>
                <p>Jesteś zalogowany jako: <?php echo $_SESSION['user']->getEmail(); ?></p>
                <a href="logout">
                    <button type="button" class="btn btn-primary btn-lg w-100 mb-5">Wyloguj</button>
                </a>
            <?php endif; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>