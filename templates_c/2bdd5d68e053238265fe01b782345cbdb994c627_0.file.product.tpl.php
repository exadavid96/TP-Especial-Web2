<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:53:36
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a6e05b3085_62701127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bdd5d68e053238265fe01b782345cbdb994c627' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\product.tpl',
      1 => 1634248415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a6e05b3085_62701127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a class="btn btn-success" href="register">register</a>
<a class="btn btn-danger" href="logout">logout</a>
<a class="btn btn-primary" href="login">login</a>

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
                <a class="btn btn-primary" href="viewProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">ver</a>
                <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 : $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>

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
