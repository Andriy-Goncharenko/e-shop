<?php
/* Smarty version 3.1.29, created on 2016-05-20 07:39:03
  from "C:\wamp64\www\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ebf175bad71_55390119',
  'file_dependency' => 
  array (
    'f5955f5f2b755aa38b55727174a6014ce0272e79' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\header.tpl',
      1 => 1463729880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_573ebf175bad71_55390119 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Royal flowers |Доставка цветов Киев|<?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="Доставка цветов Киев, Доставка цветов по Киеву, Заказ цветов, Заказ цветов Киев,доставка цветов киев, заказ цветов, служба доставки цветов киев, заказать букет, купить букет, букет роз, купить букет, заказать цветы, букет роз заказать, компания по доставке цветов Киев" />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="landing">
        <div id="page-wrapper">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- Banner -->
            <section id="banner">
                <h2>Royal flowers</h2>
                <p>Доставка цветов, магазин "Royal flowers"</p>
                <ul class="actions">
                    <li><a href="../www/?controller=quickorder" class="button">Быстрий заказ</a></li>
                    <li><a href="../www/?controller=contact" class="button">Контакты</a></li>
                </ul>
            </section>

<?php }
}
