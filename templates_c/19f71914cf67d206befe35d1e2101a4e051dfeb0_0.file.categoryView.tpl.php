<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:53:31
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\categoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c2fbe5b738_79024100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19f71914cf67d206befe35d1e2101a4e051dfeb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\categoryView.tpl',
      1 => 1634255610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168c2fbe5b738_79024100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>

    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['categoria']->value[0]->nombre;?>
</h1>

    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
    
        <li class="list-group-item">
                <div class="card-body"> 
                    <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 : $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

                </div>
            </li>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php } else { ?>
        <h2>No existen productos en esta Categoria!</h2>        
    <?php }?>
    <a class="btn btn-primary" href="../home">volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
