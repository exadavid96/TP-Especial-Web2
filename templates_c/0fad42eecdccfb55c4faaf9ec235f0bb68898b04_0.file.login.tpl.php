<?php
/* Smarty version 3.1.39, created on 2021-10-14 06:52:14
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167b77eec29b7_65195847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fad42eecdccfb55c4faaf9ec235f0bb68898b04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.2\\templates\\login.tpl',
      1 => 1634186858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6167b77eec29b7_65195847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

        <form action="verifyLogin" method="POST">
            <input type="text" name="user" id="user" placeholder="ingrese el usuario">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>

        <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
