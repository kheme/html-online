<?require"../admin/conn";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>ASCII Character Generator - HTML Tools - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; <b><a href="../tools">HTML Tools</a> &gt; ASCII Character Generator</b><h2>ASCII Character Generator</h2>
<p>To create a new list, simply refresh the page, press F5</p>
<script type="text/javascript">
num=prompt("How many characters do you want to display?","100");
num=num.toString(10);
if (num<3) {num=3;}
rows=Math.ceil(num/3);
</script>
<table border="0" width="100%" style="border-collapse: collapse" cellspacing="5" cellpadding="5">
<tr>
<td style="width:33%" valign="top">
<table border="1" cellpadding="3" cellspacing="0" style="border:1px solid #CCCCCC;border-collapse:collapse;font-size:11px" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:33%"><b>Character</b></td>
<td style="width:34%"><b>ASCII Form</b></td>
</tr>
<script type="text/javascript">
for (a=0;a < rows;a++) {
document.write('<tr><td style="width:33%;font-family:arial">&#'+(a+1)+'</td><td style="width:34%">&amp;#'+(a+1)+'</td></tr>\n');
}
</script>
</tbody>
</table>
</td>
<td style="width:33%" valign="top">
<table border="1" cellpadding="3" cellspacing="0" style="border:1px solid #CCCCCC;border-collapse:collapse;font-size:11px" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:33%"><b>Character</b></td>
<td style="width:34%"><b>ASCII Form</b></td>
</tr>
<script type="text/javascript">
for (a=rows+1;a<=(rows*2);a++) {
document.write('<tr><td style="width:33%;font-family:arial">&#'+a+'</td><td style="width:34%">&amp;#'+a+'</td></tr>\n');
}
</script>
</tbody>
</table>
</td>
<td style="width:33%" valign="top">
<table border="1" cellpadding="3" cellspacing="0" style="border:1px solid #CCCCCC;border-collapse:collapse;font-size:11px" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:33%"><b>Character</b></td>
<td style="width:34%"><b>ASCII Form</b></td>
</tr>
<script type="text/javascript">
for (a=(rows*2)+1;a<=(rows*3);a++) {
document.write('<tr><td style="width:33%;font-family:arial">&#'+a+'</td><td style="width:34%">&amp;#'+a+'</td></tr>\n');
}
</script>
</tbody>
</table>
</td>
</tr>
</table>
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