<?php
/* Smarty version 3.1.29, created on 2016-05-19 18:14:06
  from "C:\wamp64\www\views\default\add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573e026e5ec1c5_91794132',
  'file_dependency' => 
  array (
    '97ac696625290a1dc5328e490f4b24e15db3ddf5' => 
    array (
      0 => 'C:\\wamp64\\www\\views\\default\\add.tpl',
      1 => 1463681644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573e026e5ec1c5_91794132 ($_smarty_tpl) {
?>
<section id="main" class="container 100%">
    <header>
        <h2>Добовление букета на сайт</h2>
    </header>
    <div class="box">
        <form action="../www/?controller=admin&action=add" method="post" enctype="multipart/form-data">
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="name" id="name" value="" placeholder="Имя Букета" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="price" id="price" value="" placeholder="Цена" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <div class="select-wrapper">
                        <select name="category" id="category">
                            <option value="">- Выберите катигорию -</option>
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
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</option>

                                <?php
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_local_item;
}
if ($__foreach_itemChild_1_saved_item) {
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_item;
}
?>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <textarea name="message" id="message" placeholder="Описание" rows="6"></textarea>
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="file" name="namefile" id="namefile" value="Выбрать фотку" /></li>
                        <li><input type="submit" name="submit" value="Отправить" /></li>
                        
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
<?php }
}
