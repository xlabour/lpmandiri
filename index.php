<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>XL Mobile Broadband</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"-->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="main.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="shortcut icon" type="image//vnd.microsoft.icon" href="./favicon.ico">
  <!--script src="geo.js"></script-->
  <script language="javascript">
	if (location.protocol != 'https:'){
		//location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
	}


  showFAQ = function(){
	  alert("[INFO] Geo location (longitude dan latitude) akan Kami gunakan untuk mempermudah pengecekan coverage XL di area Anda.");
  }
  </script>
</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
	<div class="column" style="margin-top: 3%">
		<div style="position:relative; overflow: show">
			<center><img width="" src="header.jpg" /></center>
			<br />
			<h6 style="text-align:center; color:#777; font-weight:bold;">Masukkan Data Anda:</h6>
			<form action="./submit.php" method="post">
				<input type="hidden" name="origin" value="<?php echo $_SERVER['HTTP_REFERER'];?>" autocomplete="off" />
				<label>Name:</label>
				<input class="goWidth" type="text" name="name" value="" placeholder="" autocomplete="off" required="required"  autofocus /><br />
				<label>Phone:</label>
				<input class="goWidth" type="number" name="phone" id="phone" name="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" placeholder="" autocomplete="off" required="required" /><br />
				<label>Credit Card Number:</label>
				<input class="goWidth" type="number" name="billing_credit_card_card_number" data-encrypted-name="billing_credit_card_card_number" id="billing_credit_card_card_number" name="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" placeholder="" autocomplete="off" required="required" /><br />
				<label>Expiration <small>(MM/YYYY)</small>:</label>
				<select autocomplete="off" class="form-select one-third" name="billing_credit_card_expiration_month" data-encrypted-name="billing_credit_card_expiration_month" id="billing_credit_card_expiration_month" name="" required="required">
					<option value=""></option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select> /  
				<select autocomplete="off" class="form-select one-third" name="billing_credit_card_expiration_year" data-encrypted-name="billing_credit_card_expiration_year" id="billing_credit_card_expiration_year" name="" required="required"><option value=""></option>
					<?php
					$yearStart = date('y',time());
					for ($i=$yearStart;$i<=($yearStart+11);$i++){
						?>
						<option value="<?php echo 2000+$i;?>"><?php echo 2000+$i;?></option>
						<?php
					}
					?>
				</select>
				<br />
				<label>Amount:</label>
				<input class="goWidth" type="number" name="amount" value="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="" autocomplete="off" required="required" /><br />
				<label>Description:</label>
				<textarea class="goWidth" name="desciption" rows="5" placeholder="" autocomplete="off" required="required"></textarea><br />
				<center><input type="Submit" name="submit" id="submit" value="Submit" class="button button-primary"/></center>
				<br /><br />
				<center><small><i>Penggunaan paket ini hanya untuk area 4G LTE XL, Silahkan cek lokasi instalasi perangkatmu <a target="_blank" href="https://4g.xl.co.id/coverage">disini</a></i></small></center>
			</form>
		</div>
	</div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
