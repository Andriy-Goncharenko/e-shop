<?php
/* Smarty version 3.1.29, created on 2016-06-21 20:19:04
  from "/var/www/graf2933/data/www/views/default/product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57697708ed18e9_57673317',
  'file_dependency' => 
  array (
    '69d004e8df1efb07b3ecea9613a35f3b2b07c339' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/product.tpl',
      1 => 1466529505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57697708ed18e9_57673317 ($_smarty_tpl) {
?>
<section id="main" class="container ">
    <div class="box">

            <span class="image left"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['Image'];?>
"></span>
                <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 Грн</p></br>
                    <h1> Состав:</h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                   <div class="row uniform 50%">
											<div class="12u">

                  
                        <li><a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
)"class="button fit">Купить</a></li>
</div>
</div>
                </div>
</section>
<?php }
}
