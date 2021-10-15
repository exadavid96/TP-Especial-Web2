<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:02:43
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\productView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61687ed3d913f4_51009922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807f4cb885aa663c55cf770af6121163902003f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\productView.tpl',
      1 => 1634237367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61687ed3d913f4_51009922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Producto Nro: <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</h1>

    <ul>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
        <li>Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <li>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</li>
    </ul>
    <a class="btn btn-primary" href="../home">volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
