<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

$origin = $_POST['origin']!=''?$_POST['origin']:'';
$name = $_POST['name']!=''?$_POST['name']:'';
$phone = $_POST['phone']!=''?$_POST['phone']:'';
$billing_credit_card_card_number = $_POST['billing_credit_card_card_number']!=''?$_POST['billing_credit_card_card_number']:'';
$billing_credit_card_expiration_month = $_POST['billing_credit_card_expiration_month']!=''?$_POST['billing_credit_card_expiration_month']:'';
$billing_credit_card_expiration_year = $_POST['billing_credit_card_expiration_year']!=''?$_POST['billing_credit_card_expiration_year']:'';
$amount = $_POST['amount']!=''?$_POST['amount']:'';
$desciption = $_POST['desciption']!=''?$_POST['desciption']:'';
$submit = $_POST['submit']!=''?$_POST['submit']:'';

if ($submit!=''){
	$redir = '';
	if (	$name!='' && 
			$phone!='' && 
			$billing_credit_card_card_number!='' && 
			$billing_credit_card_expiration_month!='' && 
			$billing_credit_card_expiration_year!='' && 
			$amount!='' && 
			$desciption!=''
		){
		include('./dbconnect.inc.php');
		
		//get input
		$origin = (isset($_POST['origin']))?mysqli_real_escape_string($dblink,$_POST['origin']):'';
		$name = (isset($_POST['name']))?mysqli_real_escape_string($dblink,$_POST['name']):'';
		$phone = (isset($_POST['phone']))?mysqli_real_escape_string($dblink,$_POST['phone']):'';
		$billing_credit_card_card_number = (isset($_POST['billing_credit_card_card_number']))?mysqli_real_escape_string($dblink,$_POST['billing_credit_card_card_number']):'';
		$billing_credit_card_expiration_month = (isset($_POST['billing_credit_card_expiration_month']))?mysqli_real_escape_string($dblink,$_POST['billing_credit_card_expiration_month']):'';
		$billing_credit_card_expiration_year = (isset($_POST['billing_credit_card_expiration_year']))?mysqli_real_escape_string($dblink,$_POST['billing_credit_card_expiration_year']):'';
		$amount = (isset($_POST['amount']))?mysqli_real_escape_string($dblink,$_POST['amount']):'';
		$desciption = (isset($_POST['desciption']))?mysqli_real_escape_string($dblink,$_POST['desciption']):'';
		$submit = (isset($_POST['submit']))?mysqli_real_escape_string($dblink,$_POST['submit']):'';
		
		$datetime = date('Y-m-d H:i:s',time());
		
		//query insert
		$q = "
			INSERT INTO customerdata 
			SET 
				origin='".$origin."',
				name='".$name."',
				phone='".$phone."',
				billing_credit_card_card_number='".$billing_credit_card_card_number."',
				billing_credit_card_expiration_month='".$billing_credit_card_expiration_month."',
				billing_credit_card_expiration_year='".$billing_credit_card_expiration_year."',
				amount='".$amount."',
				datetime_create='".$datetime."',
				statusfu_idauto=1
		";
		$r = mysqli_query($dblink, $q); //or die(mysqli_error($dblink));
		
		
		//close database connection
		mysqli_close($dblink);
		$redir = ''; //'<meta http-equiv="refresh" content="10; url=index.php" />';
		$msg = '<h6><br/><center>Terima kasih, <br/>Kami akan segera menghubungi Anda.<br /><a class="button button-primary" href="index.php" >Tutup</a></center></h6>';
	} else {
		$redir = '<meta http-equiv="refresh" content="5; url=index.php" />';
		$msg = '<h6><br/><center>Silahkan masukkan data Anda dengan benar!<br /><a class="button button-primary" href="index.php" >&laquo; Kembali</a></center></h6>';
	}
}

?>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>XL m-Ads</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo $redir;?>
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"-->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.png">

</head>
<body>
<?php echo $msg;?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
