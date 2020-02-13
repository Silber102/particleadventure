<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "pdschaffner@lbl.gov,rmbarnett@lbl.gov";
 
    $email_subject = "PARTICLE ADVENTURE - Visitor query: Mobile Version";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 

<!DOCTYPE HTML>
<html>
<META HTTP-EQUIV="EXPIRES" CONTENT="Sun, 01 Jan 2006 12:00:01 GMT">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta charset="utf-8">
<title>Particle Adventure -Contact Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css"  />
<link href="css/style-search.css" rel="stylesheet" type="text/css"  />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery1.min.js"></script>
<script src="js/accord1.js" type="text/javascript"></script>
<style type="text/css">

body {
	background: #ffffff;
	color: #111111;
	font-family:Arial, Helvetica, sans-serif;
	
}
.text{
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
    border:2px solid #ccc;
	padding: 5px;
	width:94%;
}
.submit{
	cursor:pointer;
	padding:15px;
	-moz-border-radius:.3em;
	-webkit-border-radius:.3em;
	border-radius:.3em;
	border:none;
	color:#fff;
	border:1px solid #eeeeee;
	background:#06C;
	
	text-align:left;
}
	
</style>
<script language="JavaScript">
function setVisibility(id) {
if(document.getElementById('bt1').value=='Hide Layer'){
document.getElementById('bt1').value = 'Show Layer';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt1').value = 'Hide Layer';
document.getElementById(id).style.display = 'inline';
}
}
</script>
<link rel="stylesheet" href="css/accord-search.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/accord1.css" type="text/css" media="screen">
<script type="text/javascript">
<!--
function toggle(id) {
var e = document.getElementById(id);
if(e.style.display == 'none')
e.style.display = 'block';
else
e.style.display = 'none';
}
//-->
</script>
</head>
<body>
    
   <div class="header">
        <div class="logo">
            <a href="index.html"><img src="images/banner-2.jpg" alt="Particle Adventure" /></a>
        </div> 
     <input type="image" src="images/search.gif"id='bt1' name="image" width="29" height="28" onclick="setVisibility('sub3');"; style="margin-top:6px;margin-left:5px;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */">   

		
        

        
        
        
        
        <button id="show" style="display:block; color:#C00; border:1px solid #900;">Menu <span style="display:none;"><img src="images/arrow-up.png" width="15" height="10"></span> <span><img src="images/arrow-down.png" width="15" height="10"></span></button>
        <div class="clear"></div>
    </div>
    <div class="nav">
<aside class="accordion">
	<h1>Contact Us</h1><!-- SECTION 1 -->
	<div class="opened-up">
	</div>
	<a href="index.html" class="home">Home</a><!-- HOME -->
	</div>
</aside>
     </div><!--End NAV-->
     
     
     <div id="sub3">
		<input type="image" src="images/x.png"id='bt2' name="image" width="24" height="24" onclick="setVisibility('sub3');"; style="float:left;margin-top:-15px;margin-left:-10px;opacity:0.7;filter:alpha(opacity=70); /* For IE8 and earlier */">
		<script>
          (function() {
            var cx = '013164303166807658384:qekswfvibuk';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
</div><!--#sub3-->
     <!--<div id="sub3">
					<form method="get" action="http://pdgusers.lbl.gov/~pschaffner/particleadventure/mobile/search-results.html" id="cse-search-box">
                        <table border="0" cellpadding="0" width="160">
                            <tr>
                                <td valign="top">
                                <input type="text" name="q" class="searchbox" size="30" maxlength="255" value=" " />
                                <input type="hidden" name="cx" value="013164303166807658384:qekswfvibuk" />
                                <input type="hidden" name="cof" value="FORID:9" />
                                <input type="hidden"  name="sitesearch" value="particleadventure.org/mobile/" />
                                </td>
                                <td valign="top"><input type="image" name="sa" src="images/search-hit.png" border="0" value="http://pdgusers.lbl.gov/~pschaffner/particleadventure/mobile/search-results.html" align="right"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>
		</div><!--#sub3-->
        
        
     <p><br />
<div align="center">

Thank you for contacting us.
<br />
 We will be in contact with you very soon.


</div><!--.contact-form-->
<div class="footer">
    <p>&copy; 1996-2014 <a href="http://www.particleadventure.org">particleadventure.org</a></p>
</div>
    <p class="author"></p>
<script type="text/javascript">
	$('.nav').show();
	$('#show').click(function (){
		$(".nav").toggle();
		$("span").toggle();
	});
</script>
<script type="text/javascript">
	$('.nav-search').show();
	$('#show-search').click(function (){
		$(".nav-search").toggle();
		$("span").toggle();
	});
</script>
<script src="js/jquery1.min.js"></script>
<script  src="js/jquery2.min.js" style='display: none;'>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('target') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>

<script>var headers = ["H1","H2","H3","H4","H5","H6"];

$(".accordion").click(function(e) {
  var target = e.target,
      name = target.nodeName.toUpperCase();
  
  if($.inArray(name,headers) > -1) {
    var subItem = $(target).next();
    
    //slideUp all elements (except target) at current depth or greater
    var depth = $(subItem).parents().length;
    var allAtDepth = $(".accordion p, .accordion div").filter(function() {
      if($(this).parents().length >= depth && this !== subItem.get(0)) {
        return true; 
      }
    });
    $(allAtDepth).slideUp("fast");
    
    //slideToggle target content and adjust bottom border if necessary
    subItem.slideToggle("fast",function() {
        $(".accordion :visible:last").css("border-radius","0 0 10px 10px");
    });
    $(target).css({"border-bottom-right-radius":"0", "border-bottom-left-radius":"0"});
  }
});//@ sourceURL=pen.js
</script>


<script>var headers = ["H1","H2","H3","H4","H5","H6"];

$(".accordion").click(function(e) {
  var target = e.target,
      name = target.nodeName.toUpperCase();
  
  if($.inArray(name,headers) > -1) {
    var subItem = $(target).next();
    
    //slideUp all elements (except target) at current depth or greater
    var depth = $(subItem).parents().length;
    var allAtDepth = $(".accordion-search p, .accordion-search div").filter(function() {
      if($(this).parents().length >= depth && this !== subItem.get(0)) {
        return true; 
      }
    });
    $(allAtDepth).slideUp("fast");
    
    //slideToggle target content and adjust bottom border if necessary
    subItem.slideToggle("fast",function() {
        $(".accordion-search :visible:last").css("border-radius","0 0 10px 10px");
    });
    $(target).css({"border-bottom-right-radius":"0", "border-bottom-left-radius":"0"});
  }
});//@ sourceURL=pen.js
</script>



</body>

 
 
<?php
 
}
 
?>