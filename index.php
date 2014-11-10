<? if(empty($_POST)){ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Мастер Установки Zuru</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="iLeonidze" />
		<link rel="shortcut icon" href="favicon.ico">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body class="whitemode">
		<div class="welcome" id="zuruInstallerWelcomeCurtain" style="">
			<div class="zuru_logo"></div>
			<h1>Всё почти готово!</h1>
			<h2>Нам осталось задать Вам несколько вопросов</h2>
			<div class="superbutton Disabled">Подождите..</div>
			<h6>Нажимая на кнопку "Продолжить" Вы принимаете <a href="http://zuru.ml/LICENSE.txt" target="_blank">лицензионное соглашение Zuru</a></h6>
		</div>
		<div class="container" style="z-index:1;">
			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Установка Облачной Системы Zuru</h1>
				</div>
				<form id="zuruInstallerWizardForm" class="fs-form fs-form-full" autocomplete="off">
<?
if(isset($_GET['gender'])&&!empty($_GET['gender'])&&($_GET['gender']=='male'||$_GET['gender']=='female')){
	echo'<input id="gender_'.$_GET['gender'].'" name="gender" type="hidden" value="'.$_GET['gender'].'"/>';
}
if(isset($_GET['name'])&&!empty($_GET['name'])&&!preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',$_GET['name'])&&isset($_GET['surname'])&&!empty($_GET['surname'])&&!preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',$_GET['surname'])){
	echo'<input id="name" name="name" type="hidden" value="'.$_GET['name'].'"/><input id="surname" name="surname" type="hidden" value="'.$_GET['surname'].'"/>';
}
if(isset($_GET['birth_day'])&&!empty($_GET['birth_day'])&&!preg_match('/[^0-9]/',$_GET['birth_day'])&&($_GET['birth_day']<32)&&($_GET['birth_day']>0)&&isset($_GET['birth_month'])&&!empty($_GET['birth_month'])&&!preg_match('/[^0-9]/',$_GET['birth_month'])&&($_GET['birth_month']<13)&&($_GET['birth_month']>0)&&isset($_GET['birth_year'])&&!empty($_GET['birth_year'])&&!preg_match('/[^0-9]/',$_GET['birth_year'])&&($_GET['birth_year']>0)){
	echo'<input id="birth_day" name="birth_day" type="hidden" value="'.$_GET['birth_day'].'"/><input id="birth_month" name="birth_month" type="hidden" value="'.$_GET['birth_month'].'"/><input id="birth_year" name="birth_year" type="hidden" value="'.$_GET['birth_year'].'"/>';
}
if(isset($_GET['mobile_phone'])&&!empty($_GET['mobile_phone'])&&!preg_match('/[^0-9]/',$_GET['mobile_phone'])&&($_GET['mobile_phone']>9999)){
	echo'<input id="mobile_phone" name="mobile_phone" type="hidden" value="'.$_GET['mobile_phone'].'"/>';
}
if(isset($_GET['email'])&&!empty($_GET['email'])&&!preg_match('/[^0-9a-zA-Zа-яА-ЯёЁ@.]/',$_GET['email'])&&preg_match('/[@]/',$_GET['email'])&&preg_match('/[.]/',$_GET['email'])){
	echo'<input id="email" name="email" type="hidden" value="'.$_GET['email'].'"/>';
}
if(isset($_GET['login'])&&!empty($_GET['login'])&&!preg_match('/[^0-9a-zA-Z]/',$_GET['login'])){
	echo'<input id="login" name="login" type="hidden" value="'.$_GET['login'].'"/>';
}
if(isset($_GET['password'])&&!empty($_GET['password'])){
	echo'<input id="password" name="password" type="hidden" value="'.$_GET['password'].'"/>';
}
if(isset($_GET['storage_size'])&&!empty($_GET['storage_size'])&&!preg_match('/[^0-9]/',$_GET['storage_size'])&&($_GET['storage_size']>63)){
	echo'<input id="storage_size" name="storage_size" type="hidden" value="'.$_GET['storage_size'].'"/>';
}
?>
					<ol class="fs-fields">
<? if(!isset($_GET['gender'])||empty($_GET['gender'])||($_GET['gender']!=='male'&&$_GET['gender']!=='female')){ ?>
						<li data-input-trigger data-section="gender">
							<label class="fs-field-label fs-anim-upper" for="gender" data-info="Узнав Вас лучше, мы сможем лучше с Вами коммуникатировать." onmouseover="$('.fs-message-error').removeClass('fs-show');">Укажите Ваш пол</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span onclick="RandomizeForms('male');"><input id="gender_men" name="gender" type="radio" value="male" required /><label for="gender_men" style="padding:0;"><img src="men.png"/><br>Мужской</label></span>
								<span onclick="RandomizeForms('female');"><input id="gender_women" name="gender" type="radio" value="female" required /><label for="gender_women" style="padding:0;"><img src="women.png"/><br>Женский</label></span>
							</div>
						</li>
<? } if(!isset($_GET['name'])||empty($_GET['name'])||!isset($_GET['surname'])||empty($_GET['surname'])||preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',$_GET['surname'])||preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',$_GET['name'])){ ?>
						<li data-section="name">
							<label class="fs-field-label fs-anim-upper" for="name" data-info="Ваше имя и фамилия необходима для более тесной интеграции между Вами и Zuru-сервером. Эта информация видна только авторизованным пользователям сервера." onmouseover="$('.fs-message-error').removeClass('fs-show');">Как Вас зовут?</label>
							<input class="fs-anim-lower half" id="name" name="name" type="text" placeholder="John" <? if(isset($_GET['name'])&&!empty($_GET['name'])&&!preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',urldecode($_GET['name']))){ echo'value="'.urldecode($_GET['name']).'" '; } ?>required/>
							<input class="fs-anim-lower half" id="surname" name="surname" type="text" placeholder="Doe" <? if(isset($_GET['surname'])&&!empty($_GET['surname'])&&!preg_match('/[^a-zA-Zа-яА-ЯёЁ]/',urldecode($_GET['surname']))){ echo'value="'.urldecode($_GET['surname']).'" '; } ?>required data-input-trigger/>
						</li>
<? } if((!isset($_GET['birth_day'])&&empty($_GET['birth_day']))||(!isset($_GET['birth_month'])&&empty($_GET['birth_month']))||(!isset($_GET['birth_year'])&&empty($_GET['birth_year']))||preg_match('/[^0-9]/',$_GET['birth_day'])||preg_match('/[^0-9]/',$_GET['birth_month'])||preg_match('/[^0-9]/',$_GET['birth_year'])||($_GET['birth_day']>31)||($_GET['birth_day']<0)||($_GET['birth_month']>12)||($_GET['birth_month']<0)||($_GET['birth_year']<0)){ ?>
						<li data-section="birthday">
							<label class="fs-field-label fs-anim-upper" for="name" data-info="Зная Вашу дату рождения мы сможем наиболее точно сконфигурировать настройки конфиденциальности. Иногда, в качестве проверки личности, Вам необходимо будет указать день Вашего рождения." onmouseover="$('.fs-message-error').removeClass('fs-show');">Какая у Вас дата рождения?</label>
							<input class="fs-anim-lower third" id="birth_day" name="birth_day" type="number"  min="1" max="31" placeholder="День" <? if(isset($_GET['birth_day'])&&!empty($_GET['birth_day'])&&!preg_match('/[^0-9]/',$_GET['birth_day'])&&($_GET['birth_day']<32)&&($_GET['birth_day']>0)){ echo'value="'.$_GET['birth_day'].'" '; } ?>required/>
							<input class="fs-anim-lower third" id="birth_month" name="birth_month" type="number" min="1" max="12" placeholder="Месяц" <? if(isset($_GET['birth_month'])&&!empty($_GET['birth_month'])&&!preg_match('/[^0-9]/',$_GET['birth_month'])&&($_GET['birth_month']<13)&&($_GET['birth_month']>0)){ echo'value="'.$_GET['birth_month'].'" '; } ?>required/>
							<input class="fs-anim-lower third" id="birth_year" name="birth_year" type="number" min="1" placeholder="Год" <? if(isset($_GET['birth_year'])&&!empty($_GET['birth_year'])&&!preg_match('/[^0-9]/',$_GET['birth_year'])&&($_GET['birth_year']>0)){ echo'value="'.$_GET['birth_year'].'" '; } ?>required/>
							<p class="fs-anim-lower" style="text-align:center;font-size: 0.7em;margin:0.5em 0 0 0;">указывайте номер месяца, а не его название</p>
						</li>
<? } if(!isset($_GET['mobile_phone'])||empty($_GET['mobile_phone'])|preg_match('/[^0-9]/',$_GET['mobile_phone'])||($_GET['mobile_phone']<9999)){ ?>
						<li data-input-trigger data-section="mobilephone">
							<label class="fs-field-label fs-anim-upper" for="name" data-info="Если Вы забудете Ваш пароль, мы сможем помочь Вам в его восстановлении с помощью Вашего мобильного телефона." onmouseover="$('.fs-message-error').removeClass('fs-show');">Какой у Вас номер мобильного телефона?</label>
							<input class="fs-anim-lower" id="mobile_phone" name="mobile_phone" type="text" placeholder="+7 (999) 000 11 22" required/>
						</li>
<? } if(!isset($_GET['email'])||empty($_GET['email'])||preg_match('/[^0-9a-zA-Zа-яА-ЯёЁ@.]/',$_GET['email'])||!preg_match('/[@]/',$_GET['email'])||!preg_match('/[.]/',$_GET['email'])){ ?>
						<li data-input-trigger data-section="email">
							<label class="fs-field-label fs-anim-upper" for="email" data-info="Ваш E-mail необходим для создания связи с Вашим аккаунтом в Магазине Zuru. Вы не будете получать никакого спама или рассылок. Если Вы забудете Ваш пароль, мы отправим Вам инструкции на этот адрес." onmouseover="$('.fs-message-error').removeClass('fs-show');">Какой у Вас адрес электронной почты?</label>
							<input class="fs-anim-lower" id="email" name="email" type="email" placeholder="john.doe@example.org" required/>
						</li>
<? } if(!isset($_GET['login'])||empty($_GET['login'])||preg_match('/[^0-9a-zA-Z]/',$_GET['login'])){ ?>
						<li data-input-trigger data-section="login">
							<label class="fs-field-label fs-anim-upper" for="login" data-info="Логин - это небольшое слово, состоящее только из латинских букв и цифр, с помощью которого Вы сможете войти в Ваш профиль." onmouseover="$('.fs-message-error').removeClass('fs-show');">Придумайте Ваш логин</label>
							<input class="fs-anim-lower" id="login" name="login" type="text" placeholder="AgentSmith" required/>
						</li>
<? } if(!isset($_GET['password'])||empty($_GET['password'])){ ?>
						<li data-input-trigger data-section="password">
							<label class="fs-field-label fs-anim-upper" for="password" data-info="Пароль - это сложная фраза, состоящая из любых символов, которую Вы сможете запомнить." onmouseover="$('.fs-message-error').removeClass('fs-show');">Придумайте Ваш пароль</label>
							<input class="fs-anim-lower" id="password" name="password" type="password" placeholder="SuperHero123" required/>
						</li>
<? } if(!isset($_GET['storage_size'])||empty($_GET['storage_size'])||preg_match('/[^0-9]/',$_GET['storage_size'])||($_GET['storage_size']<64)){ ?>
						<li data-input-trigger data-section="storagesize">
							<label class="fs-field-label fs-anim-upper" for="storage_size" data-info="" onmouseover="$('.fs-message-error').removeClass('fs-show');">Сколько пространства выделить для Zuru?</label>
							<input class="fs-anim-lower" id="storage_size" name="storage_size" type="range" placeholder="1024" min="64" max="10240" step="1" value="1024"/>
							<input class="fs-anim-lower" id="manual_storage_size" name="manual_storage_size" type="numeric" placeholder="1024" value="1024" style="text-align:center;"/>
							<p class="fs-anim-lower" id="storage_size_tip" style="text-align:center;font-size: 0.7em;margin:0.5em 0 0 0;">мегабайт или 1.00 гигабайт</p>
						</li>
<? } ?>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Завершить установку</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->
		</div><!-- /container -->
		
<style>
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block;}audio,canvas,video{display:inline-block;}audio:not([controls]){display:none;height:0;}[hidden]{display:none;}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;}a:focus{outline:thin dotted;}a:active,a:hover{outline:0;}h1{font-size:2em;margin:0.67em 0;}abbr[title]{border-bottom:1px dotted;}b,strong{font-weight:bold;}dfn{font-style:italic;}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0;}mark{background:#ff0;color:#000;}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em;}pre{white-space:pre-wrap;}q{quotes:"\201C" "\201D" "\2018" "\2019";}small{font-size:80%;}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}sup{top:-0.5em;}sub{bottom:-0.25em;}img{border:0;}svg:not(:root){overflow:hidden;}figure{margin:0;}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}legend{border:0;padding:0;}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;}button,input{line-height:normal;}button,select{text-transform:none;}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}button[disabled],html input[disabled]{cursor:default;}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}textarea{overflow:auto;vertical-align:top;}table{border-collapse:collapse;border-spacing:0;}

*, *:after, *:before { -webkit-box-sizing: border-box; box-sizing: border-box; }
.clearfix:before, .clearfix:after { content: ''; display: table; }
.clearfix:after { clear: both; }

html, body, .container {
	height: 100%;
}

body {
	background: #3b3f45;
	color: #fff;
	font-weight: 400;
	font-size: 1em;
	font-family: 'Roboto', Arial, sans-serif;
	overflow: hidden;
	overflow-y: scroll;
	min-height: 590px;
}
body.whitemode {
	background: #E7E7E7;
	color: rgba(27, 27, 27, 0.8);
}

a {
	color: rgba(0,0,0,0.3);
	text-decoration: none;
	outline: none;
}

a:hover, a:focus {
	color: #fff;
}

/* Top Navigation Style */
.codrops-top {
	margin-top: 1em;
}

.codrops-top a {
	font-size: 0.69em;
	padding: 0 0.25em;
	display: inline-block;
	text-decoration: none;
	font-size: 1.2em;
}

.codrops-icon:before {
	margin: 0 4px;
	text-transform: none;
	font-weight: normal;
	font-style: normal;
	font-variant: normal;
	font-family: 'codropsicons';
	line-height: 1;
	speak: none;
	-webkit-font-smoothing: antialiased;
}

.codrops-icon-drop:before {
	content: "\e001";
}

.codrops-icon-prev:before {
	content: "\e004";
}

.codrops-icon-info:before {
	content: "\e003";
}

.codrops-icon span {
	display: none;
	position: absolute;
	font-size: 0.85em;
	padding: 0.5em 0 0 0.25em;
	font-weight: 700;
}

.codrops-icon:hover span {
	display: block;
	color: #6a7b7e;
}



.welcome{
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background-color: #E7E7E7;
	z-index: 11;
}
.welcome .zuru_logo{
	position: absolute;
	top: 50%;
	left: 50%;
	width: 14em;
	height: 14em;
	margin: -14em 0 0 -7em;
	background: url('zuru_logo_black.png') center center no-repeat;
	background-size: 100% 100%;
	opacity:0.8;
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	-ms-transition: all 0.1s;
	-o-transition: all 0.1s;
	transition: all 0.1s;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}
.welcome .zuru_logo.Hidden{
	opacity:0;
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	-ms-transform: scale(0.8);
	transform: scale(0.8);
}
.welcome h1{
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	margin: 0;
	text-align: center;
	font-size: 3.3em;
	font-weight: 700;
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	-ms-transition: all 0.1s;
	-o-transition: all 0.1s;
	transition: all 0.1s;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}
.welcome h1.Hidden{
	opacity:0;
	-webkit-transform: scale(0.9);
	-moz-transform: scale(0.9);
	-ms-transform: scale(0.9);
	transform: scale(0.9);
}
.welcome h2{
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	margin: 2.9em 0 0 0;
	text-align: center;
	font-size: 1.5em;
	font-weight: 400;
}
.welcome h2.Hidden{
	opacity:0;
	-webkit-transform: scale(0.75);
	-moz-transform: scale(0.75);
	-ms-transform: scale(0.75);
	transform: scale(0.75);
}
.welcome .superbutton{
	position: absolute;
	top: 50%;
	left: 50%;
	width: auto;
	padding: 0.5em 1.3em;
	margin: 4.2em 0 0 -4.3em;
	border-radius: 3em;
	font-weight: 400;
	font-size: 2em;
	color: #FFF;
	text-align:center;
	background: #000;
	opacity:0.8;
	cursor:pointer;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}
.welcome .superbutton:hover{
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
	opacity:0.9;
}
.welcome .superbutton:active{
	-webkit-transform: scale(0.7);
	-moz-transform: scale(0.7);
	-ms-transform: scale(0.7);
	transform: scale(0.7);
	opacity:0.3;
}
.welcome .superbutton.Disabled{
	opacity:0.3;
	-webkit-transform: scale(0.95);
	-moz-transform: scale(0.95);
	-ms-transform: scale(0.95);
	transform: scale(0.95);
	cursor:default;
}
.welcome .superbutton.Hidden{
	opacity:0;
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	-ms-transition: all 0.1s;
	-o-transition: all 0.1s;
	transition: all 0.1s;
	-webkit-transform: scale(0.1);
	-moz-transform: scale(0.1);
	-ms-transform: scale(0.1);
	transform: scale(0.1);
}
.welcome h6{
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	margin: 19em 0 0 0;
	text-align: center;
	font-size: 0.75em;
	font-weight: 400;
	color: rgba(0, 0, 0, 0.55);
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	-ms-transition: all 0.1s;
	-o-transition: all 0.1s;
	transition: all 0.1s;
}
.welcome h6 a{
	display:block;
	color: rgba(0, 107, 145, 0.65);
	text-decoration: none;
	outline: none;
}
.welcome h6.Hidden{
	opacity:0;
	-webkit-transform: scale(0.75);
	-moz-transform: scale(0.75);
	-ms-transform: scale(0.75);
	transform: scale(0.75);
}



/* Related demos */
.related {
	font-weight: 700;
	text-align: center;
	padding: 5em 0;
	display: none;
	background: #fff;
	color: rgba(0,0,0,0.3);
}

.overview .related {
	display: block;
}

.related > a {
	border: 3px solid black;
	border-color: initial;
	display: inline-block;
	text-align: center;
	margin: 20px 10px;
	padding: 25px;
}

.related > a:hover,
.related > a:focus {
	color: rgba(0,0,0,0.5);
}

.related a img {
	max-width: 100%;
	opacity: 0.8;
}

.related a:hover img,
.related a:active img {
	opacity: 1;
}

.related a h3 {
	margin: 0;
	padding: 0.5em 0 0.3em;
	max-width: 300px;
	text-align: left;
}
/* Main form wrapper */
.fs-form-wrap {
	position: relative;
	width: 100%;
	height: 100%;
	color: #fff;
}
body.whitemode .fs-form-wrap {
	color: rgba(26, 26, 26, 0.5);
}

.overview .fs-form-wrap {
	height: auto;
}

/* Title */
.fs-title {
	position: absolute;
	top: 0;
	left: 0;
	margin: 0;
	padding: 40px;
	width: 100%;
}

.fs-title h1 {
	margin: 0;
	font-weight:300;
}

/* Form */
.fs-form {
	position: relative;
	text-align: left;
	font-size: 2.5em;
}

.no-js .fs-form {
	padding: 0 0 6em 0;
}

/* Views (fullscreen and overview)*/
.fs-form-full {
	top: 32%;
	margin: 0 auto;
	width: 70%;
}

.fs-form-full,
.fs-message-error {
	max-width: 960px;
}

.fs-form-overview {
	padding: 2.5em 30% 6em;
	width: 100%;
	height: 100%;
	background: #fffed8;
	color: #3b3f45;
	font-size: 1.2em;
}
body.whitemode .fs-form-overview {
	background: #fff;
}

.fs-form-overview .fs-fields::before {
	display: block;
	margin-bottom: 1.5em;
	color: #3b3f45;
	content: 'Проверьте введённую Вами информацию';
	font-weight: 700;
	font-size: 1.85em;
}

/* Switch view animation (we hide the current view, switch the view class and show it again) */
.fs-form.fs-show {
	-webkit-animation: animFadeIn 0.5s;
	animation: animFadeIn 0.5s;
}

@-webkit-keyframes animFadeIn {
	0% { opacity: 0; }
	100% { opacity: 1; }
}

@keyframes animFadeIn {
	0% { opacity: 0; }
	100% { opacity: 1; }
}

.fs-form.fs-show .fs-fields {
	-webkit-animation: animMove 0.5s;
	animation: animMove 0.5s;
}

@-webkit-keyframes animMove {
	from { top: 100px; }
}

@keyframes animMove {
	from { top: 100px; }
} /* we need to use top here because otherwise all our fixed elements will become absolute */

/* Visibility control of elements */
.fs-form-full .fs-fields > li,
.fs-nav-dots, 
.fs-progress,
.fs-numbers,
button.fs-continue,
.fs-message-error,
.fs-message-final {
	visibility: hidden;
}

.no-js .fs-form-full .fs-fields > li {
	visibility: visible;
}

.fs-show {
	visibility: visible !important;
}

/* Some general styles */
.fs-form-wrap button {
	border: none;
	background: none;
}

.fs-form-wrap button[disabled] {
	opacity: 0.3;
	pointer-events: none;
}

.fs-form-wrap input:focus,
.fs-form-wrap button:focus {
	outline: none;
}

/* Hide the submit button */
.fs-form .fs-submit {
	display: none;
}

/* Fields */
.fs-fields {
	position: relative;
	margin: 0 auto;
	padding: 0;
	top: 0;
	list-style: none;
}

.fs-form-overview ol {
	max-width: ;
}

.fs-fields > li {
	position: relative;
	z-index: 1;
	margin: 0;
	padding: 0;
	border: none;
}

.fs-fields > li:hover {
	z-index: 999;
}

.js .fs-form-full .fs-fields > li {
	position: absolute;
	width: 100%;
}

.fs-form-overview .fs-fields > li,
.no-js .fs-form .fs-fields > li {
	margin: 1em 0 2em;
	padding: 0 0 2em 0;
	border-bottom: 2px solid rgba(0,0,0,0.1);
}

/* Labels & info */
.fs-fields > li label {
	position: relative;
}

.fs-fields > li label.fs-field-label {
	display: inline-block;
	padding: 0 5px 1em 0;
	font-weight: 400;
	pointer-events: none;
	width:100%;
}

.fs-form-full .fs-fields > li label[data-info]::after {
	position: relative;
	display: inline-block;
	margin-left: 10px;
	width: 24px;
	height: 24px;
	border: 2px solid rgba(0, 0, 0, 0.4);
	color: rgba(0, 0, 0, 0.4);
	border-radius: 50%;
	content: '?';
	vertical-align: top;
	text-align: center;
	font-weight: 700;
	font-style: normal;
	font-size: 16px;
	font-family: 'Roboto',Georgia, serif;
	line-height: 19px;
	cursor: pointer;
	pointer-events: auto;
}

.fs-form-full .fs-fields > li label[data-info]::before {
    position: absolute;
    bottom: 100%;
   	left: 0;
    padding: 0 0 10px;
    min-width: 200px;
	content: attr(data-info);
	font-size: 0.4em;
	color: #6a7b7e;
    opacity: 0;
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    -webkit-transform: translate3d(0,-5px,0);
    transform: translate3d(0,-5px,0);
    pointer-events: none;
}


body.whitemode .fs-form-full .fs-fields > li label[data-info]::before {
	color: rgba(0, 0, 0, 0.7);
}

.fs-form-full .fs-fields > li label[data-info]:hover::before {
    opacity: 1;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
	color:red;
}

.fs-form-full .fs-fields > li label:hover ~ .fs-info,
.fs-form-full .fs-fields > li .fs-info:hover {
	opacity: 1;
	-webkit-transform: translateY(0);
	transform: translateY(0);
	pointer-events: auto;
}


/* Inputs */
.fs-fields input {
	display: inline-block;
	margin: 0;
	padding: 0 0 0.15em;
	width: 100%;
	border: none;
	border-bottom: 2px solid rgba(0,0,0,0.2);
	background-color: transparent;
	color: #fffed8;
	text-overflow: ellipsis;
	font-weight: bold;
	font-size: 1.5em;
	border-radius: 0;
	-webkit-transition : border 200ms ease-out;
	-moz-transition : border 200ms ease-out;
	-o-transition : border 200ms ease-out;
	transition : border 200ms ease-out;
}
body.whitemode .fs-fields input {
	color: rgba(36, 36, 36, 0.85);
}

.fs-fields input[type=number]::-webkit-inner-spin-button, 
.fs-fields input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

.fs-fields input.half {
	width: 49%;
}
.fs-fields input.third {
	width: 32%;
}

.fs-fields input:invalid {
	box-shadow: none; /* removes red shadow in FF*/
}

.fs-form-overview .fs-fields input {
	border-bottom-color: transparent;
	color: rgba(0,0,0,0.5);
}

.fs-fields input:focus {
	background-color: #3b3f45; /* Fixes chrome bug with placeholder */
}

body.whitemode .fs-fields input:focus {
	background-color: transparent;
	border-bottom-color: rgba(0, 0, 0, 0.45);
}

body.whitemode .fs-form-overview input:focus {
	border-bottom-color: rgba(0, 0, 0, 0);
}

.fs-form-overview .fs-fields input:focus {
	background-color: #fffed8; /* Fixes chrome bug with placeholder */
}

.fs-form-overview .fs-fields input {
	font-size: 1.2em;
}

.fs-fields .fs-radio-custom input[type="radio"] {
	position: absolute;
	display: block;
	margin: 30px auto 20px;
	margin: 0 auto 20px;
	width: 100%;
	height: 100%;
	opacity: 0;
	cursor: pointer;
}




input[type=range] {
    -webkit-appearance: none;
    border: none!important;
    width: 100%;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.4em;
    background: rgba(36, 36, 36, 0.18);
    border: none;
    border-radius: 200px;
	-webkit-transition: all 0.2s;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 0.8em;
    width: 0.8em;
    border-radius: 50%;
    background: rgb(66, 66, 66);
    margin-top: -0.2em;
	-webkit-transition: all 0.13s;
	-webkit-transform: scale(1);
	cursor:pointer;
}
input[type=range]:focus {
    outline: none;
}
input[type=range]:active::-webkit-slider-runnable-track {
    background: rgba(3, 3, 3, 0.1);
}
input[type=range]:active::-webkit-slider-thumb {
    background: rgb(50,50,50);
	-webkit-transform: scale(1.2);
}

input[type=range]::-moz-range-track {
    width: 100%;
    height: 15%;
    background: rgba(36, 36, 36, 0.2);
    border: none;
    border-radius: 200px;
}
input[type=range]::-moz-range-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: rgba(36, 36, 36, 0.85);
}

/*hide the outline behind the border*/
input[type=range]:-moz-focusring{
    outline: 1px solid white;
    outline-offset: -1px;
}

input[type=range]::-ms-track {
    width: 100%;
    height: 15%;
    
    /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
    background: transparent;
    
    /*leave room for the larger thumb to overflow with a transparent border */
    border-color: transparent;
    border-width: 6px 0;

    /*remove default tick marks*/
    color: transparent;
}
input[type=range]::-ms-fill-lower {
    background: #777;
    border-radius: 200px;
}
input[type=range]::-ms-fill-upper {
    background: rgba(36, 36, 36, 0.2);
    border-radius: 200px;
}
input[type=range]::-ms-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: rgba(36, 36, 36, 0.85);
}
input[type=range]:focus::-ms-fill-lower {
    background: #888;
}
input[type=range]:focus::-ms-fill-upper {
    background: #ccc;
}


















.fs-fields > li .fs-radio-custom span {
	float: left;
	position: relative;
	margin-right: 3%;
	padding: 10px;
	max-width: 200px;
	width: 30%;
	text-align: center;
	font-weight: 700;
	font-size: 50%;
	font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.fs-fields > li .fs-radio-custom span label {
	color: rgba(0,0,0,0.4);
	-webkit-transition: color 0.3s;
	transition: color 0.3s;
}

.fs-form-overview .fs-fields > li .fs-radio-custom span {
	max-width: 140px;
}

.fs-form-overview .fs-fields > li .fs-radio-custom span {
	font-size: 75%;
}

.fs-fields > li .fs-radio-custom label {
	display: block;
	padding-top: 100%;
	width: 100%;
	height: 100%;
	cursor: pointer;
}

.fs-fields .fs-radio-custom label::after {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 100%;
	height: 100%;
	background-position: 50% 0%;
	background-size: 85%;
	background-repeat: no-repeat;
	content: '';
	opacity: 0.5;
	-webkit-transition: opacity 0.2s;
	transition: opacity 0.2s;
	-webkit-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}

.fs-fields > li .fs-radio-custom span.button {
	height: auto;
	width: auto;
	padding:0;
}

.fs-fields > li .fs-radio-custom span.button input {
	display:none;
}
.fs-fields > li .fs-radio-custom span.button label {
	padding: 7% 20%;
	margin: 0;
	background: rgba(0, 0, 0, 0.16);
	border: 3px solid rgba(0, 0, 0, 0.44);
	border-radius: 1000px;
	max-width: none;
	max-height: none;
	font-weight: 400;
	font-size: 1.5em;
}
.fs-fields > li .fs-radio-custom span label img {
	height:10%;
	opacity:0.7;
	display: inline-block;
}

.fs-fields .fs-radio-custom label:hover::after,
.fs-fields input[type="radio"]:focus + label::after,
.fs-fields input[type="radio"]:checked + label::after {
	opacity: 1;
}

.fs-fields .fs-radio-custom input[type="radio"]:checked + label {
	color: #fffed8;
}
body.whitemode .fs-fields .fs-radio-custom input[type="radio"]:checked + label {
	color: rgba(0, 0, 0, 0.75);
}
body.whitemode .fs-fields .fs-radio-custom input[type="radio"]:checked + label img {
	opacity: 0.9;
}

.fs-form-overview .fs-fields .fs-radio-custom input[type="radio"]:checked + label {
	color: rgba(0,0,0,0.8);
}

.fs-fields textarea {
	padding: 0.25em;
	width: 100%;
	height: 200px;
	border: 2px solid rgba(0,0,0,0.2);
	background-color: transparent;
	color: #fffed8;
	font-weight: 700;
	font-size: 0.85em;
	resize: none;
}

.fs-form-overview .fs-fields textarea {
	height: 100px;
	color: rgba(0,0,0,0.5);
}

.fs-fields textarea:focus {
	outline: none;
}

.fs-form-overview .fs-fields textarea {
	padding: 0;
	border-color: transparent;
}

.fs-form-overview .fs-fields textarea:focus {
	background: #fffed8;
}

.fs-form div.cs-select.cs-skin-boxes {
	display: block;
}

.fs-form-overview .cs-skin-boxes > span {
	border-radius: 5px;
	width: 90px;
	height: 70px;
	font-size: 0.8em;
}

.fs-form-overview .cs-skin-boxes > span::before {
	padding-top: 50px;
	box-shadow: 0 20px 0 #292c30, inset 0 -5px #292c30;
}

.fs-fields input.fs-mark {
	padding-left: 1em;
	background-image: url(../img/dollar.svg);
	background-position: 0% 0.15em;
	background-size: auto 75%;
	background-repeat: no-repeat;
}

/* placeholder */
.fs-fields input::-webkit-input-placeholder,
.fs-fields textarea::-webkit-input-placeholder {
	color: rgba(0,0,0,0.1);
}

.fs-fields input:-moz-placeholder,
.fs-fields textarea:-moz-placeholder {
	color: rgba(0,0,0,0.1);
}

.fs-fields input::-moz-placeholder,
.fs-fields textarea::-moz-placeholder {
	color: rgba(0,0,0,0.1);
}

.fs-fields input:-ms-input-placeholder,
.fs-fields textarea:-ms-input-placeholder {
	color: rgba(0,0,0,0.1);
}

/* Hide placeholder when focused in Webkit browsers */
.fs-fields input:focus::-webkit-input-placeholder {
	color: transparent;
}

/* Dot navigation */
.fs-nav-dots {
	position: absolute;
	top: 50%;
	right: 60px;
	left: auto;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

.fs-nav-dots button {
	position: relative;
	display: block;
	padding: 0;
	margin: 16px 0;
	width: 16px;
	height: 16px;
	border-radius: 50%;
	background: transparent;
	-webkit-transition: -webkit-transform 0.3s ease, opacity 0.3s ease;
	transition: transform 0.3s ease, opacity 0.3s ease;
}

.fs-nav-dots button::before,
.fs-nav-dots button::after {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	background-color: rgba(0,0,0,0.5);
	content: '';
	text-indent: 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.fs-nav-dots button::after {
	background-color: rgba(0,0,0,0.4);
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,180deg);
	transform: perspective(1000px) rotate3d(0,1,0,180deg);
}

.fs-nav-dots button.fs-dot-current {
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,180deg);
	transform: perspective(1000px) rotate3d(0,1,0,180deg);
}

.fs-nav-dots button:hover::before,
.fs-nav-dots button.fs-dot-current::before {
	background: #fffed8;
}

body.whitemode .fs-nav-dots button:hover::before, body.whitemode .fs-nav-dots button.fs-dot-current::before {
	background: #3A3A3A;
}

/* Progress bar */
.fs-progress {
	position: absolute;
	top: 0;
	width: 0%;
	height: 0.5em;
	background: #fffed8;
	-webkit-transition: width 0.3s ease-in-out;
	transition: width 0.3s ease-in-out;
}
body.whitemode .fs-progress {
	background: rgba(0, 0, 0, 0.5);
}

/* Number indicator */
.fs-numbers {
	position: absolute;
	top: 0;
	right: 0;
	overflow: hidden;
	color: rgba(0,0,0,0.4);
	margin: 40px;
	width: 2em;
	font-weight: 400;
	font-size: 2em;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	cursor: default;
}

.fs-numbers:after {
	position: absolute;
	width: 100%;
	text-align: center;
	content: '/';
	font-weight: 300;
	opacity: 0.4;
	left: 0;
}

.fs-numbers span {
	float: right;
	width: 40%;
	text-align: center;
}

.fs-numbers .fs-number-current {
	float: left;
}

.fs-numbers .fs-number-new {
	position: absolute;
	left: 0;
	-webkit-transform: translateY(100%);
	transform: translateY(100%);
}

/* Animations for numbers */
/* Show next number */
.fs-numbers.fs-show-next .fs-number-new {
	-webkit-animation: animMoveUpFromDown 0.4s both;
	animation: animMoveUpFromDown 0.4s both;
}

@-webkit-keyframes animMoveUpFromDown {
	from { -webkit-transform: translateY(100%); }
	to { -webkit-transform: translateY(0); }
}

@keyframes animMoveUpFromDown {
	from { -webkit-transform: translateY(100%); transform: translateY(100%); }
	to { -webkit-transform: translateY(0); transform: translateY(0); }
}

.fs-numbers.fs-show-next .fs-number-current {
	-webkit-animation: animMoveUp 0.4s both;
	animation: animMoveUp 0.4s both;
}

@-webkit-keyframes animMoveUp {
	to { -webkit-transform: translateY(-100%); }
}

@keyframes animMoveUp {
	to { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
}

/* Show previous number */
.fs-numbers.fs-show-prev .fs-number-new {
	-webkit-animation: animMoveDownFromUp 0.4s both;
	animation: animMoveDownFromUp 0.4s both;
}

@-webkit-keyframes animMoveDownFromUp {
	from { -webkit-transform: translateY(-100%); }
	to { -webkit-transform: translateY(0); }
}

@keyframes animMoveDownFromUp {
	from { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
	to { -webkit-transform: translateY(0); transform: translateY(0); }
}

.fs-numbers.fs-show-prev .fs-number-current {
	-webkit-animation: animMoveDown 0.4s both;
	animation: animMoveDown 0.4s both;
}

@-webkit-keyframes animMoveDown {
	to { -webkit-transform: translateY(100%); }
}

@keyframes animMoveDown {
	to { -webkit-transform: translateY(100%); transform: translateY(100%); }
}

/* Continue button and submit button */
button.fs-submit,
button.fs-continue {
	padding: 0.6em 1.5em;
	border: 3px solid #232529;
	border-radius: 40px;
	font-weight: 700;
	color: rgba(0,0,0,0.4);
}

.fs-form-overview .fs-submit,
.no-js .fs-form .fs-submit  {
	display: block;
	float: right;
}

.fs-form-overview .fs-submit {
	border-color: #232529;
	color: #232529;
}

button.fs-continue {
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0 40px 60px 0;
	font-size: 1.25em;
}

button.fs-submit:hover,
button.fs-submit:focus,
button.fs-continue:hover {
	background: #232529;
	color: #fff;
}

.fs-continue::after {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	line-height: 3;
	text-align: center;
	background: transparent;
	color: rgba(0,0,0,0.3);
	content: 'или нажмите ENTER';
	font-size: 0.65em;
	pointer-events: none;
}

/* Error message */
.fs-message-error {
	position: absolute;
	bottom: 70%;
	left: 50%;
	z-index: 800;
	max-width: 960px;
	width: 70%;
	color: #eb7e7f;
	font-weight: 100;
	font-size: 1em;
	opacity: 0;
	-webkit-transform: translate3d(-50%,-5px,0);
	transform: translate3d(-50%,-5px,0);
}

.fs-message-error.fs-show {
	opacity: 1;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
	transition: transform 0.3s, opacity 0.3s;
	-webkit-transform: translate3d(-50%,0,0);
	transform: translate3d(-50%,0,0);
}

/* Animation classes & animations */
.fs-form li.fs-current {
	visibility: visible;
}

.fs-form li.fs-hide,
.fs-form li.fs-show {
	pointer-events: none;
}

/* Hide current li when navigating to next question */
.fs-form .fs-display-next .fs-hide {
	visibility: visible;
}

.fs-form .fs-display-next .fs-hide .fs-anim-lower,
.fs-form .fs-display-next .fs-hide .fs-anim-upper {
	-webkit-animation: animHideNext 0.5s cubic-bezier(0.7,0,0.3,1) forwards;
	animation: animHideNext 0.5s cubic-bezier(0.7,0,0.3,1) forwards;
}

.fs-form .fs-display-next .fs-hide .fs-anim-lower {
	-webkit-animation-delay: 0.1s;
	animation-delay: 0.1s;
}

@-webkit-keyframes animHideNext {
	to { opacity: 0; -webkit-transform: translate3d(0,-500px,0); }
}

@keyframes animHideNext {
	to { opacity: 0; -webkit-transform: translate3d(0,-500px,0); transform: translate3d(0,-500px,0); }
}

/* Show new li when navigating to next question */
.fs-form .fs-display-next .fs-show .fs-anim-lower,
.fs-form .fs-display-next .fs-show .fs-anim-upper {
	-webkit-animation: animShowNext 0.5s cubic-bezier(0.7,0,0.3,1) both 0.15s;
	animation: animShowNext 0.5s cubic-bezier(0.7,0,0.3,1) both 0.15s;
}

.fs-form .fs-display-next .fs-show .fs-anim-lower {
	-webkit-animation-delay: 0.25s;
	animation-delay: 0.25s;
}

@-webkit-keyframes animShowNext {
	from { opacity: 0; -webkit-transform: translate3d(0,500px,0); }
}

@keyframes animShowNext {
	from { opacity: 0; -webkit-transform: translate3d(0,500px,0); transform: translate3d(0,500px,0); }
}

/* Hide current li when navigating to previous question */
.fs-form .fs-display-prev .fs-hide {
	visibility: visible;
}

.fs-form .fs-display-prev .fs-hide .fs-anim-lower,
.fs-form .fs-display-prev .fs-hide .fs-anim-upper {
	-webkit-animation: animHidePrev 0.5s cubic-bezier(0.7,0,0.3,1) forwards;
	animation: animHidePrev 0.5s cubic-bezier(0.7,0,0.3,1) forwards;
}

.fs-form .fs-display-prev .fs-hide .fs-anim-upper {
	-webkit-animation-delay: 0.1s;
	animation-delay: 0.1s;
}

@-webkit-keyframes animHidePrev {
	to { opacity: 0; -webkit-transform: translate3d(0,500px,0); }
}

@keyframes animHidePrev {
	to { opacity: 0; -webkit-transform: translate3d(0,500px,0); transform: translate3d(0,500px,0); }
}

/* Show new li when navigating to previous question */
.fs-form .fs-display-prev .fs-show .fs-anim-lower,
.fs-form .fs-display-prev .fs-show .fs-anim-upper {
	-webkit-animation: animShowPrev 0.5s cubic-bezier(0.7,0,0.3,1) both 0.15s;
	animation: animShowPrev 0.5s cubic-bezier(0.7,0,0.3,1) both 0.15s;
}

.fs-form .fs-display-prev .fs-show .fs-anim-upper {
	-webkit-animation-delay: 0.25s;
	animation-delay: 0.25s;
}

@-webkit-keyframes animShowPrev {
	from { opacity: 0; -webkit-transform: translate3d(0,-500px,0); }
}

@keyframes animShowPrev {
	from { opacity: 0; -webkit-transform: translate3d(0,-500px,0); transform: translate3d(0,-500px,0); }
}

/* Remove IE clear cross */
input[type=text]::-ms-clear {
    display: none;
}

/* Adjust form for smaller screens */
@media screen and (max-width: 52.5em) {
	body {
		min-height: 500px;
	}

	.fs-form-wrap {
		font-size: 70%;
	}

	.fs-form {
		top: 6em;
		right: 2em;
		left: 0;
		padding: 0 3.75em 0 1em;
		width: auto;
		font-size: 2em;
	}

	.fs-form.fs-form-overview {
		top: 0;
		right: 0;
		padding: 1.5em 1em 8em 1em;
		font-size: 1.5em;
	}

	.fs-title {
		padding: 20px;
	}

	.fs-numbers {
		margin: 20px;
	}

	.fs-nav-dots {
		right: 25px;
	}

	button.fs-continue {
		right: 20px;
		bottom: 20px;
		margin: 0;
		padding: 50px 0 0 50px;
		width: 50px;
		height: 50px;
		border-radius: 50%;
		font-size: 2em;
	}

	button.fs-continue::before {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		content: '\27A1';
		text-align: center;
		font-size: 1em;
		line-height: 50px;
	}

	.fs-continue::after {
		content: '';
	}

	button.fs-submit {
		width: 100%;
		font-size: 1.25em;
	}

	.fs-message-error {
		bottom: 1.75em;
		left: 0;
		padding: 0 90px 0 2em;
		width: 100%;
		font-size: 1.5em;
		-webkit-transform: translate3d(0,-5px,0);
		transform: translate3d(0,-5px,0);
	}

	.fs-message-error.fs-show {
		-webkit-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}
}
/* Custom select */
/* Read the article: http://tympanus.net/codrops/2014/07/10/inspiration-for-custom-select-elements/ */
/* Demo: http://tympanus.net/Development/SelectInspiration/ */
/* GitHub: https://github.com/codrops/SelectInspiration */

/* Default custom select styles */
div.cs-select {
	display: inline-block;
	vertical-align: middle;
	position: relative;
	text-align: left;
	background: #fff;
	z-index: 100;
	width: 100%;
	max-width: 500px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

div.cs-select:focus {
	outline: none; /* For better accessibility add a style for this in your skin */
}

.cs-select select {
	display: none;
}

.cs-select span {
	display: block;
	position: relative;
	cursor: pointer;
	padding: 1em;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

/* Placeholder and selected option */
.cs-select > span {
	padding-right: 3em;
}

.cs-select > span::after,
.cs-select .cs-selected span::after {
	speak: none;
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.cs-select > span::after {
	content: '\25BE';
	right: 1em;
}

.cs-select .cs-selected span::after {
	content: '\2713';
	margin-left: 1em;
}

.cs-select.cs-active > span::after {
	-webkit-transform: translateY(-50%) rotate(180deg);
	transform: translateY(-50%) rotate(180deg);
}

/* Options */
.cs-select .cs-options {
	position: absolute;
	overflow: hidden;
	width: 100%;
	background: #fff;
	visibility: hidden;
	z-index: 10000;
}

.cs-select.cs-active .cs-options {
	visibility: visible;
}

.cs-select ul {
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}

.cs-select ul span {
	padding: 1em;
}

.cs-select ul li.cs-focus span {
	background-color: #ddd;
}

/* Optgroup and optgroup label */
.cs-select li.cs-optgroup ul {
	padding-left: 1em;
}

.cs-select li.cs-optgroup > span {
	cursor: default;
}
/* Custom select */
/* Read the article: http://tympanus.net/codrops/2014/07/10/inspiration-for-custom-select-elements/ */
/* Demo: http://tympanus.net/Development/SelectInspiration/ */
/* GitHub: https://github.com/codrops/SelectInspiration */

/* Custom select skin: fullscreen color picker (adjusted for fullscreen form) */
div.cs-skin-boxes {
	background: transparent;
	font-size: 0.65em;
	font-weight: 700;
	max-width: 300px;
	z-index: 2000;
	color: #fff;
}

@media screen and (max-width: 30em) {
	div.cs-skin-boxes { font-size: 1em; }
}

.cs-skin-boxes > span {
	border: 3px solid #292c30;
	border-radius: 5px;
	width: 150px;
	height: 140px;
	font-size: 0.5em;
	padding: 0 0 0 10px;
	background: #555b64;
}

div.cs-skin-boxes:focus > span {
	box-shadow: 0 0 0 2px rgba(255,255,255,0.1);
}

.cs-skin-boxes > span::before {
	content: '';
	display: block;
	padding-top: 110px;
	margin-left: -10px;
	box-shadow: 0 25px 0 #292c30, inset 0 -10px #292c30;
}

.cs-skin-boxes > span::after,
.cs-skin-boxes.cs-active > span::after {
	top: auto;
	-webkit-transform: none;
	transform: none;
}

.cs-skin-boxes .cs-options {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	overflow: auto;
	background: #3b3f45;
	font-size: 12px;
	opacity: 0;
	-webkit-transition: opacity 0.3s, visibility 0s 0.3s;
	transition: opacity 0.3s, visibility 0s 0.3s;
}

.cs-skin-boxes.cs-active .cs-options {
	opacity: 1;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.cs-skin-boxes .cs-options ul {
	position: absolute;
	width: 100%;
	height: 100%;
	padding: 10px;
}

.cs-skin-boxes .cs-options li {
	width: 20%;
	height: 25%;
	float: left;
	position: relative;
	cursor: pointer;
	border-radius: 14px;
	overflow: hidden;
	opacity: 0;
	color: rgba(255,255,255,0.6);
	border: 10px solid transparent;
	background-clip: padding-box;
	-webkit-transform: scale3d(0.8,0.8,1);
	transform: scale3d(0.8,0.8,1);
	box-shadow: inset 0 -6em 0 -2em #282b30, inset 0 -1px 1px #000;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
	transition: transform 0.3s, opacity 0.3s;
}

@media screen and (max-width: 30em) {
	.cs-skin-boxes .cs-options li { box-shadow: none; border-width: 3px; border-radius: 8px;}
}

.cs-skin-boxes.cs-active .cs-options li {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(2) {
	-webkit-transition-delay: 0.01s;
	transition-delay: 0.01s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(3) {
	-webkit-transition-delay: 0.02s;
	transition-delay: 0.02s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(4) {
	-webkit-transition-delay: 0.03s;
	transition-delay: 0.03s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(5) {
	-webkit-transition-delay: 0.04s;
	transition-delay: 0.04s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(6) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(7) {
	-webkit-transition-delay: 0.06s;
	transition-delay: 0.06s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(8) {
	-webkit-transition-delay: 0.07s;
	transition-delay: 0.07s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(9) {
	-webkit-transition-delay: 0.08s;
	transition-delay: 0.08s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(10) {
	-webkit-transition-delay: 0.09s;
	transition-delay: 0.09s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(11) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(12) {
	-webkit-transition-delay: 0.11s;
	transition-delay: 0.11s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(13) {
	-webkit-transition-delay: 0.12s;
	transition-delay: 0.12s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(14) {
	-webkit-transition-delay: 0.13s;
	transition-delay: 0.13s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(15) {
	-webkit-transition-delay: 0.14s;
	transition-delay: 0.14s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(16) {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(17) {
	-webkit-transition-delay: 0.16s;
	transition-delay: 0.16s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(18) {
	-webkit-transition-delay: 0.17s;
	transition-delay: 0.17s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(19) {
	-webkit-transition-delay: 0.18s;
	transition-delay: 0.18s;
}

.cs-skin-boxes.cs-active .cs-options li:nth-child(20) {
	-webkit-transition-delay: 0.19s;
	transition-delay: 0.19s;
}

.cs-skin-boxes .cs-options li.cs-selected::after {
	content: '\2714';
	color: rgba(0,0,0,0.1);
	position: absolute;
	font-size: 2em;
	top: 50%;
	left: 50%;
	-webkit-transform: translate3d(-50%,-50%,0) translate3d(0,-1em,0);
	transform: translate3d(-50%,-50%,0) translate3d(0,-1em,0);
}

.cs-skin-boxes .cs-options li.cs-selected span::after {
	content: '';
}

@media screen and (max-width: 30em) {
	.cs-skin-boxes .cs-options li.cs-selected::after { 
		-webkit-transform: translate3d(-50%,-50%,0);
		transform: translate3d(-50%,-50%,0);
	}
}

.cs-skin-boxes .cs-options li.color-588c75 {
	background-color: #588c75;
}

.cs-skin-boxes .cs-options li.color-b0c47f {
	background-color: #b0c47f;
}

.cs-skin-boxes .cs-options li.color-f3e395 {
	background-color: #f3e395;
}

.cs-skin-boxes .cs-options li.color-f3ae73 {
	background-color: #f3ae73;
}

.cs-skin-boxes .cs-options li.color-da645a {
	background-color: #da645a;
}

.cs-skin-boxes .cs-options li.color-79a38f {
	background-color: #79a38f;
}

.cs-skin-boxes .cs-options li.color-c1d099 {
	background-color: #c1d099;
}

.cs-skin-boxes .cs-options li.color-f5eaaa {
	background-color: #f5eaaa;
}

.cs-skin-boxes .cs-options li.color-f5be8f {
	background-color: #f5be8f;
}

.cs-skin-boxes .cs-options li.color-e1837b {
	background-color: #e1837b;
}

.cs-skin-boxes .cs-options li.color-9bbaab {
	background-color: #9bbaab;
}

.cs-skin-boxes .cs-options li.color-d1dcb2 {
	background-color: #d1dcb2;
}

.cs-skin-boxes .cs-options li.color-f9eec0 {
	background-color: #f9eec0;
}

.cs-skin-boxes .cs-options li.color-f7cda9 {
	background-color: #f7cda9;
}

.cs-skin-boxes .cs-options li.color-e8a19b {
	background-color: #e8a19b;
}

.cs-skin-boxes .cs-options li.color-bdd1c8 {
	background-color: #bdd1c8;
}

.cs-skin-boxes .cs-options li.color-e1e7cd {
	background-color: #e1e7cd;
}

.cs-skin-boxes .cs-options li.color-faf4d4 {
	background-color: #faf4d4;
}

.cs-skin-boxes .cs-options li.color-fbdfc9 {
	background-color: #fbdfc9;
}

.cs-skin-boxes .cs-options li.color-f1c1bd {
	background-color: #f1c1bd;
}

.cs-skin-boxes .cs-options span {
	position: absolute;
	bottom: 0;
	width: 100%;
	line-height: 2em;
	text-transform: uppercase;
	letter-spacing: 1px;
}

@media screen and (max-width: 30em) {
	.cs-skin-boxes .cs-options span { display: none; }
}

.cs-skin-boxes .cs-options li span:hover,
.cs-skin-boxes li.cs-focus span,
.cs-skin-boxes li.cs-selected span {
	color: #fff;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,400&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<script>
window.usernames = {'men':[],'women':[]};
window.usernames.men = [['Николас','Кейдж'],['Элвис','Пресли'],['Марти','Макфлай'],['Джим','Керри'],['Уолтер','Митти'],['Чак','Норрис'],['Гарри','Поттер'],['Уолтер','Уайт'],['Леонардо','Дикаприо'],['Билл','Гейтс'],['Тим','Кук'],['Джесси','Пинкман'],['Тони','Старк'],['Джонни','Депп'],['Рон','Уизли'],['Питер','Паркер'],['Брюс','Уиллис'],['Джеймс','Бонд'],['Арнольд','Шварценеггер'],['Шерлок','Холмс'],['Перси','Джексон']];
window.usernames.women = [['Хлоя','Морец'],['Меган','Фокс'],['Эмма','Уотсон'],['Саша','Грей'],['Мэри','Джейн'],['Кира','Найтли'],['Пеппер','Поттс'],['Гермиона','Грейнджер'],['Наташа','Романофф'],['Дженнифер','Лоуренс']];
window.emails = ['john.doe@example.org','clark.kent@smallville.com','tony@stark.com'];
window.logins = {'men':[],'women':[]};
window.logins.men = ['Morpheus','AgentSmith','GreatGatsby','CaptainShepard','Agent007','IronMan','Oldboy','GreenHornet','Wolverine','MenInBlack','WalterWhite','Skrillex'];
window.logins.women = ['Trinity','Katniss','BlackWidow'];
window.passwords = ['IamThe1WhoKnocks','IamTheDanger','','IronWarriorRulezzz777','GreenHornetAttacks','LazarusProject8','Lie2me10','Wolverine13','Vendetta006','BetterCallSoul','BigBoss13','MetalGear7','SolidSnake41','Elementary20','SuperHero123','UnderDome13','ZombyLand09'];
var RandomizeForms = function(gender){
	if(gender=='female'){
		var username = window.usernames.women[(Math.floor(Math.random()*window.usernames.men.length))];
		var login = window.logins.women[(Math.floor(Math.random()*window.logins.men.length))];
	}else{
		var username = window.usernames.men[(Math.floor(Math.random()*window.usernames.men.length))];
		var login = window.logins.men[(Math.floor(Math.random()*window.logins.women.length))];
	}
	$("#name").attr("placeholder",username[0]);
	$("#surname").attr("placeholder",username[1]);
	$("#email").attr("placeholder",window.emails[(Math.floor(Math.random()*window.emails.length))]);
	$("#login").attr("placeholder",login);
	$("#password").attr("placeholder",window.passwords[(Math.floor(Math.random()*window.passwords.length))]);
}

$('#storage_size').change(function(){
	var size = $('#storage_size').val();
	$('#manual_storage_size').val(size);
	if(size>1023){
		$('#storage_size_tip').text('мегабайт или '+formatSizeUnits(size));
	}else{
		$('#storage_size_tip').text('мегабайт');
	}
});
$('#manual_storage_size').change(function(){
	var size = $('#manual_storage_size').val();
	if(size<64){
		size = 64;
		$('#manual_storage_size').val(64);
	}
	$('#storage_size').val(size);
	if(size>1023){
		$('#storage_size_tip').text('мегабайт или '+formatSizeUnits(size));
	}else{
		$('#storage_size_tip').text('мегабайт');
	}
});

function RunWizard(){
	$("#zuruInstallerWelcomeCurtain").children().addClass('Hidden');
	setTimeout(function(){
		$("#zuruInstallerWelcomeCurtain").fadeOut(200);
	},150);
}

function formatSizeUnits(mbytes){
	if(mbytes>=1152921504606846976){
		mbytes=(mbytes/1152921504606846976).toFixed(2)+' йоттабайт';
	}else if(mbytes>=1125899906842624){
		mbytes=(mbytes/1125899906842624).toFixed(2)+' зеттабайт';
	}else if(mbytes>=1099511627776){
		mbytes=(mbytes/1099511627776).toFixed(2)+' эксабайт';
	}else if(mbytes>=1073741824){
		mbytes=(mbytes/1073741824).toFixed(2)+' петабайт';
	}else if (mbytes>=1048576){
		mbytes=(mbytes/1048576).toFixed(2)+' терабайт';
	}else if(mbytes>=1024){
		mbytes=(mbytes/1024).toFixed(2)+' гигабайт';
	}
	return mbytes;
}

window.onload = function(){
<? 
if(isset($_GET['gender'])&&!empty($_GET['gender'])&&($_GET['gender']=='male'||$_GET['gender']=='female')){
	echo'RandomizeForms(\''.$_GET['gender'].'\');';
}
?>


if((typeof($('#gender_male').val())!=='undefined'||typeof($('#gender_female').val())!=='undefined')&&(typeof($('#name').val())!=='undefined')&&(typeof($('#surname').val())!=='undefined')&&(typeof($('#birth_day').val())!=='undefined')&&(typeof($('#birth_month').val())!=='undefined')&&(typeof($('#birth_year').val())!=='undefined')&&(typeof($('#mobile_phone').val())!=='undefined')&&(typeof($('#email').val())!=='undefined')&&(typeof($('#login').val())!=='undefined')&&(typeof($('#password').val())!=='undefined')&&(typeof($('#storage_size').val())!=='undefined')){
	$('#zuruInstallerWelcomeCurtain h1').html('Здравствуйте, '+$('#name').val());
	$('#zuruInstallerWelcomeCurtain h2').html('Мы полностью готовы начать установку!');
	$('#zuruInstallerWelcomeCurtain .superbutton').attr('onmousedown','RunInstallation();');
}else{
	$('#zuruInstallerWelcomeCurtain .superbutton').attr('onmousedown','RunWizard();');
}
$('#zuruInstallerWelcomeCurtain .superbutton').text('Продолжить');
$('#zuruInstallerWelcomeCurtain .superbutton').removeClass('Disabled');
};






/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssanimations-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-css_calc-css_vhunit-load
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.cssanimations=function(){return F("animationName")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},Modernizr.addTest("csscalc",function(){var a="width:",b="calc(10px);",c=document.createElement("div");return c.style.cssText=a+Modernizr._prefixes.join(b+a),!!c.style.length}),Modernizr.addTest("cssvhunit",function(){var a;return Modernizr.testStyles("#modernizr { height: 50vh; }",function(b,c){var d=parseInt(window.innerHeight/2,10),e=parseInt((window.getComputedStyle?getComputedStyle(b,null):b.currentStyle).height,10);a=e==d}),a});
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );
/**
 * selectFx.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
;( function( window ) {
	
	'use strict';

	/**
	 * based on from https://github.com/inuyaksa/jquery.nicescroll/blob/master/jquery.nicescroll.js
	 */
	function hasParent( e, p ) {
		if (!e) return false;
		var el = e.target||e.srcElement||e||false;
		while (el && el != p) {
			el = el.parentNode||false;
		}
		return (el!==false);
	};
	
	/**
	 * extend obj function
	 */
	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	/**
	 * SelectFx function
	 */
	function SelectFx( el, options ) {	
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );
		this._init();
	}

	/**
	 * SelectFx options
	 */
	SelectFx.prototype.options = {
		// if true all the links will open in a new tab.
		// if we want to be redirected when we click an option, we need to define a data-link attr on the option of the native select element
		newTab : true,
		// when opening the select element, the default placeholder (if any) is shown
		stickyPlaceholder : true,
		// callback when changing the value
		onChange : function( val ) { return false; }
	}

	/**
	 * init function
	 * initialize and cache some vars
	 */
	SelectFx.prototype._init = function() {
		// check if we are using a placeholder for the native select box
		// we assume the placeholder is disabled and selected by default
		var selectedOpt = this.el.querySelector( 'option[selected]' );
		this.hasDefaultPlaceholder = selectedOpt && selectedOpt.disabled;

		// get selected option (either the first option with attr selected or just the first option)
		this.selectedOpt = selectedOpt || this.el.querySelector( 'option' );

		// create structure
		this._createSelectEl();

		// all options
		this.selOpts = [].slice.call( this.selEl.querySelectorAll( 'li[data-option]' ) );
		
		// total options
		this.selOptsCount = this.selOpts.length;
		
		// current index
		this.current = this.selOpts.indexOf( this.selEl.querySelector( 'li.cs-selected' ) ) || -1;
		
		// placeholder elem
		this.selPlaceholder = this.selEl.querySelector( 'span.cs-placeholder' );

		// init events
		this._initEvents();
	}

	/**
	 * creates the structure for the select element
	 */
	SelectFx.prototype._createSelectEl = function() {
		var self = this, options = '', createOptionHTML = function(el) {
			var optclass = '', classes = '', link = '';

			if( el.selectedOpt && !this.foundSelected && !this.hasDefaultPlaceholder ) {
				classes += 'cs-selected ';
				this.foundSelected = true;
			}
			// extra classes
			if( el.getAttribute( 'data-class' ) ) {
				classes += el.getAttribute( 'data-class' );
			}
			// link options
			if( el.getAttribute( 'data-link' ) ) {
				link = 'data-link=' + el.getAttribute( 'data-link' );
			}

			if( classes !== '' ) {
				optclass = 'class="' + classes + '" ';
			}

			return '<li ' + optclass + link + ' data-option data-value="' + el.value + '"><span>' + el.textContent + '</span></li>';
		};

		[].slice.call( this.el.children ).forEach( function(el) {
			if( el.disabled ) { return; }

			var tag = el.tagName.toLowerCase();

			if( tag === 'option' ) {
				options += createOptionHTML(el);
			}
			else if( tag === 'optgroup' ) {
				options += '<li class="cs-optgroup"><span>' + el.label + '</span><ul>';
				[].slice.call( el.children ).forEach( function(opt) {
					options += createOptionHTML(opt);
				} )
				options += '</ul></li>';
			}
		} );

		var opts_el = '<div class="cs-options"><ul>' + options + '</ul></div>';
		this.selEl = document.createElement( 'div' );
		this.selEl.className = this.el.className;
		this.selEl.tabIndex = this.el.tabIndex;
		this.selEl.innerHTML = '<span class="cs-placeholder">' + this.selectedOpt.textContent + '</span>' + opts_el;
		this.el.parentNode.appendChild( this.selEl );
		this.selEl.appendChild( this.el );
	}

	/**
	 * initialize the events
	 */
	SelectFx.prototype._initEvents = function() {
		var self = this;

		// open/close select
		this.selPlaceholder.addEventListener( 'click', function() {
			self._toggleSelect();
		} );

		// clicking the options
		this.selOpts.forEach( function(opt, idx) {
			opt.addEventListener( 'click', function() {
				self.current = idx;
				self._changeOption();
				// close select elem
				self._toggleSelect();
			} );
		} );

		// close the select element if the target it?s not the select element or one of its descendants..
		document.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( self._isOpen() && target !== self.selEl && !hasParent( target, self.selEl ) ) {
				self._toggleSelect();
			}
		} );

		// keyboard navigation events
		this.selEl.addEventListener( 'keydown', function( ev ) {
			var keyCode = ev.keyCode || ev.which;

			switch (keyCode) {
				// up key
				case 38:
					ev.preventDefault();
					self._navigateOpts('prev');
					break;
				// down key
				case 40:
					ev.preventDefault();
					self._navigateOpts('next');
					break;
				// space key
				case 32:
					ev.preventDefault();
					if( self._isOpen() && typeof self.preSelCurrent != 'undefined' && self.preSelCurrent !== -1 ) {
						self._changeOption();
					}
					self._toggleSelect();
					break;
				// enter key
				case 13:
					ev.stopPropagation();
					ev.preventDefault();
					if( self._isOpen() && typeof self.preSelCurrent != 'undefined' && self.preSelCurrent !== -1 ) {
						self._changeOption();
						self._toggleSelect();
					}
					break;
				// esc key
				case 27:
					ev.preventDefault();
					if( self._isOpen() ) {
						self._toggleSelect();
					}
					break;
			}
		} );
	}

	/**
	 * navigate with up/dpwn keys
	 */
	SelectFx.prototype._navigateOpts = function(dir) {
		if( !this._isOpen() ) {
			this._toggleSelect();
		}

		var tmpcurrent = typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1 ? this.preSelCurrent : this.current;
		
		if( dir === 'prev' && tmpcurrent > 0 || dir === 'next' && tmpcurrent < this.selOptsCount - 1 ) {
			// save pre selected current - if we click on option, or press enter, or press space this is going to be the index of the current option
			this.preSelCurrent = dir === 'next' ? tmpcurrent + 1 : tmpcurrent - 1;
			// remove focus class if any..
			this._removeFocus();
			// add class focus - track which option we are navigating
			classie.add( this.selOpts[this.preSelCurrent], 'cs-focus' );
		}
	}

	/**
	 * open/close select
	 * when opened show the default placeholder if any
	 */
	SelectFx.prototype._toggleSelect = function() {
		// remove focus class if any..
		this._removeFocus();
		
		if( this._isOpen() ) {
			if( this.current !== -1 ) {
				// update placeholder text
				this.selPlaceholder.textContent = this.selOpts[ this.current ].textContent;
			}
			classie.remove( this.selEl, 'cs-active' );
		}
		else {
			if( this.hasDefaultPlaceholder && this.options.stickyPlaceholder ) {
				// everytime we open we wanna see the default placeholder text
				this.selPlaceholder.textContent = this.selectedOpt.textContent;
			}
			classie.add( this.selEl, 'cs-active' );
		}
	}

	/**
	 * change option - the new value is set
	 */
	SelectFx.prototype._changeOption = function() {
		// if pre selected current (if we navigate with the keyboard)...
		if( typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1 ) {
			this.current = this.preSelCurrent;
			this.preSelCurrent = -1;
		}

		// current option
		var opt = this.selOpts[ this.current ];

		// update current selected value
		this.selPlaceholder.textContent = opt.textContent;
		
		// change native select element?s value
		this.el.value = opt.getAttribute( 'data-value' );

		// remove class cs-selected from old selected option and add it to current selected option
		var oldOpt = this.selEl.querySelector( 'li.cs-selected' );
		if( oldOpt ) {
			classie.remove( oldOpt, 'cs-selected' );
		}
		classie.add( opt, 'cs-selected' );

		// if there?s a link defined
		if( opt.getAttribute( 'data-link' ) ) {
			// open in new tab?
			if( this.options.newTab ) {
				window.open( opt.getAttribute( 'data-link' ), '_blank' );
			}
			else {
				window.location = opt.getAttribute( 'data-link' );
			}
		}

		// callback
		this.options.onChange( this.el.value );
	}

	/**
	 * returns true if select element is opened
	 */
	SelectFx.prototype._isOpen = function(opt) {
		return classie.has( this.selEl, 'cs-active' );
	}

	/**
	 * removes the focus class from the option
	 */
	SelectFx.prototype._removeFocus = function(opt) {
		var focusEl = this.selEl.querySelector( 'li.cs-focus' )
		if( focusEl ) {
			classie.remove( focusEl, 'cs-focus' );
		}
	}

	/**
	 * add to global namespace
	 */
	window.SelectFx = SelectFx;

} )( window );
/**
 * fullscreenForm.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
;( function( window ) {
	
	'use strict';

	var support = { animations : Modernizr.cssanimations },
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

	/**
	 * extend obj function
	 */
	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	/**
	 * createElement function
	 * creates an element with tag = tag, className = opt.cName, innerHTML = opt.inner and appends it to opt.appendTo
	 */
	function createElement( tag, opt ) {
		var el = document.createElement( tag )
		if( opt ) {
			if( opt.cName ) {
				el.className = opt.cName;
			}
			if( opt.inner ) {
				el.innerHTML = opt.inner;
			}
			if( opt.appendTo ) {
				opt.appendTo.appendChild( el );
			}
		}	
		return el;
	}

	/**
	 * FForm function
	 */
	function FForm( el, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
  		extend( this.options, options );
  		this._init();
	}

	/**
	 * FForm options
	 */
	FForm.prototype.options = {
		// show progress bar
		ctrlProgress : true,
		// show navigation dots
		ctrlNavDots : true,
		// show [current field]/[total fields] status
		ctrlNavPosition : true,
		// reached the review and submit step
		onReview : function() { return false; }
	};

	/**
	 * init function
	 * initialize and cache some vars
	 */
	FForm.prototype._init = function() {
		// the form element
		this.formEl = this.el.querySelector( 'form' );

		// list of fields
		this.fieldsList = this.formEl.querySelector( 'ol.fs-fields' );

		// current field position
		this.current = 0;

		// all fields
		this.fields = [].slice.call( this.fieldsList.children );
		
		// total fields
		this.fieldsCount = this.fields.length;
		
		// show first field
		classie.add( this.fields[ this.current ], 'fs-current' );

		// create/add controls
		this._addControls();

		// create/add messages
		this._addErrorMsg();
		
		// init events
		this._initEvents();
	};

	/**
	 * addControls function
	 * create and insert the structure for the controls
	 */
	FForm.prototype._addControls = function() {
		// main controls wrapper
		this.ctrls = createElement( 'div', { cName : 'fs-controls', appendTo : this.el } );

		// continue button (jump to next field)
		this.ctrlContinue = createElement( 'button', { cName : 'fs-continue', inner : 'Продолжить', appendTo : this.ctrls } );
		this._showCtrl( this.ctrlContinue );

		// navigation dots
		if( this.options.ctrlNavDots ) {
			this.ctrlNav = createElement( 'nav', { cName : 'fs-nav-dots', appendTo : this.ctrls } );
			var dots = '';
			for( var i = 0; i < this.fieldsCount; ++i ) {
				dots += i === this.current ? '<button class="fs-dot-current"></button>' : '<button disabled></button>';
			}
			this.ctrlNav.innerHTML = dots;
			this._showCtrl( this.ctrlNav );
			this.ctrlNavDots = [].slice.call( this.ctrlNav.children );
		}

		// field number status
		if( this.options.ctrlNavPosition ) {
			this.ctrlFldStatus = createElement( 'span', { cName : 'fs-numbers', appendTo : this.ctrls } );

			// current field placeholder
			this.ctrlFldStatusCurr = createElement( 'span', { cName : 'fs-number-current', inner : Number( this.current + 1 ) } );
			this.ctrlFldStatus.appendChild( this.ctrlFldStatusCurr );

			// total fields placeholder
			this.ctrlFldStatusTotal = createElement( 'span', { cName : 'fs-number-total', inner : this.fieldsCount } );
			this.ctrlFldStatus.appendChild( this.ctrlFldStatusTotal );
			this._showCtrl( this.ctrlFldStatus );
		}

		// progress bar
		if( this.options.ctrlProgress ) {
			this.ctrlProgress = createElement( 'div', { cName : 'fs-progress', appendTo : this.ctrls } );
			this._showCtrl( this.ctrlProgress );
		}
	}

	/**
	 * addErrorMsg function
	 * create and insert the structure for the error message
	 */
	FForm.prototype._addErrorMsg = function() {
		// error message
		this.msgError = createElement( 'span', { cName : 'fs-message-error', appendTo : this.el } );
	}

	/**
	 * init events
	 */
	FForm.prototype._initEvents = function() {
		var self = this;

		// show next field
		this.ctrlContinue.addEventListener( 'click', function() {
			self._nextField(); 
		} );

		// navigation dots
		if( this.options.ctrlNavDots ) {
			this.ctrlNavDots.forEach( function( dot, pos ) {
				dot.addEventListener( 'click', function() {
					self._showField( pos );
				} );
			} );
		}

		// jump to next field without clicking the continue button (for fields/list items with the attribute "data-input-trigger")
		this.fields.forEach( function( fld ) {
			if( fld.hasAttribute( 'data-input-trigger' ) ) {
				var input = fld.querySelector( 'input[type="radio"]' ) || /*fld.querySelector( '.cs-select' ) ||*/ fld.querySelector( 'select' ); // assuming only radio and select elements (TODO: exclude multiple selects)
				if( !input ) return;

				switch( input.tagName.toLowerCase() ) {
					case 'select' : 
						input.addEventListener( 'change', function() { self._nextField(); } );
						break;

					case 'input' : 
						[].slice.call( fld.querySelectorAll( 'input[type="radio"]' ) ).forEach( function( inp ) {
							inp.addEventListener( 'change', function(ev) { self._nextField(); } );
						} ); 
						break;

					/*
					// for our custom select we would do something like:
					case 'div' : 
						[].slice.call( fld.querySelectorAll( 'ul > li' ) ).forEach( function( inp ) {
							inp.addEventListener( 'click', function(ev) { self._nextField(); } );
						} ); 
						break;
					*/
				}
			}
		} );

		// keyboard navigation events - jump to next field when pressing enter
		document.addEventListener( 'keydown', function( ev ) {
			if( !self.isLastStep && ev.target.tagName.toLowerCase() !== 'textarea' ) {
				var keyCode = ev.keyCode || ev.which;
				if( keyCode === 13 ) {
					ev.preventDefault();
					self._nextField();
				}
			}
		} );
	};

	/**
	 * nextField function
	 * jumps to the next field
	 */
	FForm.prototype._nextField = function( backto ) {
		if( this.isLastStep || !this._validade() || this.isAnimating ) {
			return false;
		}
		this.isAnimating = true;

		// check if on last step
		this.isLastStep = this.current === this.fieldsCount - 1 && backto === undefined ? true : false;
		
		// clear any previous error messages
		this._clearError();

		// current field
		var currentFld = this.fields[ this.current ];

		// save the navigation direction
		this.navdir = backto !== undefined ? backto < this.current ? 'prev' : 'next' : 'next';

		// update current field
		this.current = backto !== undefined ? backto : this.current + 1;

		if( backto === undefined ) {
			// update progress bar (unless we navigate backwards)
			this._progress();

			// save farthest position so far
			this.farthest = this.current;
		}

		// add class "fs-display-next" or "fs-display-prev" to the list of fields
		classie.add( this.fieldsList, 'fs-display-' + this.navdir );

		// remove class "fs-current" from current field and add it to the next one
		// also add class "fs-show" to the next field and the class "fs-hide" to the current one
		classie.remove( currentFld, 'fs-current' );
		classie.add( currentFld, 'fs-hide' );
		
		if( !this.isLastStep ) {
			// update nav
			this._updateNav();

			// change the current field number/status
			this._updateFieldNumber();

			var nextField = this.fields[ this.current ];
			classie.add( nextField, 'fs-current' );
			classie.add( nextField, 'fs-show' );
		}

		// after animation ends remove added classes from fields
		var self = this,
			onEndAnimationFn = function( ev ) {
				if( support.animations ) {
					this.removeEventListener( animEndEventName, onEndAnimationFn );
				}
				
				classie.remove( self.fieldsList, 'fs-display-' + self.navdir );
				classie.remove( currentFld, 'fs-hide' );

				if( self.isLastStep ) {
					// show the complete form and hide the controls
					self._hideCtrl( self.ctrlNav );
					self._hideCtrl( self.ctrlProgress );
					self._hideCtrl( self.ctrlContinue );
					self._hideCtrl( self.ctrlFldStatus );
					// replace class fs-form-full with fs-form-overview
					classie.remove( self.formEl, 'fs-form-full' );
					classie.add( self.formEl, 'fs-form-overview' );
					classie.add( self.formEl, 'fs-show' );
					// callback
					self.options.onReview();
				}
				else {
					classie.remove( nextField, 'fs-show' );
					
					if( self.options.ctrlNavPosition ) {
						self.ctrlFldStatusCurr.innerHTML = self.ctrlFldStatusNew.innerHTML;
						self.ctrlFldStatus.removeChild( self.ctrlFldStatusNew );
						classie.remove( self.ctrlFldStatus, 'fs-show-' + self.navdir );
					}
				}
				self.isAnimating = false;
			};

		if( support.animations ) {
			if( this.navdir === 'next' ) {
				if( this.isLastStep ) {
					currentFld.querySelector( '.fs-anim-upper' ).addEventListener( animEndEventName, onEndAnimationFn );
				}
				else {
					nextField.querySelector( '.fs-anim-lower' ).addEventListener( animEndEventName, onEndAnimationFn );
				}
			}
			else {
				nextField.querySelector( '.fs-anim-upper' ).addEventListener( animEndEventName, onEndAnimationFn );
			}
		}
		else {
			onEndAnimationFn();
		}
	}

	/**
	 * showField function
	 * jumps to the field at position pos
	 */
	FForm.prototype._showField = function( pos ) {
		if( pos === this.current || pos < 0 || pos > this.fieldsCount - 1 ) {
			return false;
		}
		this._nextField( pos );
	}

	/**
	 * updateFieldNumber function
	 * changes the current field number
	 */
	FForm.prototype._updateFieldNumber = function() {
		if( this.options.ctrlNavPosition ) {
			// first, create next field number placeholder
			this.ctrlFldStatusNew = document.createElement( 'span' );
			this.ctrlFldStatusNew.className = 'fs-number-new';
			this.ctrlFldStatusNew.innerHTML = Number( this.current + 1 );
			
			// insert it in the DOM
			this.ctrlFldStatus.appendChild( this.ctrlFldStatusNew );
			
			// add class "fs-show-next" or "fs-show-prev" depending on the navigation direction
			var self = this;
			setTimeout( function() {
				classie.add( self.ctrlFldStatus, self.navdir === 'next' ? 'fs-show-next' : 'fs-show-prev' );
			}, 25 );
		}
	}

	/**
	 * progress function
	 * updates the progress bar by setting its width
	 */
	FForm.prototype._progress = function() {
		if( this.options.ctrlProgress ) {
			this.ctrlProgress.style.width = this.current * ( 100 / this.fieldsCount ) + '%';
		}
	}

	/**
	 * updateNav function
	 * updates the navigation dots
	 */
	FForm.prototype._updateNav = function() {
		if( this.options.ctrlNavDots ) {
			classie.remove( this.ctrlNav.querySelector( 'button.fs-dot-current' ), 'fs-dot-current' );
			classie.add( this.ctrlNavDots[ this.current ], 'fs-dot-current' );
			this.ctrlNavDots[ this.current ].disabled = false;
		}
	}

	/**
	 * showCtrl function
	 * shows a control
	 */
	FForm.prototype._showCtrl = function( ctrl ) {
		classie.add( ctrl, 'fs-show' );
	}

	/**
	 * hideCtrl function
	 * hides a control
	 */
	FForm.prototype._hideCtrl = function( ctrl ) {
		classie.remove( ctrl, 'fs-show' );
	}

	// TODO: this is a very basic validation function. Only checks for required fields..
	FForm.prototype._validade = function() {
		var fld = this.fields[ this.current ], input = fld.querySelectorAll( 'input[required]' ) || fld.querySelectorAll( 'textarea[required]' ) || fld.querySelectorAll( 'select[required]' ), error;
		if(!input||(input.length<1)){ console.log('There is no any input fields'); return true; }
		for(var i=0; i<input.length; i++){
			var сinput = input[i];
			switch( сinput.tagName.toLowerCase()){
			case 'input' : 
				if(сinput.type === 'radio' || сinput.type === 'checkbox'){
					var checked = 0;
					[].slice.call( fld.querySelectorAll( 'input[type="' + сinput.type + '"]' ) ).forEach( function(inp){
						if(inp.checked){
							++checked;
						}
					});
					if(!checked){
						error = 'NOVAL';
					}
				}else if(сinput.value===''){
					error = 'NOVAL';
				}else if((сinput.name == 'name'||сinput.name == 'surname')&&(сinput.value.match(/[^a-zA-Zа-яА-ЯёЁ]/))){
					error = 'INVALIDNAME';
				}else if(сinput.name == 'birth_day'&&((сinput.value.match(/[^0-9]/))||(сinput.value<1)||(сinput.value>31))){
					error = 'INVALIDDATE';
				}else if(сinput.name == 'birth_month'&&((сinput.value.match(/[^0-9]/))||(сinput.value<1)||(сinput.value>12))){
					error = 'INVALIDDATE';
				}else if(сinput.name == 'birth_year'&&((сinput.value.match(/[^0-9]/))||(сinput.value<1))){
					error = 'INVALIDDATE';
				}else if(сinput.name == 'mobile_phone'){
					if(сinput.value.match(/[^0-9()\-\+ ]/)){
						error = 'INVALIDPHONE';
					}else{
						if(!(+сinput.value.replace(/\D+/g,'')>9999)){
							error = 'INVALIDPHONE';
						}
					}
				}else if(сinput.name=='email'&&((сinput.value.match(/[^0-9a-zA-Zа-яА-ЯёЁ@.]/))||!сinput.value.match(/[.]/)||!сinput.value.match(/[@]/))){
					error = 'INVALIDEMAIL';
				}else if(сinput.name=='login'){
					if(сinput.value.match(/[^0-9a-zA-Z]/)){
						error = 'INVALIDLOGIN';
					}else if(сinput.value.length<4){
						error = 'SHORTLOGIN';
					}else if(!сinput.value.match(/[a-zA-Z]/)){
						error = 'NOLOGINLETTERS';
					}
				}else if(сinput.name=='password'){
					if(сinput.value.length<8){
						error = 'SHORTPASSWORD';
					}else if(!сinput.value.match(/[^0-9]/)){
						error = 'NUMERICPASSWORD';
					}
				}
				break;
			case 'select' : 
				// assuming here '' or '-1' only
				if( сinput.value === '' || сinput.value === '-1' ) {
					error = 'NOVAL';
				}
				break;

			case 'textarea' :
				if( сinput.value === '' ) {
					error = 'NOVAL';
				}
				break;
			}
			if(error != undefined){
				this._showError(error);
				return false;
			}
		}
		return true;
	}
	FForm.prototype._showError = function(err){
		var message = '';
		switch(err){
			case 'NOVAL' : 
				message = 'Вы не заполнили все поля. Пожалуйста, введите всю необходимую информацию.';
				break;
			case 'INVALIDNAME' : 
				message = 'Где-то здесь есть посторонние символы. Пожалуйста, заполните поля без цифр, точек, пробелов и прочих символов.';
				break;
			case 'INVALIDEMAIL' : 
				message = 'Ваш Email написан неправильно. Пожалуйста, введите корректный почтовый адрес.';
				break;
			case 'INVALIDPHONE' : 
				message = 'Кажется, Вы неправильно ввели номер Вашего телефона. Пожалуйста, введите номер еще раз в международном формате.';
				break;
			case 'INVALIDDATE' : 
				message = 'Вы неправильно ввели дату. Пожалуйста, проверьте все даты ещё раз.';
				break;
			case 'INVALIDLOGIN' : 
				message = 'В Вашем логине есть потусторонние символы. Пожалуйста, проверьте что в Вашем логине нет русских букв, пробелов, и любых других символов кроме тире и точки.';
				break;
			case 'NOLOGINLETTERS' : 
				message = 'Вашему логину нехватает букв. Исправьте Ваш логин и попробуйте ещё раз.';
				break;
			case 'SHORTPASSWORD' : 
				message = 'Указанный Вами пароль слишком короткий. Пароль должен состоять из 8 или более символов.';
				break;
			case 'NUMERICPASSWORD' : 
				message = 'Вами пароль состоит только из цифр. Пожалуйста, используйте ещё и буквы.';
				break;
			case 'SHORTLOGIN' : 
				message = 'Указанный Вами логин слишком короткий. Логин должен состоять от 4 до 32 символов.';
				break;
		};
		this.msgError.innerHTML = message;
		this._showCtrl(this.msgError);
	}

	// clears/hides the current error message
	FForm.prototype._clearError = function() {
		this._hideCtrl( this.msgError );
	}

	// add to global namespace
	window.FForm = FForm;

})(window);
(function(){
	var formWrap = document.getElementById( 'fs-form-wrap' );
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx( el, {
			stickyPlaceholder: false,
			onChange: function(val){
				document.querySelector('span.cs-placeholder').style.backgroundColor = val;
			}
		});
	});
	new FForm(formWrap,{
		onReview : function(){
			classie.add( document.body, 'overview' ); // for demo purposes only
		}
	});
})();
</script>
</body>
</html>
<?
}else{


}
?>