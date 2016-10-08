 <section id="main" class="container">
				<header>
						<h2>Добавить букет</h2>
					</header>		
					<div class="box">
						<form action="../?controller=admin&action=add" method="post" enctype="multipart/form-data">
                        <div class="row">
							<div class="6u">	
                            <span class="image left"><img src="/images/products/{$image}"></span>
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
                            {foreach $rsCategories as $item}
                                {foreach $item['children'] as $itemChild}
                                    <option value="{$itemChild['id']}">{$itemChild['name']}</option>

                                {/foreach}
                            {/foreach}
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

