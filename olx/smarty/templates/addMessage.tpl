{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col">
            <form action="addMessage.php" method="post">
                <input type="hidden" name="sender_id" value="{$sender_id}">
                <input type="text" name="reviever_id">
                <input type="text" name="topic" id="messageTopic">
                <input type="text" name="content" id="messageContent">
                <button type="submit" class="btn btn-primary">Wyśłij wiadomość</button>
            </form>
        </div>
    </div>
</div><!-- /container-->

{include file="footer.tpl"}