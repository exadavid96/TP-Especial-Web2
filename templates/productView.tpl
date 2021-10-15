{include file="templates/header.tpl"}

<h1>Producto Nro: {$producto->id_producto}</h1>

    <ul>
        <li>Nombre: {$producto->nombre}</li>
        <li>Descripcion: {$producto->descripcion}</li>
        <li>Precio: ${$producto->precio}</li>
        <li>Categoria: {$producto->categoria}</li>
    </ul>
    <a class="btn btn-primary" href="../home">volver</a>
{include file="templates/footer.tpl"}