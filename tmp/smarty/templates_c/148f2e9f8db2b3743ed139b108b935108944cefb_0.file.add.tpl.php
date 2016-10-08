<?php
/* Smarty version 3.1.29, created on 2016-06-11 21:28:16
  from "/var/www/graf2933/data/www/views/default/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575c58402d0de3_20283612',
  'file_dependency' => 
  array (
    '148f2e9f8db2b3743ed139b108b935108944cefb' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/add.tpl',
      1 => 1465669693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575c58402d0de3_20283612 ($_smarty_tpl) {
?>
 <section id="main" class="container">
				<header>
						<h2>Добавить букет</h2>
					</header>		
					<div class="box">
						<form action="../?controller=admin&action=add" method="post" enctype="multipart/form-data">
                        <div class="row">
							<div class="6u">	
                            <span class="image left"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></span>
                             <ul class="actions align-center">
                        <li><input type="file" name="namefile" id="namefile" value="Выбрать фотку"></li>
                                </ul>
                            </div>     

							<div class="6u">
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
                            <option value="99">Букеты</option>
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
                            </div>
                              
                                

                                <div class="12u">
                              
                              <ul class="actions">
                                  <li><button  type="submit" name="submit" class="button" >Просмотр</button></li>
                                  <li><button type="submit" name="submit2" class="button">Добавить</button></li>

                                    </ul>
                              
                                    
                        
                                </div>
						</div>
					
                    
				  </form>
                </div>
                        </section>

<?php }
}
