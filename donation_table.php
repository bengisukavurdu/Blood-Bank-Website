<?php 
session_start(); 
$a = $_SESSION['isim'];
?>

<!DOCTYPE html>
<html>

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
	margin-left: 50px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}
.kan-bagisi {
	padding: 15px;
	margin-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}
.kan-arama {
	padding: 15px;
	margin-left: 15px;
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
.profil {
	padding: 15px;
	margin-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}
.cikis-yap {
	padding: 15px;
	margin-left: 15px;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	color: #eee4e4;
	text-decoration:none;
}

a:hover {
  background-color: #ac7979;
}


table {
  font-family: 'Raleway', sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #eee4e4;
}

td, th {
  border: 1px solid #dddddd;
  border-color: #771010;
  text-align: left;
  font-family: 'Raleway', sans-serif;
  padding: 8px;
}

</style>

<head>
 <meta charset="utf-8">
 <title>Kan Arama Sonuçları</title>
</head>

<body>
	
		<div class="main-header">
			<h1>Kan Bankası
				<a href="index_after_login.php" class="anasayfa">Anasayfa</a>
				<a href="donate_form.php" class="kan-bagisi">Kan Bağışı</a>
				<a href="donation_search.php" class ="kan-arama">Kan Arama</a>
				<a href="communication_after_login.php" class="bize-ulasin">Bize Ulaşın</a>
				<a href="profile_after_login.php" class="profil">Profiliniz</a>
				<a href="logout.php" class="cikis-yap">Çıkış Yap</a>
			</h1>
		</div>
		
		<div class="table">
		<table>
			<tr>
				<th>Adı</th>
				<th>Soyadı</th>
				<th>Cinsiyeti</th>
				<th>Kan Grubu</th>
				<th>Yaş</th>
				<th>Kilo</th>
				<th>Kronik Hastalık</th>
				<th>Telefon</th>
				<th>E-mail</th>
				<th>Şehir</th>
			</tr>
			<tr>
			
				<td><?php print "$a"; ?></td>
				<td><?php echo $_SESSION['soyisim']; ?></td>
				<td><?php echo $_SESSION['cinsiyet']; ?></td>
				<td><?php echo $_SESSION['kan_grubu']; ?></td>
				<td><?php echo $_SESSION['dogum_gunu']; ?></td>
				<td><?php echo $_SESSION['kilo']; ?></td>
				<td><?php echo $_SESSION['hastalık']; ?></td>
				<td><?php echo $_SESSION['telefon']; ?></td>
				<td><?php echo $_SESSION['email']; ?></td>
				<td><?php echo $_SESSION['sehir']; ?></td>				
			
				
			
			 </tr>
		</table>
		
		
	
	
</body>
</html>