{include file="templates/header.tpl"}

<h1>{$titulo}</h1>

{if $categorias}
    <ul>
    {foreach from=$categorias item=$categoria}
        <li class="list-group-item">
            <div class="card-body"> 
                <a class="btn btn-primary" href="viewCategory/{$categoria->id_categoria}">ver</a>
                {$categoria->id_categoria} : {$categoria->nombre}
            </div>
        </li>    
    {/foreach}
{/if}
<a class="btn btn-primary" href="../home">volver</a>
    </ul>

    
{include file="templates/footer.tpl"}

