<section id="main" class="container ">
    <div class="box">

            <span class="image left"><img src="/images/products/{$rsProduct['Image']}"></span>
                <h3>{$rsProduct['name']}</h3>
                <p>{$rsProduct['price']} Грн</p></br>
                    <h1> Состав:</h1>
                    <p>{$rsProduct['description']}</p>
                   <div class="row uniform 50%">
											<div class="12u">

                  
                        <li><a id="addCart_{$rsProduct['id']}" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart({$rsProduct['id']})"class="button fit">Купить</a></li>
</div>
</div>
                </div>
</section>
