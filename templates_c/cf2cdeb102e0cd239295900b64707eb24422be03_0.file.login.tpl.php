<?php
/* Smarty version 3.1.39, created on 2021-10-14 20:32:07
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616877a7ab41f3_83877898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf2cdeb102e0cd239295900b64707eb24422be03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\login.tpl',
      1 => 1634236325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616877a7ab41f3_83877898 (Smarty_Internal_Template $_smarty_tpl) {
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

<a class="btn btn-primary" href="home">volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
