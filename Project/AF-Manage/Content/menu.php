            <div class="top">
                <a href="index.php" class="logo"></a>
                <div class="search">
                    <div class="input-prepend">
                        <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                        <input type="text" placeholder="جستجو کنید"/>                                                      
                    </div>            
                </div>
            </div>
            <div class="nContainer">
                <ul class="navigation">         
                    <li class="active"><a href="index.php" class="blblue">صفحه اصلی</a></li>
                    <li>
                        <a href="#" class="blyellow">افزودن</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="new_post.php">افزودن پست</a></li>
                            <li><a href="new_product.php">افزودن محصول</a></li>
                            <li><a href="new_user.php">افزودن کاربر</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="blgreen">مدیریت</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="posts.php">مدیریت پست</a></li>
							<li><a href="products.php">مدیریت محصولات</a></li>
							<li><a href="users.php">مدیریت کاربر ها</a></li>
                        </ul>
                    </li>
                    <li><a href="comments.php" class="blred">صندق ورودی</a></li>                
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
            <div class="widget">
                <div class="datepicker">
				<!-- SHAMSI CALENDER -->
				<script type="text/javascript">
					// code to change the active stylesheet
					if ( !window.XMLHttpRequest )
					XMLHttpRequest = function(){
						return new ActiveXObject("Microsoft.XMLHTTP");
					};

					function setActiveStyleSheet(title) {
					var i, a, main;
					for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
					if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
					  a.disabled = true;
					  if(a.getAttribute("title") == title) a.disabled = false;
					}
					}
					}

					function changeLanguage(lang) {
					var req = new XMLHttpRequest();
					req.open('get', '../lang/calendar-'+lang+'.js', true);
					req.onreadystatechange = function() {
						if (req.readyState == 4 && req.status == 200) {
							eval(req.responseText + "\nflatCal.recreate();popupCal.recreate();");
						}
					};
					req.send(null);
					}

					function changeType(type) {
					document.getElementById('popup_calendar').style.display = type == 'flat' ? 'none' : 'block';
					document.getElementById('flat_calendar').style.display = type == 'flat' ? 'block' : 'none';
					if (type == 'flat') flatCal.setDate(popupCal.date);
					}


					function changeDateType(dateType) {
					flatCal.setDateType(dateType);
					popupCal.setDateType(dateType);
					popupCal.params.inputField.value = popupCal.date.print(popupCal.dateFormat, popupCal.dateType, popupCal.langNumbers);
					}


					function changeLangNumbers(value) {
					flatCal.setLangNumbers(value);
					popupCal.setLangNumbers(value);
					}		

					function showWeekNumbers(value) {
					flatCal.setWeekNumbers(value);
					popupCal.setWeekNumbers(value);

					}

					function showOtherMonths(value) {
					flatCal.setOtherMonths(value);
					popupCal.setOtherMonths(value);
					}

					function changeDateFormat(format) {
					flatCal.setDateFormat(format);
					popupCal.setDateFormat(format);
					popupCal.params.inputField.value = popupCal.date.print(popupCal.dateFormat, popupCal.dateType, popupCal.langNumbers);
					}

					function changeShowTime(value) {
					flatCal.setShowsTime(value);
					popupCal.setShowsTime(value);
					}

					function setTime24(value) {
					flatCal.setTime24(value);
					popupCal.setTime24(value);
					}
				</script>
				<link rel="stylesheet" href="jalalijscalendar/skins/aqua/theme.css">
				<script src="jalalijscalendar/jalali.js"></script>
				<script src="jalalijscalendar/calendar.js"></script>
				<script src="jalalijscalendar/calendar-setup.js"></script>
				<script src="jalalijscalendar/lang/calendar-fa.js"></script>
                <div id="popup_calendar" style="display:none;">
					<input id="date_input_field" type="text" /><img id="date_btn" src="cal.png" style="vertical-align: top;" />
				</div>
				<table><tr><td id="flat_calendar"></td></tr></table>
				
				<script type="text/javascript">
					setActiveStyleSheet("Aqua");
					var flatCal = Calendar.setup({
						flat           : "flat_calendar",
						inputField     : "date_input_field",   // id of the input field
						ifFormat       : "%Y-%m-%d",       // format of the input field
						dateType	   : "jalali",
						weekNumbers    : false
					});
					var popupCal = Calendar.setup({
						inputField     : "date_input_field",   // id of the input field
						button         : "date_btn",   // trigger for the calendar (button ID)
						ifFormat       : "%Y-%m-%d",       // format of the input field
						dateType	   : "jalali",
						weekNumbers    : false
					});
				</script>
				<!-- END CALENDER -->
				</div>
            </div>