 <li>
                    <a href="index.php" class="button">
                        <div class="icon">
                            <span class="ico-monitor"></span>
                        </div>                    
                        <div class="name">صفحه اصلی</div>
                    </a>                
                </li>
                <li>
                    <a href="#" class="button yellow">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>                    
                        <div class="name">افزودن</div>
                    </a>
					<ul class="sub">
						<li><a href="new_post.php">افزودن پست</a></li>
						<li><a href="new_products.php">افزودن محصول</a></li>
						<li><a href="new_user.php">افزودن کاربر</a></li>
					</ul>
                </li>                
                <li>
                    <a href="#" class="button green">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-pen-2"></span>
                        </div>                    
                        <div class="name">مدیریت</div>
                    </a>
					<ul class="sub">
						<li><a href="posts.php">مدیریت پست </a></li>
						<li><a href="product.php">مدیریت محصولات</a></li>
						<li><a href="users.php">مدیریت کاربر ها</a></li>
					</ul>
                </li>                        
                <li>
                    <a href="comments.php" class="button red">
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">صندق ورودی</div>
                    </a>                
                </li>                               
                <li>
                    <div class="user">
                        <img src="img/examples/users/dmitry_m.jpg" align="left"/>
                        <a href="#" class="name">
                            <span><?php echo $_SESSION["username"]; ?></span>
                            <span class="sm">مدیریت سایت</span>
                        </a>
                    </div>
                    <div class="buttons">
                        <div class="sbutton green navButton">
                            <a href="#"><span class="ico-align-justify"></span></a>
                        </div>
                        <div class="sbutton blue">
                            <a href="#"><span class="ico-cogs"></span></a>
                            <div class="popup">
                                <div class="arrow"></div>
                                <div class="row-fluid">
                                    <div class="row-form">
                                        <div class="span12"><strong>تنظیم</strong></div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">فهرست بندی:</div>
                                        <div class="span8">
											<label><input type="radio" class="cNav" name="cNavButton" value="default"/> پیش فرض</label>
											<label><input type="radio" class="cNav" name="cNavButton" value="bordered"/> بوردر شده</label>
										</div>
                                    </div>
                                    <div class="row-form">
                                        <div class="span4">رنگ فهرست راست:</div>
                                        <div class="span8">
											<div class="cNavC">
												<span class="color_1" name="cNavButColor"></span>
												<span class="color_2" name="cNavButColor"></span>
												<span class="color_3" name="cNavButColor"></span>
												<span class="color_4" name="cNavButColor"></span>
												<span class="color_5" name="cNavButColor"></span>
												<span class="color_6" name="cNavButColor"></span>
												<span class="color_7" name="cNavButColor"></span>
												<span class="color_8" name="cNavButColor"></span>
											</div>
										</div>
                                    </div>
									<div class="row-form">
                                        <div class="span4">فهرست بالا:</div>
                                        <div class="span8">
											<label><input type="radio" class="cTopNavH" name="cTopNavHide" value="show"/> نمایش</label>
											<label><input type="radio" class="cTopNavH" name="cTopNavHide" value="hide"/> پنهان سازی</label>
										</div>
                                    </div> 
                                    <div class="row-form">
                                        <div class="span4">سازگاری:</div>
                                        <div class="span8">
											<label><input type="radio" class="cCont" name="cContent" value=""/> واکنش گرا</label>
											<label><input type="radio" class="cCont" name="cContent" value="fixed"/> ثابت</label>
										</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </li>                