<section id="main" class="container">
<div class="row">
    
     {foreach $rsChildCats as $item name=products}
    <div class="6u 12u(narrower)">   
    <section class="box special">
        <span class="image fit"><img src="images/products/{$item['Image']}"alt="" /></span>
        <h3 href="../?controller=product&id={$item['id']}/">{$item['name']}</h3>
        <p>{$item['price']} Грн</p>
        <ul  class="actions">
        <li><a href="../?controller=product&id={$item['id']}" class="button alt">Просмотр</a></li>
        <li><a id="addCart_{$item['id']}" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart({$item['id']})"class="button alt">Купить</a></li>
        </ul>
    </section>
</div>       
{/foreach} 
    
    {foreach $rsProducts as $item name=products}
    <div class="6u 12u(narrower)">   
    <section class="box special">
        <span class="image fit"><img src="images/products/{$item['Image']}"alt="" /></span>
        <h3 href="../?controller=product&id={$item['id']}/">{$item['name']}</h3>
         <p>{$item['price']} Грн</p>
        <ul  class="actions">
        <li><a href="../?controller=product&id={$item['id']}" class="button alt">Просмотр</a></li>
        <li><a id="addCart_{$item['id']}" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart({$item['id']})"class="button alt">Купить</a></li>
        </ul>
    </section>
</div>       
{/foreach}        

    
</section>
