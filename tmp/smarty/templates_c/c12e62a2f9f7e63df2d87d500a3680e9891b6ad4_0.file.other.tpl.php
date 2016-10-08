<?php
/* Smarty version 3.1.29, created on 2016-06-17 00:01:56
  from "/var/www/graf2933/data/www/views/default/other.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576313c4572422_94156105',
  'file_dependency' => 
  array (
    'c12e62a2f9f7e63df2d87d500a3680e9891b6ad4' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/other.tpl',
      1 => 1466110912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576313c4572422_94156105 ($_smarty_tpl) {
?>
<!-- Main -->
			
            <section id="main" class="container">
					<section class="box">
						<div class="row">
							<div class="12u">
                                
                                <div class="table-wrapper">
                                <h3>Заказ</h3>	
                                    <table class="alt">
											<thead>
												<tr>
													<th>Наименование товара</th>
													<th>Модель</th>
													<th>Цена</th>
												</tr>
											</thead>
											<tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['price'];?>
</td>
            </tr>
  
												
                                            </tbody>
                                    </table>
                            </div>
                                 <div class="table-wrapper">
                                <h3>Данные заказчика</h3>	
                                    <table class="alt">
											<thead>
												<tr>
													<th>Имя и Фамилия</th>
													<th>Телефон</th>
													<th>E-mail</th>
											         <th>Комментарий</th>	
                                                </tr>
											</thead>
											<tbody>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['telephone'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['email'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['message'];?>
</td>
												</tr>
												
                                            </tbody>
                                    </table>
                            </div>
                                <div class="table-wrapper">
                                <h3>Данные получателя</h3>	
                                    <table class="alt">
											<thead>
												<tr>
													<th>Имя и Фамилия</th>
													<th>Телефон</th>
											         <th>Адрес доставки</th>
                                                    <th>Дата доставки</th>
                                                    <th>Время доставки</th>
                                                    <th>Текст открытки</th>
                                                </tr>
											</thead>
											<tbody>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name1'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['telephone1'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['email1'];?>
</td>
                                                   <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['Delivery_time'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['delivery_date'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['message1'];?>
</td>
												</tr>
                                            </tbody>
                                    </table>
                            </div>
                            <div class="table-wrapper">	
                                    <table class="alt">
											<thead>
												<tr>
													<th>Способ доставки</th>
													<th>Способ оплаты</th> 
                                                    <th>Цена</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['priority'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['priority1'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</td>
                                        </tbody>
                                </table>
                                        </div>
                                    
					</div>
                        </div>
                </section>
                            </section>
		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollgress.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
