{include file="header.tpl"}
<div class="container">
    <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
        <form action="profile" method="post">
            <label for="firstName" class="form-label mb-1">Imię:</label>
            <input type="text" value="{$firstName}" name="firstName" id="firstName" class="form-control mb-3" required>
            <label for="lastName" class="form-label mb-1">Nazwisko:</label>
            <input type="text" value="{$lastName}" name="lastName" id="lastName" class="form-control mb-3" required>
            <input type="submit" value="Zapisz" class="btn btn-primary w-100 mb-5">
        </form>

        <form action="profile" method="post">
            <label for="password" class="form-label mb-1">Hasło:</label>
            <input type="password" name="password" id="password" class="form-control mb-3" required>
            <label for="passwordRepeat" class="form-label mb-1">Hasło ponownie:</label>
            <input type="password" name="passwordRepeat" id="passwordRepeat" class="form-control mb-3" required>
            <input type="submit" value="Zmień hasło" class="btn btn-primary w-100">
        </form>
    </div>
</div>
{include file="footer.tpl"}