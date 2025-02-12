<?php
/* Smarty version 5.4.3, created on 2025-02-12 14:03:52
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ac9c38384de5_91395538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4f2db397e5c1cc6452fdc71c1e7d8a958b20f9' => 
    array (
      0 => 'login.tpl',
      1 => 1739365278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67ac9c38384de5_91395538 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\phpLoginForm\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
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
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
