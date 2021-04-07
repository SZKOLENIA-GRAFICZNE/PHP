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
        <a href="index.php">Powrót na stronę główną</a>
    </header>
    <main class="row mt-3">
        <h1>{$item.name}</h1>
        <div class="col-6">
            <img class="img-fluid" src="{$item.url}"> 
        </div>
        <div class="col-6">
            
                
            Cena: {$item.price}
    
        </div>
        <h3>Komentarze:</h3>
        {foreach from=$commentsList item=comment}
            <div class="col-2">{$comment.time}</div>
            <div class="col-10">{$comment.content}</div>
        {/foreach}
        
        <h3>Dodaj komentarz:</h3>
        <form action="addComment.php" method="post">
            <input type="hidden" name="item_id" value="{$item_id}">
            <input type="hidden" name="author_id" value="{$author_id}">
            <input class="form-control" type="text" name="content">
            {if $author_id != 0}
                <button class="mt-3 btn btn-primary " type="submit">Dodaj komentarz</button>
            {else}
                <a href="login.php">
                    Zaloguj się żeby komentować
                </a>
            {/if}
            
        </form>
    </main>

</div><!-- /container-->

{include file="footer.tpl"}