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
                <td>{$rsProducts['name']}</td>
                <td>{$rsProducts['description']}</td>
                <td>{$rsProducts['price']}</td>
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
													<td>{$rsProduct['name']}</td>
													<td>{$rsProduct['telephone']}</td>
													<td>{$rsProduct['email']}</td>
                                                    <td>{$rsProduct['message']}</td>
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
													<td>{$rsProduct['name1']}</td>
													<td>{$rsProduct['telephone1']}</td>
													<td>{$rsProduct['email1']}</td>
                                                   <td>{$rsProduct['Delivery_time']}</td>
													<td>{$rsProduct['delivery_date']}</td>
                                                    <td>{$rsProduct['message1']}</td>
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
                                            <td>{$rsProduct['priority']}</td>
                                            <td>{$rsProduct['priority1']}</td>
                                            <td>{$rsProduct['price']}</td>
                                        </tbody>
                                </table>
                                        </div>
                                    
					</div>
                        </div>
                </section>
                            </section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>