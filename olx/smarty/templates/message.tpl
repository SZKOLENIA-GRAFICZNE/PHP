{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
<th>Czas</th>
<th>Nadawca</th>
<th>Temat</th>
            
            {foreach from=$messageList item=message}
                <tr>
                    <td>{$message.time}</td>
                    <td>{$message.login}</td>
                    <td>{$message.topic}</td>
                </tr>
                <tr>
                    <td colspan="3">{$message.content}</td>
                </tr>
            {/foreach}
        </table>
        </div>
    </div>
</div><!-- /container-->

{include file="footer.tpl"}