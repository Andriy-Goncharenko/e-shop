<?php
/* Smarty version 3.1.29, created on 2016-06-10 22:22:32
  from "/var/www/graf2933/data/www/views/default/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575b13780d3d14_25291707',
  'file_dependency' => 
  array (
    'c23671ffaa5055aaa2763dda20dad427607463ae' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/index.tpl',
      1 => 1465586549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575b13780d3d14_25291707 ($_smarty_tpl) {
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
<div class="6u 12u(mobilep)">   
    <section class="box special">
        <span class="image fit"><img src="images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['Image'];?>
"alt="" /></span>
        <h3 href="../?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 Грн</p>
        <ul  class="actions">
            <li><a href="../?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
