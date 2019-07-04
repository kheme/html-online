<?require"admin/conn";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Me - HTML Online - Free HTML Tutorials Online</title>
<meta name="robots" content="all" />
<meta name="keywords" content="html,tutorials,online,free" />
<meta name="description" content="Welcome to HTML online, a website for free HTML tutorials online created by Kheme" />
<meta name="keyphrases" content="free html tutorials online,tutorials by Kheme,free tutorials,html tutorials online,protx,free html lessons,free css tutorials,kheme's website" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<script src="script.js" type="text/javascript"></script>
</head>
<body style="margin:0px 0px" onload="set_autocomplete('spam',0)">
<?=hd();?>
<div style="width:100%;background-image:url('images/bg.png');background-repeat:repeat-x;background-position-y:top">
<div style="width:760px;margin-left:auto;margin-right:auto;border:1px solid #80A0C4;background:white" class="forTexts">
<table style="border-collapse:collapse;width:100%" cellspacing="0" cellpadding="4" class="forTexts">
<tbody>
<tr>
<?=nav();?>
<td valign="top" style="border-left: 1px solid #C0C0C0">
<div style="float:left">
You are here: <strong><a href="index.php">Home</a></strong>
&gt; <b>Contact Me</b><h2>My Contact Information</h2>
If you have to contact me for any reason whatsoever, then you can reach me by...
<p><b>Email:</b> <img alt="" src="image.php?id=1" />
<br /><b>
Mobile: </b><img alt="" src="image.php?id=3" /> </p>
<?
if ($_POST) {
$name=po("name");
$email=po("email");
$subject=po("subject");
$spam=po("spam");
$msg=po("msg");
$check=re(mysql_query("select * from rnd"),0,'rnd');
if ($name=="") {echo "<p style=\"color:red;font-weight:bold\">Please enter YOUR NAME!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"name\").focus();}</script>";}
else if ($email=="") {echo "<p style=\"color:red;font-weight:bold\">Please enter \"YOUR EMAIL\"!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"email\").focus();}</script>";}
else if (!strpos($email,"@") || !strpos($email,".") || (strpos($email,".")-(strpos($email,"@")+1))<1) {echo "<p style=\"color:red;font-weight:bold\">Please enter \"YOUR EMAIL\" CORRECTLY!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"email\").focus();}</script>";}
else if ($subject=="") {echo "<p style=\"color:red;font-weight:bold\">Please enter a \"SUBJECT\" for this message!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"subject\").focus();}</script>";}
else if ($msg=="") {echo "<p style=\"color:red;font-weight:bold\">Please enter your \"MESSAGE\"!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"msg\").focus();}</script>";}
else if ($spam!=$check) {echo "<p style=\"color:red;font-weight:bold\">Please enter the \"SPAM CHECK\" number CORRECTLY!</p>\n<script type=\"text/javascript\">window.onload=function(){document.getElementById(\"spam\").focus();}</script>";}
else {
if (kmail("html","kheme@htmlonline.tk,kheme@htmlonline.tk","Okiemute Omuta",$email,$name,$subject,$msg)) {echo "<p style=\"color:blue;font-weight:bold\">Message Sent!</p>";}
else {echo "<p style=\"color:red;font-weight:bold\">Message NOT Sent! Please try again much later!</p>";}
}
}
?>
<p>Alternatively, you can send me a direct email using this form</p>
<form method="post" onsubmit="return ck()" action="contact.php">
<div style="text-align:left">
<table cellpadding="2" class="forTexts" style="border-collapse:collapse;border:1px solid white;width:90%" cellspacing="0">
<tbody>
<tr>
<td style="width:23%;text-align:right;height:22px" valign="top"><b>Your Name:</b></td>
<td style="width:75%;text-align:left;height:22px" valign="top"><input value="<?=redo('post','name')?>" type="text" name="name" id="name" class="forForms" size="20" /></td>
</tr><tr>
<td style="text-align:right;height:22px" valign="top"><b>Your Email:</b></td>
<td style="text-align:left;height:22px" valign="top"><input value="<?=redo('post','email')?>" type="text" name="email" id="email" class="forForms" size="20" /></td>
</tr><tr>
<td style="text-align:right;height:22px" valign="top"><b>Message Subject:</b></td>
<td style="text-align:left;height:22px" valign="top"><input value="<?=redo('post','subject')?>" type="text" name="subject" id="subject" class="forForms" size="20" /></td>
</tr><tr>
<td style="text-align:right;height:69px" valign="top"><b>Message:</b></td>
<td style="text-align:left;height:22px;font-size:10pt" valign="top"><textarea rows="5" cols="50" name="msg" id="msg" style="font-family:Verdana;font-size:11px;border:1px solid #C0C0C0"><?=redo("post","msg")?></textarea></td>
</tr>
<tr>
<?
mysql_query("update rnd set rnd=".substr(date("U"),-5)."");
$spam=re(mysql_query("select * from rnd"),0,'rnd');
?>
<td style="text-align:right;height:25px"><strong>Spam Check:</strong></td>
<td style="height:25px"><strong style="padding:3px;">
<img src="image.php?id=<?=$spam;?>" alt="" /> &lt;= Enter this number in the box below</strong></td>
</tr>
<tr>
<td style="text-align:right">&nbsp;</td>
<td><input type="text" name="spam" id="spam" size="3" /></td>
</tr>
<tr>
<td style="text-align:right;height:31px" valign="top">&nbsp;</td>
<td valign="top" style="font-size:10pt;width:75%;text-align:left">
<input class="forButton" name="submit" type="submit" value="Send Message" /></td>
</tr>
</tbody>
</table>
</div>
</form>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<?=lab();?>
</div>
</body>
</html>