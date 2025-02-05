<?php
/* Smarty version 5.4.3, created on 2025-02-05 14:01:24
  from 'file:upload.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a361245fab75_13881499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee61098b28c78dbeb4f467c3e01766239c384d78' => 
    array (
      0 => 'upload.tpl',
      1 => 1738760481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67a361245fab75_13881499 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\phpLoginForm\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <form action="upload" method="post" 
            enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Wgraj zdjęcie">
    </form>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
