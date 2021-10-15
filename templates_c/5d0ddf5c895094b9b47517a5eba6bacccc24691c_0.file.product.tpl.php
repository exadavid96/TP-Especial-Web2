<?php
/* Smarty version 3.1.39, created on 2021-10-13 06:01:53
  from 'C:\xampp\htdocs\web2\codigo\TPE\electrizante1.0\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61665a3137a8a8_14439590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0ddf5c895094b9b47517a5eba6bacccc24691c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\TPE\\electrizante1.0\\templates\\product.tpl',
      1 => 1634097711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61665a3137a8a8_14439590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <li class="list-group-item">
            <div class="card-body"> 
                <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

                <a class="btn btn-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Borrar</a>
            </div>
        </li>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <h2>Crear producto</h2>

        <form action="createProduct" method="POST">
            <input type="text" name="nombre" id="nombre" placeholder="nombre del producto">
            <input type="text" name="descripcion" id="descripcion" placeholder="descripcion del producto">
            <input type="number" name="precio" id="precio" placeholder="precio del producto">
            <input type="number" name="categoria" id="categoria" placeholder="categoria a la que pertenece el producto">
            <input type="submit" class="btn btn-primary" value="Guardar">
        </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
