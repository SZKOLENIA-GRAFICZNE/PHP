{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col">
            <form action="addMessage.php" method="post">
                <input class="form-control" type="hidden" name="sender_id" value="{$sender_id}">
                <label class="form-label" for="receiver">Odbiorca: </label><br>
                <input class="form-control" type="hidden" name="reciever_id" id="receiver_id" value="{$reciever_id}">
                <input class="form-control" type="text" name="reciever" id="receiver" value="{$reciever}" readonly>
                <label class="form-label" for="messageTopic">Temat: </label><br>
                <input class="form-control" type="text" name="topic" id="messageTopic">
                <label class="form-label" for="messageContent">Treść: </label><br>
                <input class="form-control" type="text" name="content" id="messageContent">
                <button type="submit" class="mt-3 btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </div>
</div><!-- /container-->

{include file="footer.tpl"}