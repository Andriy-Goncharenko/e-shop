<?php
/* Smarty version 3.1.29, created on 2016-06-18 14:19:00
  from "/var/www/graf2933/data/www/views/default/leftColumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57652e2452e9d0_23148221',
  'file_dependency' => 
  array (
    '17423e8bd1b3bdfb4742e55dd0271de1a2e6177e' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/leftColumn.tpl',
      1 => 1466248734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57652e2452e9d0_23148221 ($_smarty_tpl) {
?>
<header id="header" class="alt">
    <h1><a href="../" >Royal flowers</a></h1>
        <nav id="nav">
            <ul>
                 <li><a href="../?controller=bouquets">Букеты</a></li> 
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
                    <a href="../?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
                            <li><a href="../?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
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
                      
                 <li><a href="../?controller=price">Цены</a>
                 <ul>
                 <li><a href="../?controller=price&price=250">до 250 грн</a></li>
                 <li><a href="../?controller=price&price=500">до 500 грн</a></li>
                 <li><a href="../?controller=price&price=800">до 800 грн</a></li>
                 <li><a href="../?controller=price&price=1000">до 1000 грн</a></li>
                 <li><a href="../?controller=price&action=from&price=1000">от 1000 грн</a></li>
                 </ul> 
                 </li>
                 
                     <li> <a class="icon fa-search" href="../?controller=search"></a>
                     <li> <a id="cartCntItems" href="../?controller=cart">Корзина(<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>0<?php }?>)</a>
                      
            </li>
            </ul>
        </nav>
</header>
                
           <?php }
}
