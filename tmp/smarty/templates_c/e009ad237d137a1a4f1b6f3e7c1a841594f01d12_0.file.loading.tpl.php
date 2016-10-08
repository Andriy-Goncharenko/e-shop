<?php
/* Smarty version 3.1.29, created on 2016-05-20 20:20:18
  from "/var/www/graf2933/data/www/views/default/loading.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f4752e47ed5_83649167',
  'file_dependency' => 
  array (
    'e009ad237d137a1a4f1b6f3e7c1a841594f01d12' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/loading.tpl',
      1 => 1463764775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573f4752e47ed5_83649167 ($_smarty_tpl) {
?>

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




<?php }
}
