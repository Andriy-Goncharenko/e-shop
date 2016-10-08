
<header>
    <h2>{$pageTitle}</h2>
</header>
<div class="box">
   {if !$rsProducts}
       <table class="alt">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Мобильный номер</th>
                <th>Почта</th>
                <th>Дата</th>
                <th>Заказ</th>
                <th>Доставка</th>
            </tr>
        </thead>
    </table>
       {else}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Катигория</th>
                <th>Цена</th>
                <th>Картинка</th>
                <th>Статус</th>
            </tr>
        </thead>

        <tbody> 
            {foreach $rsProducts as $item name=produts}
            <tr>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td>{$item['category_id']}</td>
                <td>{$item['price']}</td>
                <td>{$item['Image']}</td>
                <td>{$item['description']}</td>
                <td>{$item['status']}</td>
            </tr>
            {/foreach}
            </tbody>											
    </table>
</div>
    {/if}					
</section>
