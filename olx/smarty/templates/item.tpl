{include file="header.tpl"}

    <main class="row mt-3">
        <h1>{$item.name}</h1>
        <div class="col-6">
            <img class="img-fluid" src="{$item.url}"> 
        </div>
        <div class="col-6">
            
            Sprzedający: <a href="addMessage.php?reciever_id={$item.seller_id}&reciever={$item.login}">{$item.login}</a> <br>    
            Cena: {$item.price}

        </div>
        <h3>Komentarze:</h3>
        {foreach from=$commentsList item=comment}
            <div class="col-2">{$comment.time}</div>
            <div class="col-2">{$comment.login}</div>
            <div class="col-7">{$comment.content}</div>
            <div class="col-1"><button class="btn btn-primary" data-parent="{$comment.id}" onclick="reply(this)">Odpowiedz</button></div>
            {if isset($comment.childList) }
                {foreach from=$comment.childList item=childComment}
                    <div class="col-2 offset-1">{$childComment.time}</div>
                    <div class="col-8">{$childComment.content}</div>
                    <div class="col-1"><button class="btn btn-primary" data-parent="{$childComment.id}" onclick="reply(this)">Odpowiedz</button></div>
                {/foreach}
               
            {/if}
        {/foreach}
        
        <h3>Dodaj komentarz:</h3>
        <form action="addComment.php" method="post">
            <input type="hidden" name="item_id" value="{$item_id}">
            <input type="hidden" name="author_id" value="{$author_id}">
            <input type="hidden" name="parent" value="NULL" id="parentComment">
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

{include file="footer.tpl"}