<?php
/* Smarty version 5.4.3, created on 2025-01-08 14:14:36
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_677e7a3cce46f0_17176297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d24ee044c04e1416c92647566e77e8b1e25170e' => 
    array (
      0 => 'index.tpl',
      1 => 1736342070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_677e7a3cce46f0_17176297 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\phpLoginForm\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
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
            <?php if ($_smarty_tpl->getValue('isUserLogged')) {?>
                <!-- jeśli tak, wyświetlamy jego email -->
                <p>Jesteś zalogowany jako: <?php echo $_smarty_tpl->getValue('user');?>
</p>
                <a href="logout">
                    <button type="button" class="btn btn-primary btn-lg w-100 mb-5">Wyloguj</button>
                </a>
            <?php }?>
        </div>
    </div>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
