<?php
/* Smarty version 3.1.29, created on 2016-05-15 09:01:19
  from "C:\wamp64\www\views\default\leftColumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57383adf216971_33022423',
  'file_dependency' => 
  array (
    'fd925c71f57ea0659805bcebc95d34fde00ec352' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\leftColumn.tpl',
      1 => 1463302789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57383adf216971_33022423 ($_smarty_tpl) {
?>
<header id="header" class="alt">
    <h1><a href="../www/" >Royal flowers</a></h1>
        <nav id="nav">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                     <li>
                    <a href="../www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a> <ul>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_itemChild_1_saved_item = isset($_smarty_tpl->tpl_vars['itemChild']) ? $_smarty_tpl->tpl_vars['itemChild'] : false;
$_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['itemChild']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$__foreach_itemChild_1_saved_local_item = $_smarty_tpl->tpl_vars['itemChild'];
?>
                            <li><a href="../www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                        <?php
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_local_item;
}
if ($__foreach_itemChild_1_saved_item) {
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_item;
}
?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?> 
                    <li> <a id="cartCntItems" href="../www/?controller=cart">Корзина(<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>0<?php }?>)</a>
            </li>
            </ul>
        </nav>
</header>
                
           <?php }
}
