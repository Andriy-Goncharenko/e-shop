<?php
/* Smarty version 3.1.29, created on 2016-05-19 21:07:34
  from "C:\wamp64\www\views\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573e2b161c5910_28378497',
  'file_dependency' => 
  array (
    'd2b14773b81dd04197b561abe78bc95502cb49d9' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\index.tpl',
      1 => 1463691969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573e2b161c5910_28378497 ($_smarty_tpl) {
?>
<section id="main" class="container">
    <div class="row">
	
<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_products_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_products_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
<div class="6u 12u(narrower)">   
    <section class="box special">
        <span class="image featured"><img src="images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['Image'];?>
"alt="" /></span>
        <h3 href="../www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 Грн</h3>
        <ul  class="actions">
            <li><a href="../www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="button alt">Просмотр</a></li>
            <li><a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)"class="button alt">Купить</a></li>
        </ul>
    </section>
</div>        
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_local_item;
}
if ($__foreach_products_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_item;
}
?>
    
</section>
       <?php }
}
