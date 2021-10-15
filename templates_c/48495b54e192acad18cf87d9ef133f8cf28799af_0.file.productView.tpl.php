<?php
/* Smarty version 3.1.39, created on 2021-10-14 08:09:57
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.2\templates\productView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167c9b5922e87_72934340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48495b54e192acad18cf87d9ef133f8cf28799af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.2\\templates\\productView.tpl',
      1 => 1634191794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6167c9b5922e87_72934340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Producto Nro: <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</h1>

    <ul>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
        <li>Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
    </ul>
    <a class="btn btn-primary" href="../home">volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
