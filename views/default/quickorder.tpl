<section id="main" class="container 75%">
    <header>
        <h2>Быстрый заказ</h2>
    </header>
    <div class="box">
        <form action="../?controller=quickorder&action=set" method="post" action="#">
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="name" id="name" value="" placeholder="Имя" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <input type="text" name="subject" id="subject" value="" placeholder="Контактный телефон" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <textarea name="message" id="message" placeholder="Ваши пожелания" rows="6"></textarea>
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
