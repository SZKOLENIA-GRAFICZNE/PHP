{include file="header.tpl"}
<header>
{if isset($login)}
    Witaj {$login}! <br>
    <a href="logout.php">Wyloguj się</a><br>
    <a href="addItem.php">Wystaw przedmiot</a><br>
{else}
    Witaj nieznajomy. Zaloguj się <a href="login.php">tutaj</a>
{/if}
</header>

<div id="lewy">
<h3>Kategorie</h3>
<ul>
{foreach from=$categoryList item=category}
    <li><a href="index.php?category={$category.id}">{$category.name}</a></li>
{/foreach}
</ul>
</div>
<div id="prawy">
<h3>Produkty</h3>

<table>
<tr><th>Nazwa przedmiotu</th><th>Cena</th></tr>
{foreach from=$productList item=product}
<tr>
    <td>{$product.id}</td>
    <td>{$product.name}</td>
    <td>{$product.price}</td>
</tr>
{/foreach}

</table>

</div>
{include file="footer.tpl"}