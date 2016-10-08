<?php
/* Smarty version 3.1.29, created on 2016-05-19 14:41:03
  from "C:\wamp64\www\views\default\loading.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573dd07f731a05_37672414',
  'file_dependency' => 
  array (
    '128552f7ff39ce9e8b1f5340e0e7634da2167c11' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\loading.tpl',
      1 => 1463668859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573dd07f731a05_37672414 ($_smarty_tpl) {
?>

    <!-- Main -->
    <section id="main" class="container 50%">
        <header>
            <h2>Панель администратора</h2>
        </header>
        <div class="box">
            <form action="../www/?controller=admin&action=load" method="post" action="#" >
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
