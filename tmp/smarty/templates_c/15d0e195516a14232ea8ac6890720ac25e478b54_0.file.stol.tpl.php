<?php
/* Smarty version 3.1.29, created on 2016-05-19 15:44:38
  from "C:\wamp64\www\views\default\stol.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ddf66f26d17_11639598',
  'file_dependency' => 
  array (
    '15d0e195516a14232ea8ac6890720ac25e478b54' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\stol.tpl',
      1 => 1463672592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573ddf66f26d17_11639598 ($_smarty_tpl) {
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
                <th>Катигория</th>
                <th>Цена</th>
                <th>Картинка</th>
                <th>Статус</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Image'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
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
