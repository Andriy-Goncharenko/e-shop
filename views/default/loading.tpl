
    <!-- Main -->
    <section id="main" class="container 50%">
        <header>
            <h2>Панель администратора</h2>
        </header>
        <div class="box">
            <form action="../?controller=admin&action=load" method="post" action="#" >
                <div class="row uniform 50%">
                    <div class="6u 12u(mobilep)">
                        <input type="text" name="name" id="name" value="" placeholder="Логин" />
                    </div>
                    <div class="6u 12u(mobilep)">
                        <input type="password" name="password" id="password" value="" placeholder="Пороль" />
                    </div>
                </div>

                <div class="row uniform">
                    <div class="12u">
                        <ul class="actions align">
                            <li><input type="submit" name="submit" value="Войти" /></li>

                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>




