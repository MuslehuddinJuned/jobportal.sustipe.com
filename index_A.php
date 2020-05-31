<?php
$Dname;
$url = $_SERVER['HTTP_HOST'];
if (strpos($url, 'www.') !== false)
{
	$Dname = str_replace("www.","",$url);
}
else
{
	$Dname = $url;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to <?php echo $Dname; ?></title>
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
<style type="text/css">
body{background:#0ca3d2; margin:0px; font:14px Helvetica, sans-serif;}
.wrapper{width:950px; margin:0 auto;}
.container{width:950px; margin-top:10px; display:inline-block;}
h1{font-family: 'Berkshire Swash', cursive; font-size:2.8em; margin:; color:white;}

.container0{background:white; width:910px; padding:20px; display:inline-block;}
h2{margin-top:0px; border-bottom:1px solid #ccc; padding-bottom:10px; color:#00ace0; margin-bottom:10px;}
p{text-align:justify; line-height:18px; margin:10px 0;}
a{text-decoration:none; color:#00ace0;}
a:hover{text-decoration:underline;}
.left, .right{background:white; min-height:200px; padding:20px; display:inline-block;}
.left{width:550px;}
.right{width:310px;}
.footer a{color:#9edaed;}


input[type="text"],input[type="password"]{
  width:283px;
  background:#fff;
  margin-bottom:4%;
  border:1px solid #ccc;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:95%;
  color:#555;
}

input[type="submit"]{
  width:100%;
  background:#3399cc;
  border:0;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

input[type="submit"]:hover{
  background:#2288bb;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="header"><h1><?php echo ucwords($Dname); ?>/Juned</h1></div>
<div class="container">
<div class="container0">
<h2>Welcome to <?php echo ucwords($Dname); ?></h2>
<p><?php echo ucwords($Dname); ?> is Registered and Hosted with <a href="http://alpha.net.bd" target="_blank">Alpha Net</a>. This temporary Home Page of <?php echo $Dname; ?> is created by Alpha Net's Advanced Hosting Control Panel. When you upload the Website for <?php echo $Dname; ?>, this page will be replaced automatically.</p>
<p>The Hosting Package for <?php echo $Dname; ?> includes many advanced features. Log into the Control Panel to access and manage resources like Email and FTP accounts, Databases, Site Statistics and more. You can also install many popular Web Applications (WordPress, Joomla, phpBB, DotNetNuke and many more) into your Website directly from the cPanel.</p>
</div>
</div>
<div class="container">
<div class="right" style="float:left; margin-right:10px;">
<h2>cPanel Login</h2>
  <form action="http://cp.alpha.net.bd:2083/login/" method="post">
    <input type="text" name="user" id="user" placeholder="Username" />
    <input type="password" name="pass" id="pass" placeholder="Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
<div class="left">
<h2>Don't Have Control Panel Account Details?</h2>
<p>Your Hosting Control Panel User Name and Password was included in the welcome Email that we sent you when this Hosting Package was created. If you no longer have the account details, please contact Hosting Support at <a href="http://support.ancbd.com/" target="_blank">support.ancbd.com</a> and submit a support ticket requesting Control Panel Account Details.</p>
</div>
</div>
<div class="container">
<div class="left" style="float:left; margin-right:10px;">
<h2>Mail Service</h2>
<p style="text-align:left;">Webmail Interface is for <?php echo $Dname; ?> is available at:<a href="http://<?php echo $Dname; ?>/webmail" target="_blank"> <?php echo $Dname; ?>/webmail</a> Webmail allows you to check your Email from anywhere with an Internet connection.</p>
<p>
SMTP & POP3 Service Server name is mail.<?php echo $Dname; ?>, Port Must be use For SMTP 587 & For POP3 110 also SMTP Authentication service must be enabled.
</p>
</div>
<div class="right">
<h2>Check Mail</h2>
<form action="http://<?php echo $Dname; ?>:2095/login/" method="post">
    <input type="text" name="user" id="user" placeholder="Email" />
    <input type="password" name="pass" id="pass" placeholder="Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
</div>
<div class="container">
<div class="container0">
<h2>Uploading Files for This Website</h2>
<p>You can use FTP and Secure FTP to upload files for <?php echo $Dname; ?>. FTP server is located at: ftp.<?php echo $Dname; ?>. Files must be uploaded into the following FTP Directory: <span style="font-size:; font-weight:bold;">/public_html/<span></p>
<p>For greater security, we recommend that you use Secure FTP (FTP over SSL) for uploading files. The File Zilla FTP Client Software is free and supports Secure FTP. Detailed information on how to upload files via FTP can be found <a href="http://support.sineris.com/KB/a7/uploading-your-website-files-via-ftp.aspx" target="_blank">here</a>.</p>
</div>
</div>
<div class="footer"><p style="text-align:center; color:white; margin-top:40px;">This Web page is powered by Alpha Net<a href="http://alpha.net.bd" target="_blank"> Web Hosting in Bangladesh</a>. Copyright © <?php echo date("Y"); ?> <?php echo $Dname; ?> and <a href="http://alpha.net.bd">Alpha Net</a>.</p></div>
</div>
</body>
</html>