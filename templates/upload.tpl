{include file="header.tpl"}
<div class="container">
    <div class="col-8 col-lg-4 offset-2 offset-lg-4 text-center pt-3">
        <h1 class="mb-5">Wgraj zdjęcie</h1>
        <form action="upload" method="post" enctype="multipart/form-data">
            <label for="file" class="form-label mb-1">Wybierz plik:</label>
            <input type="file" name="file" class="form-control mb-3" required>
            <input type="submit" value="Wgraj zdjęcie" class="btn btn-primary w-100">
        </form>
    </div>
</div>
{include file="footer.tpl"}