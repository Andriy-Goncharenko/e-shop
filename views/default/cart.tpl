<section id="main" class="container 75%">
<header>
    <h2>Ваш заказ</h2>
</header>
<div class="box">
   {if !$rsProducts}
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Цена (грн)</th>
                <th></th>
            </tr>
        </thead>
    </table>
       {else}
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Цена (грн)</th>
                <th></th>
            </tr>
        </thead>

        <tbody> 
            {foreach $rsProducts as $item name=produts}
            <tr>
                <td>{$item['name']}</td>
                <td>{$item['description']}</td>
                <td>{$item['price']}</td>
                <td ><a id="removeCart_{$item['id']}" href="javascript:document.location.reload()" onclick="removeFromCart({$item['id']})" >Удалить</a></td>
            </tr>
            {/foreach}
            </tbody>											
    </table>
<ul class="actions">
    <li><a href="../?controller=checkout" class="button special">Оформить</a></li></ul>
</div>
    {/if}					
</section>
