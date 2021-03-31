{include file="header.tpl"}
<div class="item">
    <h1>{$item.name}</h1>
    <div class="itemImage">
        <img src="{$item.url}"> 
    </div>
    Cena: {$item.price}<br>
    <a href="index.php">Powrót na stronę główną</a>
</div>
{include file="footer.tpl"}