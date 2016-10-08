<?php
/* Smarty version 3.1.29, created on 2016-05-19 21:11:07
  from "C:\wamp64\www\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573e2beb7e1020_83993352',
  'file_dependency' => 
  array (
    '4be543761eacbebb79a69fbffccc408e0b5d1522' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\product.tpl',
      1 => 1463692253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573e2beb7e1020_83993352 ($_smarty_tpl) {
?>
<section id="main" class="container 75%">
    <section class="box special">
        <header >
            <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 Грн</h3>
            <span class="image featured"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['Image'];?>
"></span>
                <section >
                    <ul class="actions fit small">
                        <li><a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" http-equiv="refresh"  href="javascript:document.location.reload()" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
)"class="button fit">Купить</a></li>
                    </ul>
                </section>
                    <p> Состав Букета:<br/><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                    </header>
                </section>
</section>
<?php }
}
