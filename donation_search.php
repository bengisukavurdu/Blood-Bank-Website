
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
	background-color: #ac7979;
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


.main-body p {
	padding: 25px;
	line-height: 1.5;
	font-family: 'Raleway', sans-serif;
	text-align: justify;
}

.main-body {
	background-color: #f4ecec;
	width: 100%;
	height: 700px;
}

label {
	padding: 25px;
	line-height: 1.5;
	font-family: 'Raleway', sans-serif;
	text-align: justify;
}

select {
	width: 20%;
	padding: 8px 0;
	margin: 4px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}


input[type=submit] {
	width: 15%;
	background-color: #771010;
	color: #eee4e4;
	padding: 14px 20px;
	margin: 25px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}


input[type=submit]:hover {
	background-color: #e21c1c;
}

</style>

<head>
 <meta charset="utf-8">
 <title>Kan Arama</title>
</head>

<body>
	
		<div class="main-header">
			<h1>Kan Bankas??
				<a href="index_after_login.php" class="anasayfa">Anasayfa</a>
				<a href="donate_form.php" class="kan-bagisi">Kan Ba????????</a>
				<a href="donation_search.php" class ="kan-arama">Kan Arama</a>
				<a href="communication_after_login.php" class="bize-ulasin">Bize Ula????n</a>
				<a href="profile_after_login.php" class="profil">Profiliniz</a>
				<a href="logout.php" class="cikis-yap">????k???? Yap</a>
			</h1>
		</div>
		
		<div class="main-body">
			<p>A??a????dan arad??????n??z kan grubunu ve ya??ad??????n??z ??ehri se??erek, o ??ehirde bulunan ve arad??????n??z kan grubuna uyan t??m ba??????lara eri??ebilirsiniz.</p>
			<form action="search.php" method="post">
				<label for="bloodtype">Kan Grubu:</label>
				<select id="bloodtype" name="bloodtype"> 
					<option value="0+">0+</option> 
					<option value="0-">0-</option> 
					<option value="A+">A+</option> 
					<option value="A-">A-</option> 
					<option value="B+">B+</option> 
					<option value="B-">B-</option> 
					<option value="AB+">AB+</option> 
					<option value="AB-">AB-</option> 
				</select> <br>

				<label for="city">??ehir:</label>
				<select id="city" name="city"> 
					<option value="??stanbul">??stanbul</option>
					<option value="Ankara">Ankara</option>
					<option value="??zmir">??zmir</option>
					<option value="Adana">Adana</option>
					<option value="Ad??yaman">Ad??yaman</option>
					<option value="Afyonkarahisar">Afyonkarahisar</option>
					<option value="A??r??">A??r??</option>
					<option value="Amasya">Amasya</option>
					<option value="Antalya">Antalya</option>
					<option value="Artvin">Artvin</option>
					<option value="Ayd??n">Ayd??n</option>
					<option value="Bal??kesir">Bal??kesir</option>
					<option value="Bilecik">Bilecik</option>
					<option value="Bing??l">Bing??l</option>
					<option value="Bitlis">Bitlis</option>
					<option value="Bolu">Bolu</option>
					<option value="Burdur">Burdur</option>
					<option value="Bursa">Bursa</option>
					<option value="??anakkale">??anakkale</option>
					<option value="??ank??r??">??ank??r??</option>
					<option value="??orum">??orum</option>
					<option value="Denizli">Denizli</option>
					<option value="Diyarbak??r">Diyarbak??r</option>
					<option value="Edirne">Edirne</option>
					<option value="Elaz????">Elaz????</option>
					<option value="Erzincan">Erzincan</option>
					<option value="Erzurum">Erzurum</option>
					<option value="Eski??ehir">Eski??ehir</option>
					<option value="Gaziantep">Gaziantep</option>
					<option value="Giresun">Giresun</option>
					<option value="G??m????hane">G??m????hane</option>
					<option value="Hakk??ri">Hakk??ri</option>
					<option value="Hatay">Hatay</option>
					<option value="Isparta">Isparta</option>
					<option value="Mersin">Mersin</option>
					<option value="Kars">Kars</option>
					<option value="Kastamonu">Kastamonu</option>
					<option value="Kayseri">Kayseri</option>
					<option value="K??rklareli">K??rklareli</option>
					<option value="K??r??ehir">K??r??ehir</option>
					<option value="Kocaeli">Kocaeli</option>
					<option value="Konya">Konya</option>
					<option value="K??tahya">K??tahya</option>
					<option value="Malatya">Malatya</option>
					<option value="Manisa">Manisa</option>
					<option value="Kahramanmara??">Kahramanmara??</option>
					<option value="Mardin">Mardin</option>
					<option value="Mu??la">Mu??la</option>
					<option value="Mu??">Mu??</option>
					<option value="Nev??ehir">Nev??ehir</option>
					<option value="Ni??de">Ni??de</option>
					<option value="Ordu">Ordu</option>
					<option value="Rize">Rize</option>
					<option value="Sakarya">Sakarya</option>
					<option value="Samsun">Samsun</option>
					<option value="Siirt">Siirt</option>
					<option value="Sinop">Sinop</option>
					<option value="Sivas">Sivas</option>
					<option value="Tekirda??">Tekirda??</option>
					<option value="Tokat">Tokat</option>
					<option value="Trabzon">Trabzon</option>
					<option value="Tunceli">Tunceli</option>
					<option value="??anl??urfa">??anl??urfa</option>
					<option value="U??ak">U??ak</option>
					<option value="Van">Van</option>
					<option value="Yozgat">Yozgat</option>
					<option value="Zonguldak">Zonguldak</option>
					<option value="Aksaray">Aksaray</option>
					<option value="Bayburt">Bayburt</option>
					<option value="Karaman">Karaman</option>
					<option value="K??r??kkale">K??r??kkale</option>
					<option value="Batman">Batman</option>
					<option value="????rnak">????rnak</option>
					<option value="Bart??n">Bart??n</option>
					<option value="Ardahan">Ardahan</option>
					<option value="I??d??r">I??d??r</option>
					<option value="Yalova">Yalova</option>
					<option value="Karab??k">Karab??k</option>
					<option value="Kilis">Kilis</option>
					<option value="Osmaniye">Osmaniye</option>
					<option value="D??zce">D??zce</option>
				</select> <br>	

			    <input type="submit" value="Ara"> 
		    </form>	
			
			
		</div>
	

</body>
</html>