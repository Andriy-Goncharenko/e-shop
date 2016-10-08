<?php
/* Smarty version 3.1.29, created on 2016-10-07 14:32:02
  from "C:\wamp64\www\royal\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f7b1e2e62f65_21767574',
  'file_dependency' => 
  array (
    '72232b5814f386f1c878f2298f852d8b9a6868d9' => 
    array (
      0 => 'C:\\wamp64\\www\\royal\\views\\default\\header.tpl',
      1 => 1475850000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_57f7b1e2e62f65_21767574 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Доставка цветов Киев | Royal flowers</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Доставка цветов по Киеву. Интернет-магазин Royal flowers предлагает заказать и купить цветы."/>
		<meta name="keywords" content="купить цветы недорого,доставка цветов киев,Доставка цветов Киев, Доставка цветов по Киеву, Заказ цветов, Заказ цветов Киев,доставка цветов киев, заказ цветов, служба доставки цветов киев, заказать букет, купить букет, букет роз, купить букет, заказать цветы, букет роз заказать, компания по доставке цветов Киев" />
        <meta name="yandex-verification" content="836080988a4366d0" /> 
		<link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="assets/css/main.css" />
 
</head>
    <body class="landing">
        <!— Yandex.Metrika counter —>
<?php echo '<script'; ?>
 src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
try {
var yaCounter39289555 = new Ya.Metrika({
id:39289555,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
ecommerce:"dataLayer"
});
} catch(e) { }
<?php echo '</script'; ?>
>
<noscript><div><img src="https://mc.yandex.ru/watch/39289555" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>
		<div id="page-wrapper">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- Banner -->
            <section id="banner">
                <h2>Royal flowers</h2>
                <p>Доставка цветов по Киеву от "Royal flowers"</p>
                <ul class="actions">
                    <li><a href="../?controller=quickorder" class="button">Быстрый заказ</a></li>
                    <li><a href="../?controller=contact" class="button">Контакты</a></li>
                </ul>
            </section>

<?php }
}
