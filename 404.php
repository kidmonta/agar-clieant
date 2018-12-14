<!DOCTYPE html>
<html>
<head>
    <script data-cfasync='false' type='text/javascript' src="agar.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/>
    <meta name="description" content="السيرفرات العربية للعبة اجاريو">
    <meta name="keywords" content="اقاريو, اجاريو, agario, agar, مصعب, دعس, العاب, لعبة">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>اقاريو العربية</title>
    <link id="favicon" rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <link href="bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">
    <script src="jquery-1.11.3.min.js"></script>
	<script src="assets/js/main_out.js"></script>
	<script type="text/javascript">
	function confirm_alert(node) {
		return confirm("Please click on OK to continue.");
	}
	</script>
    <script type="text/javascript">
    var adfly_id = 20109575;
    var popunder_frequency_delay = 0;
    var popunder = true;
    function confirm_alert(node) {
		return confirm("Please click on OK to continue.");
	}
</script>
    
<script src="https://cdn.adf.ly/js/display.js"></script> 
    
</head>
<body>
    <div id="overlays">
        <div id="helloDialog">
            <form role="form">
                <div class="form-group">
                    <br><img src="assets/img/pglogo.png"><br>
					<center><a href="https://discord.gg/pg"><span class="label label-info">اضغط هنا لدخول الديسكورد الرسمي للعبة</span></a></center>
					<br>
                </div>
                <div class="form-group">
                    
                    <div class="mb-10">
					<br>
					<img src="assets/img/error.png" alt="">
					<br>
					<nav dir="rtl" class="menu" style="background-color: #000; width:100%; height: 60px;">
						<ul style=" list-style-type:none; margin:0; padding:0; ">
							<li style="display:inline-block; " >
								<a style="display:block; padding: 15px 20px;text-decoration:none; color:white;" href="index.php">الصفحة الرئيسية</a>
							</li>
							<li style="display:inline-block; ">
								<a style="display:block; padding: 15px 20px;text-decoration:none; color:white;" href="skins.php"> اختر السكين </a>
							</li>
							<li style="display:inline-block; ">
								<a  style="display:block; padding: 15px 20px;text-decoration:none; color:white;"href="contact.php"> اتصل بنا </a>
							</li>
						</ul>
					</nav>
                    </div>
                    
                </div>
                
            </form>

            <div id="instructions">
                <hr/>
                <center>
                    <span class="text-muted" dir="rtl">
						<b> الموقع تحت التطوير والتعديل :) </b><br/>
                        حرك الماوس للتحكم بدائرتك<br/>
                        اضغط <b>مسافة</b> للانقسام<br/>
                        اضغط <b>W</b> لأخراج بعض الكتل<br/>
						اضغط <b>E</b> لأخراج الكثير من الكتل<br/>
                    </span>
                </center>
            </div>
            <div id="credits" style="display: none;">
                <hr/>
                <center>
                    <span class="text-muted" dir="rtl">
						Luka967<br/>
						Megabyte918<br/>
						Barbosik<br/>
						MastaCoder<br/>
						ItzLevvie<br/>
						Fan7asy<br/>
						SuperOP535<br/>
						Tombez<br/>
                    </span>
                </center>
            </div>
            <hr/>
            <div id="footer">
      <b> <a onclick="opeen(1)" href="#">Credits</a> </b>  | <b> <a href="cdn-cgi/l/email-protection/#aecdc1c0dacfcddaee9ddccc80c7c1" target="_blank" onclick="return confirm_alert(this);">Ads &amp; Contact</a> </b>  | <b> <a href="skins.php/" target="_blank" onclick="return confirm_alert(this);"> قائمة السكنات </a> </b>
              
            </div>
        </div>
    </div>
<div id="connecting" style="display:none;position: absolute; left: 0; right: 0; top: 0; bottom: 0; z-index: 100; background-color: rgba(0,0,0,0.5);" dir="rtl">
    <div style="width: 450px; background-color: #FFFFFF; margin: 100px auto; border-radius: 15px; padding: 5px 15px 5px 15px;" dir="rtl">
        <center><img src="assets/img/loading-x.gif">
        <p> قد يكون السيرفر ممتلئ ، لتغيير السيرفر قم بالضغط على ESC </p></center>
    </div>
</div>
<div id="mobileStuff">
        <div id="touchpad"></div>
        <div id="touchCircle"></div>
        <img src="assets/img/split.png" id="splitBtn">
        <img src="assets/img/eject.png" id="ejectBtn">
</div>
    <canvas id="canvas" width="800" height="600"></canvas>
    <div class="chat_textbox"><input type="text" id="chat_textbox" placeholder="Press enter to chat!" maxlength="200"/></div>
    <div style="font-family:'Tahoma'">&nbsp;</div>
    <script data-cfasync="false" src="cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="apu.php_zoneid_1490219.js"></script>
<script>

function opeen(n) {
		if(n == 1 && (!$("#credits").is(':visible'))) {
			$( "#instructions" ).hide();
			$( "#credits" ).show();
		} else if (n == 1 && ($("#credits").is(':visible'))) {
			$( "#instructions" ).show();
			$( "#credits" ).hide();
		}
}
	$( document ).ready(function() {
		checkServers(0);
		var mySelect = document.getElementById('gamemode');
		var i = Math.floor(Math.random()*(mySelect.options.length-1));
		mySelect.options[i].selected = true;
		mySelect.onchange();
	});
</script>
	</body>
</html>