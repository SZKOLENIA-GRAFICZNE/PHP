{include file="header.tpl"}
<div class="container">
    <main class="row">
        <div class="col-12 col-md-8 offset-md-2 col-xl-4 offset-xl-4 mt-5">
            <form action="" method="post" enctype="multipart/form-data">
                <label class="form-label" for="itemName">Nazwa przedmiotu: </label><br>
                <input class="form-control w-100" type="text" name="itemName" id="itemName" required><br>
                <label class="form-label" for="itemPrice">Cena zł: </label><br>
                <input class="form-control w-100" type="number" name="itemPrice" id="itemPrice" required><br>
                <label class="form-label" for="itemCategory">Kategoria: </label><br>
                <select class="form-select" name="category" id="itemCategory">
                {foreach from=$categoryList item=category}
                    <option value="{$category.id}">{$category.name}</option>
                {/foreach}
        
                </select><br>
                <label for="itemImage">Zdjęcie: </label><br>
                <input class="form-control w-100" type="file" name="itemImage" id="itemImage" required><br>
                <button type="submit" class="btn btn-primary w-100">Wystaw na sprzedaż</button>
            </form>
        </div>
    </main>
    
</div>
    
{include file="footer.tpl"}