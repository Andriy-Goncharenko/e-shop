<section id="main" class="container 100%">
    <header>
        <h2>{$pageTitle}</h2>
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
												{foreach $rsProducts as $item name=produts}
            <tr>
                <td>{$item['name']}</td>
                <td>{$item['description']}</td>
                <td>{$item['price']}</td>
            </tr>
            {/foreach}
												
                                            </tbody>
                                    </table>
							     <table class="alt">
                                    <thead>
												<tr>
													
													<th>Сумма:</th>
                                                    <th>{$price} грн.</th>
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
												<input type="radio" id="priority-low" name="priority" onclick="myFunction('с 9 до 21-00 (диапазон времени 3-4 часа)',0,{$price})" value="с 9 до 21-00 (диапазон времени 3-4 часа)">
												<label for="priority-low">с 9 до 21-00 (диапазон времени 3-4 часа) </label>
											</div>
											<div class="12u">
												<input type="radio" id="priority-normal" name="priority" onclick="myFunction('в точно указанное время',80,{$price})" value="в точно указанное время">
												<label for="priority-normal">в точно указанное время</label>
											</div>
                                        <div class="12u">
												<input type="radio" id="priority-h1" name="priority" onclick="myFunction('с 7-00 до 9 и с 21-00 до 23-00',100,{$price})" value="с 7-00 до 8-30 и с 21-00 до 23-00">
												<label for="priority-h1">с 7-00 до 9 и с 21-00 до 23-00</label>
											</div>
                                        <div class="12u" >
												<input type="radio" id="priority-h2" name="priority" onclick="myFunction('с 23-00 до 7-00',180,{$price})" value="с 23-00 до 7-00">
												<label for="priority-h2">с 23-00 до 7-00</label>
											</div>
                                        <div class="12u">
												<input type="radio" id="priority-h3" name="priority" onclick="myFunction('доставка в пригород',200,{$price})" value="доставка в пригород">
												<label for="priority-h3">доставка в пригород</label>
										</br>		
                                        </div>
										</div>
                            <script>
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
                            </script>
    
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
    
