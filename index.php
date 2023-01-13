<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>Levnet Özdemir PHP Ödevi</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="includes/kayit_ol.inc.php" method="post">
					<label for="chk" aria-hidden="true">Kayıt ol</label>
					<input type="text" name="kullanici_adi" placeholder="Kullanıcı adı" required="True">
					<input type="email" name="mail_adres" placeholder="Mail adresi" required="True">
					<input type="password" name="sifre" placeholder="Şifre" required="True">
					<button type="submit" name="submit_kayit">Kayıt ol</button>
				</form>
			</div>

			<div class="login">
				<form action="includes/giris_yap.inc.php" method="post">
					<label for="chk" aria-hidden="true">Giriş Yap</label>
					<input type="email" name="mail_adres" placeholder="Mail Adresi" required="True">
					<input type="password" name="sifre" placeholder="Şifre" required="True">
          <button type="submit" name="submit_giris">Giriş Yap</button>
				</form>
			</div>
	</div>
</body>
</html>

</body>
</html>
