<section id="main" class="container 100%">
    <header>
        <h2>Изменить букет</h2>
    </header>
    <div class="box">
        <form action="../?controller=update&action=update" method="post">
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="name" id="name" value="{$rsProduct['name']}" placeholder="Имя Букета" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="price" id="price" value="{$rsProduct['price']}" placeholder="Цена" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <textarea name="description" id="description" value="{$rsProduct['description']}" placeholder="Описание" rows="6"></textarea>
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="submit" name="submit" value="Отправить" /></li>                        
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>

