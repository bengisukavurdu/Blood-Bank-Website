<!DOCTYPE html>
<html>
<!-- Default Code for appearance of index page -->
<style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}






.main-header {
	background-color: #771010;
	width: 100%;
	height: 100px;
}

.main-header h1 {
	font-size: 50px;
	padding: 25px;
	font-family: 'Raleway', sans-serif;
	color: #eee4e4
}

.anasayfa {
	padding: 15px;
	margin-left: 490px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}

.bize-ulasin {
	padding: 15px;
	margin-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}

.giris-yap {
	padding: 15px;
	margin-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	background-color: #ac7979;
	text-decoration:none;
}

a:hover {
	background-color: #ac7979;
}

.main-body {
	background-image: url("login.png");
	height: 700px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}

.login-form {
	position: absolute;
	right: 0;
	margin: 120px;
	width: 300px;
	height: 300px;
	padding: 16px;
	background-color: #771010;	
}

.main-body2 {
	position: absolute;
	right: 0;
	margin: 120px;
	margin-top: 420px;
	width: 300px;
	height: 50px;
	padding: 16px;
	padding-top: 1px;
	background-color: #771010;	
}

.main-body h1 {
	padding: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 32px;
	text-align: justify;
	color: #eee4e4;
}

label {
	padding-top: 25px;
	padding-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 20px;
	text-align: justify;
	color: #eee4e4;
}

input[type=text], select {
	height: 25px;
	width: 270px;
	margin-left: 15px;
	margin-top: 5px;
	margin-bottom: 25px;
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=password], select {
	height: 25px;
	width: 270px;
	margin-left: 15px;
	margin-top: 5px;
	margin-bottom: 25px;
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

button[type=submit] {
	width: 270px;
	background-color: #eee4e4;
	color: #771010;
	margin-left: 15px;
	margin-top: 5px;
	margin-bottom: 10px;
	padding: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 15px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

button[type=submit]:hover {
	background-color: #e98a8a;
}

.btn {
	width: 280px;
	background-color: transparent;
	border: none;
	color: #eee4e4;
	margin-left: 15px;
	margin-top: 5px;
	margin-bottom: 25px;
	padding: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 15px;
}


</style>

<head>
 <meta charset="utf-8">
 <title>Giriş Yap</title>
</head>

<body>
	<div class="main-header">
		<h1>Kan Bankası
			<a href="index.php" class="anasayfa">Anasayfa</a>
			<a href="communication.php" class="bize-ulasin">Bize Ulaşın</a>
			<a href="login.php" class="giris-yap">Giriş Yap</a>
		</h1>
	</div>
	
	<div class="main-body">
		<form action="log.php" method="post" class="login-form">
			<h1>Giriş Yap</h1>

			<label for="email"><b>E-mail</b></label><br>
			<input type="text" placeholder="E-mail giriniz" name="email"><br>

			<label for="psw"><b>Şifre</b></label><br>
			<input type="password" placeholder="Şifreyi giriniz" name="password">

			<button type="submit" class="button">Giriş Yap</button>
			
			</form>
			
		<div class="main-body2">
			<a href="sign_up.php" class="sign_up">
				<button class="btn">Üye olmak için tıklayınız.</button>
			</a>
		</div>
	</div>
	
	

		

	
</body>
</html>