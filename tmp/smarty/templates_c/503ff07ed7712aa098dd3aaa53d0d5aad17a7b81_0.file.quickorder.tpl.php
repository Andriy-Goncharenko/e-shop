<?php
/* Smarty version 3.1.29, created on 2016-06-18 14:10:02
  from "/var/www/graf2933/data/www/views/default/quickorder.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57652c0a41b9d2_67262348',
  'file_dependency' => 
  array (
    '503ff07ed7712aa098dd3aaa53d0d5aad17a7b81' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/quickorder.tpl',
      1 => 1466248198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57652c0a41b9d2_67262348 ($_smarty_tpl) {
?>
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
<?php }
}
