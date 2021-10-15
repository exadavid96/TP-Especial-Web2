{include file="templates/header.tpl"}

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
    
<h1>{$titulo}</h1>

    <ul>
    {foreach from=$productosConCategoria item=$producto}
        <li class="list-group-item">
            <div class="card-body"> 
                {$producto->id_producto} : {$producto->nombre} : {$producto->descripcion} : ${$producto->precio} : {$producto->categoria}
                <a class="btn btn-primary" href="viewProduct/{$producto->id_producto}">ver</a>
                <a class="btn btn-danger" href="deleteProduct/{$producto->id_producto}">Borrar</a>
            </div>
        </li>    
    {/foreach}
    </ul>
<a class="btn btn-dark" href="viewCategories">Categorias</a>

{include file="templates/footer.tpl"}