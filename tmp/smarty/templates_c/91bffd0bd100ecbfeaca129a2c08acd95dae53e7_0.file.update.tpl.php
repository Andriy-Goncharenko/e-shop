<?php
/* Smarty version 3.1.29, created on 2016-05-26 10:43:50
  from "/var/www/graf2933/data/www/views/default/update.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5746a9367c3840_01345956',
  'file_dependency' => 
  array (
    '91bffd0bd100ecbfeaca129a2c08acd95dae53e7' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/update.tpl',
      1 => 1464248603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5746a9367c3840_01345956 ($_smarty_tpl) {
?>
<section id="main" class="container 100%">
    <header>
        <h2>Изменить букет</h2>
    </header>
    <div class="box">
        <form action="../?controller=update&action=update" method="post">
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
" placeholder="Имя Букета" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="price" id="price" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
" placeholder="Цена" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <textarea name="description" id="description" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
" placeholder="Описание" rows="6"></textarea>
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="submit" name="submit" value="Отправить" /></li>                        
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>

<?php }
}
