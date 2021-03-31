{include file="header.tpl"}
<div class="container">
    <header class="row mt-5">
        {if isset($login)}
        <div class="col-8"><h3>Witaj {$login}!</h3></div>
        <div class="col-2"><a href="addItem.php"><button type="button" class="btn btn-primary">Wystaw przedmiot</button></a></div>
        <div class="col-2"><a href="logout.php"><button type="button" class="btn btn-primary">Wyloguj się</button></a></div>
        {else}
        <div class="col">Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a></div>
        {/if}
    </header>
    <main class="row mt-3">
        <div class="col-2">
            <h3 class="mb-3">Kategorie</h3>
            <ul>
            {foreach from=$categoryList item=category}
                <li><a href="index.php?category={$category.id}">{$category.name}</a></li>
            {/foreach}
            </ul>
        </div>
        <div class="col-10">
            <h3 class="mb-3">Produkty</h3>

            <table class="table table-striped">
            <tr><th>Obrazek</th><th>Nazwa przedmiotu</th><th>Cena</th></tr>
            {foreach from=$productList item=product}
            <tr>
                <td class="col-2"><img class="img-fluid" alt="{$product.name}" src="{$product.url}"></td>
                <td class="col-8"><a href="item.php?id={$product.id}">{$product.name}</a></td>
                <td class="col-2">{$product.price}</td>
            </tr>
            {/foreach}
            
            </table>
        </div>
    </main>
</div><!-- /container-->


<div id="lewy">

</div>
<div id="prawy">


</div>
{include file="footer.tpl"}