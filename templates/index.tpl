{include file="header.tpl"}
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
            <!-- sprawdzamy czy użytkownik jest zalogowany -->
            {if $isUserLogged}
                <!-- jeśli tak, wyświetlamy jego email -->
                <p>Jesteś zalogowany jako: {$user}</p>
                <a href="logout">
                    <button type="button" class="btn btn-primary btn-lg w-100 mb-5">Wyloguj</button>
                </a>
            {/if}
        </div>
    </div>
{include file="footer.tpl"}