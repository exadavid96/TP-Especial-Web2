<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:53:36
  from 'C:\xampp\htdocs\web2\codigo\electrizante1.3\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c3008615d6_66283612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '698560d534d663a29092505f49eb4abb62db2c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\codigo\\electrizante1.3\\templates\\categories.tpl',
      1 => 1634255582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168c3008615d6_66283612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['categorias']->value) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <li class="list-group-item">
            <div class="card-body"> 
                <a class="btn btn-primary" href="viewCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">ver</a>
                <?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
 : <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

            </div>
        </li>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<a class="btn btn-primary" href="../home">volver</a>
    </ul>

    
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
