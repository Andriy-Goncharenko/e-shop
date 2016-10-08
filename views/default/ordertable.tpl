
<div class="box">
    <h2>{$pageTitle}</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Мобильный номер</th>
                <th>Дата</th>
                <th>Заказ</th>
                <th>Цена</th>
            </tr>
        </thead>

        <tbody> 
            {foreach $rsProducts as $item name=produts}
            <tr>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td>{$item['telephone']}</td>
                <td>{$item['data']}</td>
                <td><a href="..?controller=admin&action=order&id={$item['id']}">Просмотр</a></td>
                <td>{$item['price']}</td>
				 <td><a href="..?controller=admin&action=orderdelete&id={$item['id']}">Удалить</a></td>
            </tr>
            {/foreach}
            </tbody>											
    </table>
</div>			
</body>

