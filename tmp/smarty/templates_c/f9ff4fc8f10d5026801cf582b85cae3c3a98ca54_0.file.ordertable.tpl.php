<?php
/* Smarty version 3.1.29, created on 2016-05-19 15:12:34
  from "C:\wamp64\www\views\default\ordertable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573dd7e23a6ff2_73012780',
  'file_dependency' => 
  array (
    'f9ff4fc8f10d5026801cf582b85cae3c3a98ca54' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\ordertable.tpl',
      1 => 1463670749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573dd7e23a6ff2_73012780 ($_smarty_tpl) {
?>

<header>
    <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
</header>
<div class="box">
   <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
       <table class="alt">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Мобильный номер</th>
                <th>Почта</th>
                <th>Дата</th>
                <th>Заказ</th>
                <th>Доставка</th>
            </tr>
        </thead>
    </table>
       <?php } else { ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Мобильный номер</th>
                <th>Почта</th>
                <th>Дата</th>
                <th>Заказ</th>
                <th>Доставка</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
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
</div>
    <?php }?>					
</section>

<?php }
}
