{include file="header.tpl"}
<!-- pokaż tą część jeśli nie wysłaliśmy formularza -->
<div class="container">
    <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
        <h1 class="mb-3">Zaloguj się</h1>
        <form action="login" method="post">
            <!-- pole na email oraz labelka do niego -->
            <label for="emailInput" class="form-label mb-1">Login:</label>
            <input type="email" name="emailInput" id="emailInput" class="form-control mb-3" required>
            <!-- pole na hasło oraz labelka do niego -->
            <label for="passwordInput" class="form-label mb-1">Hasło:</label>
            <input type="password" name="passwordInput" id="passwordInput" class="form-control mb-3" required>
            <!-- guzik wyślij -->
            <input type="submit" name="submit" value="Zaloguj" class="btn btn-primary w-100">
        </form>
    </div>
</div>
{include file="footer.tpl"}