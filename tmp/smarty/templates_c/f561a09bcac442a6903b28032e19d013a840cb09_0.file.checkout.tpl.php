<?php
/* Smarty version 3.1.29, created on 2016-05-19 06:26:43
  from "C:\wamp64\www\views\default\checkout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573d5ca3329910_42164409',
  'file_dependency' => 
  array (
    'f561a09bcac442a6903b28032e19d013a840cb09' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\checkout.tpl',
      1 => 1463638885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573d5ca3329910_42164409 ($_smarty_tpl) {
?>
<section id="main" class="container 75%">
    <header>
        <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
    </header>
    <div class="box">
        <form action="../www/?controller=checkout&action=post" method="post" action="#">
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
                    <div class="select-wrapper">
                        <select name="category" id="category">
                            <option value="">- Выберите способ доставки -</option>
                            <option value="1">Бесплатная доставка будет в течении трех часов после оплаты.</option>
                            <option value="2">Точное время доставки-100 грн.</option>
                            <option value="3">Доставка с 7-9 утра 70 грн.</option>
                            <option value="4">Доставка с 21-24 -100 грн.</option>
                            <option value="5">Ночная доставка 200 грн.</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="submit" value="Отправить"name="submit" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
<?php }
}
