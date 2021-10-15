{include file="templates/header.tpl"}

    {if $categoria}

    <h1>{$titulo} {$categoria[0]->nombre}</h1>

    <ul>
    {foreach from=$categoria item=$producto}
    
        <li class="list-group-item">
                <div class="card-body"> 
                    {$producto->id_categoria} : {$producto->producto}: {$producto->descripcion} : ${$producto->precio}
                </div>
            </li>    
    {/foreach}
    </ul>
    {else}
        <h2>No existen productos en esta Categoria!</h2>        
    {/if}
    <a class="btn btn-primary" href="../home">volver</a>
{include file="templates/footer.tpl"}