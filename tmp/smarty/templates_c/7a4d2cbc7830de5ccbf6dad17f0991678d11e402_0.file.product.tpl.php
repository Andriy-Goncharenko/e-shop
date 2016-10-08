<?php
/* Smarty version 3.1.29, created on 2016-10-07 16:50:04
  from "C:\wamp64\www\royal\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f7d23c04f607_85579224',
  'file_dependency' => 
  array (
    '7a4d2cbc7830de5ccbf6dad17f0991678d11e402' => 
    array (
      0 => 'C:\\wamp64\\www\\royal\\views\\default\\product.tpl',
      1 => 1475849998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f7d23c04f607_85579224 ($_smarty_tpl) {
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
