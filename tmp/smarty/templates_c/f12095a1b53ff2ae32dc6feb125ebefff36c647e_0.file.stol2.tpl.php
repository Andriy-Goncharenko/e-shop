<?php
/* Smarty version 3.1.29, created on 2016-05-26 10:43:47
  from "/var/www/graf2933/data/www/views/default/stol2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5746a9330c0293_37492148',
  'file_dependency' => 
  array (
    'f12095a1b53ff2ae32dc6feb125ebefff36c647e' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/stol2.tpl',
      1 => 1464248603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5746a9330c0293_37492148 ($_smarty_tpl) {
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
                <th>Описанние</th>
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
                 <td><a href="../?controller=update&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Изменить</a></td>
                <td><a href="../?controller=delete&delete=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
    <?php }?>					
</section>

<?php }
}
