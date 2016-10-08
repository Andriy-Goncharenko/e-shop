<?php
/* Smarty version 3.1.29, created on 2016-07-14 16:07:14
  from "/var/www/graf2933/data/www/views/default/checkout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57878e82682601_20551534',
  'file_dependency' => 
  array (
    '573c6e265ce0b9118b0e862f9a905bad1cd0b78f' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/checkout.tpl',
      1 => 1468501615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57878e82682601_20551534 ($_smarty_tpl) {
?>
<section id="main" class="container 100%">
    <header>
        <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
    </header>
        <form action="../?controller=checkout&action=post" method="post">	
			
					<div class="box">
						
						<div class="row">
							<div class="6u 12u(mobilep)">
								<h3>Ваши данные</h3>
								
										<div class="row uniform">
											<div class="12u ">
												<input type="text" name="name" id="name" value="" placeholder="Имя и Фамилия" />
											</div>
                                            <div class="12u ">
												<input type="text" name="telephone" id="telephone" value="" placeholder="Телефон" />
											</div>
                                            <div class="12u ">
												<input type="email" name="email" id="email" value="" placeholder="E-mail" />
											</div>
                                        </div>
                                        <div class="row uniform ">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Комментарий" rows="6"></textarea>
											</div>
										</div>
                                <h3>Данные получателя</h3>
                              <div class="row uniform">
											<div class="12u ">
												<input type="text" name="name1" id="name1" value="" placeholder="Имя и Фамилия" />
											</div>
                                            <div class="12u ">
												<input type="text" name="telephone1" id="telephone1" value="" placeholder="Телефон" />
											</div>
                                            <div class="12u ">
												<input type="text" name="email1" id="email1" value="" placeholder="Адрес доставки" />
											</div>
                                            <div class="12u ">
												<input type="text" name="Delivery time" id="Delivery time" value="" placeholder="Дата доставки" />
											</div>
                                            <div class="12u ">
												<input type="text" name="delivery date" id="delivery date" value="" placeholder="Время доставки" />
											</div>
                                        </div>
                                        <div class="row uniform ">
											<div class="12u">
												<textarea name="message1" id="message1" placeholder="Текст открытки" rows="6"></textarea>
											</div>
										</div>
                            </div>     

							<div class="6u 12u(mobilep)">
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
												<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_produts_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_produts_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_produts_0_saved_local_item;
}
if ($__foreach_produts_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_produts_0_saved_item;
}
?>
												
                                            </tbody>
                                    </table>
							     <table class="alt">
                                    <thead>
												<tr>
													
													<th>Сумма:</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 грн.</th>
												</tr>
                                        <tr>
													
													<th id="demo"></th>
                                                    <th id="price"></th>
												</tr>
                                        <tr>
													
													<th>Итого: </th>
                                                    <th id="price2"></th>
												</tr>
                                        
											</thead>
                                    </table>
                                 </div> 
                                    <h3>Способ доставки</h3>
                                    <div class="row uniform ">
											<div class="12u">
												<input type="radio" id="priority-low" name="priority" onclick="myFunction('с 9 до 21-00 (диапазон времени 3-4 часа)',0,<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
)" value="с 9 до 21-00 (диапазон времени 3-4 часа)">
												<label for="priority-low">с 9 до 21-00 (диапазон времени 3-4 часа) </label>
											</div>
											<div class="12u">
												<input type="radio" id="priority-normal" name="priority" onclick="myFunction('в точно указанное время',80,<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
)" value="в точно указанное время">
												<label for="priority-normal">в точно указанное время</label>
											</div>
                                        <div class="12u">
												<input type="radio" id="priority-h1" name="priority" onclick="myFunction('с 7-00 до 9 и с 21-00 до 23-00',100,<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
)" value="с 7-00 до 8-30 и с 21-00 до 23-00">
												<label for="priority-h1">с 7-00 до 9 и с 21-00 до 23-00</label>
											</div>
                                        <div class="12u" >
												<input type="radio" id="priority-h2" name="priority" onclick="myFunction('с 23-00 до 7-00',180,<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
)" value="с 23-00 до 7-00">
												<label for="priority-h2">с 23-00 до 7-00</label>
											</div>
                                        <div class="12u">
												<input type="radio" id="priority-h3" name="priority" onclick="myFunction('доставка в пригород',200,<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
)" value="доставка в пригород">
												<label for="priority-h3">доставка в пригород</label>
										</br>		
                                        </div>
										</div>
                            <?php echo '<script'; ?>
>
function myFunction(id,price,price2) {
    document.getElementById("demo").innerHTML = id;
    document.getElementById("price").innerHTML = price+" грн.";
    document.getElementById("price2").innerHTML = price2+price+" грн.";
    var p= price+price2;
    console.log("js -price("+p+")");
    $.ajax({
       type:'POST',
       async:false,
       url:"../?controller=checkout&action=price&price2="+p+"/",
        dataType: 'json',
       succcess: function(data){
    console.log("Good");
       }
        });
}
                            <?php echo '</script'; ?>
>
    
                            <h3>Способ оплаты</h3>
                                <div class="row uniform ">
											<div class="12u">
												<input type="radio" id="priority-low1" name="priority1" value="Перевод на карту Приват Банка">
												<label for="priority-low1">Перевод на карту Приват Банка</label>
											</div>
											<div class="12u">
												<input type="radio" id="priority-normal1" name="priority1" value="Наличными курьеру">
												<label for="priority-normal1">Наличными курьеру</label>
											</div>
											<div class="12u">
												<input type="radio" id="priority-high1" name="priority1" value="Безналичный расчет">
												<label for="priority-high1">Безналичный расчет</label>
                                                </br>
											</div>
                                
                                </div>
                              
                                

                                <div class="12u">
                              
                              <ul class="actions fit">
                                   <li><button  type="submit" name="submit" class="button">Оформить заказ</button></li>

                                    </ul>
                            
                                    
                        
                                </div>
						</div>
    </form>
</section>
    
<?php }
}
