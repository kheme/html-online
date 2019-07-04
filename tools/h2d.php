<?require"../admin/conn";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hexadecimal To Decimal Converter - HTML Tools - HTML Online - Free HTML 
Tutorials Online!</title>
<meta name="robots" content="all" />
<meta name="keywords" content="html,tutorials,online,free" />
<meta name="description" content="Welcome to HTML online, a website for free HTML tutorials online created by Kheme" />
<meta name="keyphrases" content="free html tutorials online,tutorials by Kheme,free tutorials,html tutorials online,protx,free html lessons,free css tutorials,kheme's website" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../favicon.ico" />
<script src="../script.js" type="text/javascript"></script>
</head>
<body style="margin:0px 0px">
<?=hd();?>
<div style="width:100%;background-image:url('../images/bg.png');background-repeat:repeat-x;background-position-y:top">
<div style="width:760px;margin-left:auto;margin-right:auto;border:1px solid #80A0C4;background:white" class="forTexts">
<table width="100%" style="border-collapse: collapse" cellspacing="0" cellpadding="4" class="forTexts">
<tbody>
<tr>
<?=nav();?>
<td valign="top" style="border-left: 1px solid #C0C0C0">
<div style="float:left">
You are here: <strong><a href="../index.php">Home</a></strong>
&gt; <b><a href="../tools">HTML Tools</a> &gt; Hexadecimal To Decimal Converter</b><h2>
Hexadecimal To Decimal Converter</h2>
<form method="post" action="h2d.php" onsubmit="return false">
<p style="text-align: center">Enter your <b>decimal</b> or <b>hexadecimal</b> number below and click the appropriate option:<br />
<br />
<b>
<input class="in" id="num" onmouseover="this.focus()" size="20" style="font-family:Verdana;font-size:8pt;border:1px solid #C0C0C0;width:150;" /></b></p>
<p>
</p>
<p style="text-align: center">Convert: <select size="1" id="opt" class="forTexts">
<option selected="selected" value="hex">To Hexadecimal</option>
<option value="dec">To Decimal</option>
</select></p>
<p style="text-align: center">
<input type="button" value="Convert" onclick="crt(num.value,opt[opt.selectedIndex].value)" style="font-family: Verdana; font-size: 8pt" /></p>
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