<?php
/* Smarty version 5.4.3, created on 2025-02-12 14:06:17
  from 'file:logout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ac9cc9f00b92_39872957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67581176c3f4ba9d1b83b2bf4222995b57114321' => 
    array (
      0 => 'logout.tpl',
      1 => 1739365536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67ac9cc9f00b92_39872957 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\phpLoginForm\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    
        <h1><?php echo $_smarty_tpl->getValue('message');?>
</h1>

    <a href="/phploginform">Powrót do głównej strony</a>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
