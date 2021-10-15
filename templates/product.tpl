{include file="templates/header.tpl"}

<a class="btn btn-success" href="register">register</a>
<a class="btn btn-danger" href="logout">logout</a>
<a class="btn btn-primary" href="login">login</a>

    <h1>{$titulo}</h1>

    <ul>
    {foreach from=$productosConCategoria item=$producto}
        <li class="list-group-item">
            <div class="card-body"> 
                <a class="btn btn-primary" href="viewProduct/{$producto->id_producto}">ver</a>
                {$producto->id_producto} : {$producto->nombre} : {$producto->descripcion} : ${$producto->precio} : {$producto->categoria}
            </div>
        </li>    
    {/foreach}
    </ul>

<a class="btn btn-dark" href="viewCategories">Categorias</a>


{include file="templates/footer.tpl"}