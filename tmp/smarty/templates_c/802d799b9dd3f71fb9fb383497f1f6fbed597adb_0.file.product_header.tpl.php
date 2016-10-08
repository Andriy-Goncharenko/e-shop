<?php
/* Smarty version 3.1.29, created on 2016-06-21 21:08:28
  from "/var/www/graf2933/data/www/views/default/product_header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5769829c880fc3_20066585',
  'file_dependency' => 
  array (
    '802d799b9dd3f71fb9fb383497f1f6fbed597adb' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/product_header.tpl',
      1 => 1466529881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_5769829c880fc3_20066585 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
 | Royal flowers</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
"/>
        <meta name="keywords" content="купить цветы недорого,доставка цветов киев,Доставка цветов Киев, Доставка цветов по Киеву, Заказ цветов, Заказ цветов Киев,доставка цветов киев, заказ цветов, служба доставки цветов киев, заказать букет, купить букет, букет роз, купить букет, заказать цветы, букет роз заказать, компания по доставке цветов Киев" />
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
                <p>Доставка цветов по Киеву от "Royal flowers"</p>
                <ul class="actions">
                    <li><a href="../?controller=quickorder" class="button">Быстрый заказ</a></li>
                    <li><a href="../?controller=contact" class="button">Контакты</a></li>
                </ul>
            </section>

<?php }
}
