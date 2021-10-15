<?php
/* Smarty version 3.1.39, created on 2021-10-14 14:57:01
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168291d63ebb9_99132130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae910559ac1637bfe14077f2f536cc663826631' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\register.tpl',
      1 => 1634179221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168291d63ebb9_99132130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

        <form action="userRegister" method="POST">
            <input type="text" name="user" id="user" placeholder="ingrese el nuevo usuario">
            <input type="password" name="password" id="password" placeholder="ingrese su password">
            <input type="submit" class="btn btn-primary" value="Registrar">
        </form>

        <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
