<?php
/* Smarty version 3.1.29, created on 2016-05-20 20:19:57
  from "/var/www/graf2933/data/www/views/default/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f473df10ae6_05506379',
  'file_dependency' => 
  array (
    '7cf56430e0c5674b268f6a8e7d61d5bb18bd9e02' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/cart.tpl',
      1 => 1463764773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573f473df10ae6_05506379 ($_smarty_tpl) {
?>
<section id="main" class="container 75%">
<header>
    <h2>Ваш заказ</h2>
</header>
<div class="box">
   <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Цена (грн)</th>
                <th></th>
            </tr>
        </thead>
    </table>
       <?php } else { ?>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Цена (грн)</th>
                <th></th>
            </tr>
        </thead>

        <tbody> 
            <?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_produts_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_produts_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                <td ><a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="javascript:document.location.reload()" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" >Удалить</a></td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_produts_0_saved_local_item;
}
if ($__foreach_produts_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_produts_0_saved_item;
}
?>
            </tbody>											
    </table>
<ul class="actions">
    <li><a href="../?controller=checkout" class="button special">Оформить</a></li></ul>
</div>
    <?php }?>					
</section>
<?php }
}
