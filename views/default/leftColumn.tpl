<header id="header" class="alt">
    <h1><a href="../" >Royal flowers</a></h1>
        <nav id="nav">
            <ul>
                 <li><a href="../?controller=bouquets">Букеты</a></li> 
                {foreach $rsCategories as $item}
    
                    <li>
                    <a href="../?controller=category&id={$item['id']}">{$item['name']}</a> <ul>
                    {if isset($item['children'])}
                        {foreach $item['children'] as $itemChild}
                            <li><a href="../?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a></li>
                        {/foreach}
                        </ul>
                        {/if}
                    </li>
                    {/foreach} 
                      
                 <li><a href="../?controller=price">Цены</a>
                 <ul>
                 <li><a href="../?controller=price&price=250">до 250 грн</a></li>
                 <li><a href="../?controller=price&price=500">до 500 грн</a></li>
                 <li><a href="../?controller=price&price=800">до 800 грн</a></li>
                 <li><a href="../?controller=price&price=1000">до 1000 грн</a></li>
                 <li><a href="../?controller=price&action=from&price=1000">от 1000 грн</a></li>
                 </ul> 
                 </li>
                 
                     <li> <a class="icon fa-search" href="../?controller=search"></a>
                     <li> <a id="cartCntItems" href="../?controller=cart">Корзина({if $cartCntItems >0}{$cartCntItems}{else}0{/if})</a>
                      
            </li>
            </ul>
        </nav>
</header>
                
           