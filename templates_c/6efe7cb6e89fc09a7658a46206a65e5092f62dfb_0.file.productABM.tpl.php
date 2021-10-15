<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:25:03
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\productABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168921f5ee774_66795538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6efe7cb6e89fc09a7658a46206a65e5092f62dfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\productABM.tpl',
      1 => 1634243096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168921f5ee774_66795538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a class="btn btn-success" href="register">register</a>
<a class="btn btn-danger" href="logout">logout</a>
<a class="btn btn-primary" href="login">login</a>
    
<h2>Crear Producto</h2>

    <form action="createProduct" method="POST">
        <input type="text" name="nombre" id="nombre" placeholder="nombre del producto" value="">
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion del producto" value="">
        <input type="number" name="precio" id="precio" placeholder="precio del producto" value="">
        <input type="number" name="categoria" id="categoria" placeholder="categoria a la que pertenece el producto" value="">
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>


<h2>Modificar Producto</h2>

    <form action="updateProduct" method="POST">
        <input type="text" name="newName" id="newName" placeholder="nuevo nombre">
        <input type="text" name="newDescription" id="newDescription" placeholder="nueva descripcion">
        <input type="number" name="newPrice" id="newPrice" placeholder="nuevo precio">
        <input type="number" name="id" id="id" placeholder="id del producto">
        <input type="submit" class="btn btn-warning" value="Actualizar">
    </form>
    
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosConCategoria']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <li class="list-group-item">
            <div class="card-body"> 
                <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 : $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>

                <a class="btn btn-primary" href="viewProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">ver</a>
                <a class="btn btn-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Borrar</a>
            </div>
        </li>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<a class="btn btn-dark" href="viewCategories">Categorias</a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
