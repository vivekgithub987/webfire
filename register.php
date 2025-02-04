<?php

require_once 'includes/user.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User($db);
    $user->mobile = htmlspecialchars($_POST['mobile']);
    $user->password = password_hash(htmlspecialchars($_POST['password']),PASSWORD_DEFAULT);
    $user->invite_code = htmlspecialchars($_POST['mobile']);
    $user->otp = htmlspecialchars($_POST['otp']);
    $ins = $user->create();
    if($ins){
        
    }else{
        
    }
}
?>


<!DOCTYPE html>

<html class="theme-dark" lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title><?php echo getConfig('APP_NAME'); ?></title>
    <link rel="stylesheet" href="theme/static/home/css/app.css">
    <link rel="stylesheet" href="theme/static/home/css/iconfont.css">
    <link rel="stylesheet" href="theme/static/home/css/login.css">
    <script type="text/javascript" src="theme/static/home/layui/layui.js"></script>


        <script type="text/javascript">
        function fnCountDown() {
            // Set the date we're counting down to
            //var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
            var dt = new Date();
            var countDownDate = dt.setMinutes(dt.getMinutes() + 1);
            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                //document.getElementById('lblTimer').style.display = 'block';
                var btnTimer = 'lblTimer';
                var button = document.getElementById(btnTimer);
                if (button) { button.style.display = 'block'; }

                var btnSendOTP = 'lnkSendOTP';
                var button1 = document.getElementById(btnSendOTP);
                if (button1) { button1.style.display = 'none'; }
                //document.getElementById('lnkSendOTP').style.display = 'none';
                document.getElementById('lblTimer').innerHTML = "<b>" + seconds + "s</b>";
                //alert(seconds);
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    var btnTimer = 'lblTimer';
                    var button = document.getElementById(btnTimer);
                    if (button) { button.style.display = 'none'; }

                    var btnSendOTP = 'lnkSendOTP';
                    var button1 = document.getElementById(btnSendOTP);
                    if (button1) { button1.style.display = 'block'; }
                }
            }, 1000);
        }
    </script>
</head>
<body class="login-content">
    <form method="post" action="#" onsubmit="javascript:return WebForm_OnSubmit();" id="ctl00">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNTI1Njc5NzQxZGS+/zuiisNTPHsWP70YGUKihLenSO1nvn6RoOyBcsr59A==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl00'];
if (!theForm) {
    theForm = document.ctl00;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="https://WebResource1a81.js?d=eIbSi8pS4jRkyCWAiYKbfzMVBpqtGspxSEI2J0HCW2lGfPMrnC3geQHi7Nc2lOK0PU3NvvKodiRS9TOR0XYaFFD_Pwr0Db1oi_yBdrQ4UNs1&amp;t=638628224640000000" type="text/javascript"></script>


<script src="https://WebResource6a21.js?d=7z1RMzHw2GCwcSEpgHSp00dBPYjogwq06xWSzo3xL8FdssQjeNnsM1nERH_ytHU-_rE3tD3tUdM6ThQQMTKSAJmksMorYRSN0GgQurOnGlw1&amp;t=638628224640000000" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

</div>
        <div class="login-top">
            <div class="login_bj">
                <img src="theme/Images/logo-white.png" style="width: 175px;">
            </div>
        </div>
        <div class="login_con">
            <div class="login_title" style="width: 100%; height: 20px; display: none"></div>
            <div class="login_input" style="display:none">
                <div class="login_input_text">
                    <img src="theme/static/home/img/from_3.png">
                </div>

                <div class="login_input_send " >
                    <span class="input_send_btn" >
                        <span id="lblsponsorName"></span>
                    </span>
                </div>
            </div>
            
            <div class="login_input">
                <div class="login_input_text">+91</div>
                <div class="login_input_t">
                    <div class="login-input-wrapper">
                        <input name="mobile" type="text" maxlength="10" id="txtregMobileNo" class="login-input-input" PlaceHolder="please enter mobile..." />
                        <span id="RequiredFieldValidator8" style="display:none;"></span>
                    </div>
                </div>
            </div>



            <div class="login_input">
                <div class="login_input_text">
                    <img src="theme/static/home/img/from_2.png">
                </div>
                <div class="login_input_t">
                    <div class="uni-input-wrapper">
                        <input name="password" type="password" id="txtRegPassword" class="login-input-input" PlaceHolder="please enter password..." />
                        <span id="RequiredFieldValidator4" style="display:none;"></span>
                    </div>
                </div>
            </div>
            <div class="login_input">
                <div class="uni-input-wrapper">
                    <input name="referred_by" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtregsponsorID\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtregsponsorID" class="login-input-input" PlaceHolder="please enter invite code..." />
                    <span id="Label1" class="text-success"></span>
                    <span id="RequiredFieldValidator5" style="display:none;"></span>
                </div>
            </div>
            


            
            <div class="login_input">
                <div class="login_input_text">
                    <img src="theme/static/home/img/from_4.png">
                </div>
                <div class="login_input_t">
                    <div class="uni-input-wrapper">
                        
                        <input name="otp" type="text" maxlength="6" id="txtOTP" placeholder="please enter otp..." class="login-input-input" />
                    </div>
                </div>
                <div class="login_input_send">
                    
                    <span>
                        <a onclick="if(1=1) { this.disabled=&#39;true&#39;;this.value=&#39;Please wait ...&#39;};" id="lnkSendOTP" class="input_send_btn" UseSubmitBehavior="false" href="javascript:__doPostBack(&#39;lnkSendOTP&#39;,&#39;&#39;)" style="color: #5aaace;">Send</a>
                        <span id="lblTimer" style="color:Green;float: right; display: none;"><b>0S</b></span></span>
                </div>
                <span id="RegularExpressionValidator2" style="display:none;"></span>
                
            </div>
            <input type="submit" name="btnSignUp" value="Register" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnSignUp&quot;, &quot;&quot;, true, &quot;V&quot;, &quot;&quot;, false, false))" id="btnSignUp" class="login_btn" />
            <div id="ValidationSummary1" style="display:none;">

</div>
            <div class="reg">
                <a href="login.php">Return Login</a>
            </div>
        </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_ValidationSummaries =  new Array(document.getElementById("ValidationSummary1"));
var Page_Validators =  new Array(document.getElementById("RequiredFieldValidator8"), document.getElementById("RequiredFieldValidator4"), document.getElementById("RequiredFieldValidator5"), document.getElementById("RegularExpressionValidator2"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var RequiredFieldValidator8 = document.all ? document.all["RequiredFieldValidator8"] : document.getElementById("RequiredFieldValidator8");
RequiredFieldValidator8.controltovalidate = "txtregMobileNo";
RequiredFieldValidator8.focusOnError = "t";
RequiredFieldValidator8.errormessage = "Please Enter MobileNo";
RequiredFieldValidator8.display = "None";
RequiredFieldValidator8.validationGroup = "V";
RequiredFieldValidator8.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator8.initialvalue = "";
var RequiredFieldValidator4 = document.all ? document.all["RequiredFieldValidator4"] : document.getElementById("RequiredFieldValidator4");
RequiredFieldValidator4.controltovalidate = "txtRegPassword";
RequiredFieldValidator4.focusOnError = "t";
RequiredFieldValidator4.errormessage = "Please Enter Password";
RequiredFieldValidator4.display = "None";
RequiredFieldValidator4.validationGroup = "V";
RequiredFieldValidator4.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator4.initialvalue = "";
var RequiredFieldValidator5 = document.all ? document.all["RequiredFieldValidator5"] : document.getElementById("RequiredFieldValidator5");
RequiredFieldValidator5.controltovalidate = "txtregsponsorID";
RequiredFieldValidator5.focusOnError = "t";
RequiredFieldValidator5.errormessage = "Please Enter SponsorID";
RequiredFieldValidator5.display = "None";
RequiredFieldValidator5.validationGroup = "V";
RequiredFieldValidator5.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator5.initialvalue = "";
var RegularExpressionValidator2 = document.all ? document.all["RegularExpressionValidator2"] : document.getElementById("RegularExpressionValidator2");
RegularExpressionValidator2.controltovalidate = "txtOTP";
RegularExpressionValidator2.errormessage = "Invalid OTP.";
RegularExpressionValidator2.display = "None";
RegularExpressionValidator2.validationGroup = "V";
RegularExpressionValidator2.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
RegularExpressionValidator2.validationexpression = "^[\\s\\S]{6,6}$";
var ValidationSummary1 = document.all ? document.all["ValidationSummary1"] : document.getElementById("ValidationSummary1");
ValidationSummary1.showmessagebox = "True";
ValidationSummary1.showsummary = "False";
ValidationSummary1.validationGroup = "V";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
</form>
</body>
</html>
