<?php
/* Smarty version 3.1.29, created on 2016-06-24 21:44:16
  from "/var/www/graf2933/data/www/views/default/ordertable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d7f80d3ce60_15239279',
  'file_dependency' => 
  array (
    '7b112d9aff35cde5b12929e32ae1182c679dcdd6' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/ordertable.tpl',
      1 => 1466793839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d7f80d3ce60_15239279 ($_smarty_tpl) {
?>

<div class="box">
    <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Мобильный номер</th>
                <th>Дата</th>
                <th>Заказ</th>
                <th>Цена</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['telephone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</td>
                <td><a href="..?controller=admin&action=order&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Просмотр</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
				 <td><a href="..?controller=admin&action=orderdelete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Удалить</a></td>
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
</body>

<?php }
}
