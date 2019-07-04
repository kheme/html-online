<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Specifying Colors - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
<meta name="robots" content="all" />
<meta name="keywords" content="html,tutorials,online,free" />
<meta name="description" content="Welcome to HTML online, a website for free HTML tutorials online created by Kheme" />
<meta name="keyphrases" content="free html tutorials online,tutorials by Kheme,free tutorials,html tutorials online,protx,free html lessons,free css tutorials,kheme's website" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../favicon.ico" />
<script src="../../script.js" type="text/javascript"></script>
</head>
<body style="margin:0px 0px">
<?=hd();?>
<div style="width:100%;background-image:url('../../images/bg.png');background-repeat:repeat-x;background-position-y:top">
<div id="dvl" style="margin-left:auto;margin-right:auto;width:760px;border:1px solid #80A0C4;background:white" class="forTexts">
<table width="100%" style="border-collapse: collapse" cellspacing="0" cellpadding="4" class="forTexts">
<tbody>
<tr>
<?=nav();?>
<td valign="top" style="border-left: 1px solid #C0C0C0">
<div style="float:left">
You are here: <strong><a href="../../index.php">Home</a></strong>
&gt; <a href="../../tutorials">Tutorials</a><b> &gt; <a href="../html">HTML Tutorials</a> 
&gt; Specifying Colors</b><h2>Specifying Colors</h2>
<p>In this lesson, I will teach you the various ways in which you can specify 
colors on webpages with HTML.</p>
<p><b>Color Names</b><br />
One of the easiest ways to specify colors in HTML is to use its name, if you 
know it! We&#39;ve done this before and I believe I don&#39;t have to spend extra time 
on this.</p>
<p><b>Hexadecimal Values</b></p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;font color=&quot;#ffff00&quot;&gt;yellow colored text&lt;/font&gt;<br />
&lt;font color=&quot;#800000&quot;&gt;maroon colored text&lt;/font&gt;</td></tr></tbody></table>
<p>In the above example, the hash (#) and the numbers/alphabets that follow are 
together known as &quot;hexadecimal&quot; numbers. Hexadecimal (hex for short) is another 
type of number system like the decimal number system, but the hex number system 
uses 16 digits (0 to F); that is, 0, 1, 2, ..., 8, 9, a, b, c, d, e, f (decimal 
uses 10 digits, 0 through 9).</p>
<p>The hex values define the mixture ratio of the colors <span style="color:red">red</span> 
, <span style="color:green">green</span> and <span style="color:blue">blue</span>. So 
the first two characters define the degree of <span style="color:red">red</span> to add to the color mixture, 
then the next two characters define the degree of <span style="color:green">green</span> to add to the mixture 
while the last two defines the degree of <span style="color:blue">blue</span> to add to the mixture.</p>
<p>You can try out different combinations, but always add the hash sign (#) 
before the characters. My favorite hex color is the MSN blue (<span style="color:#336699">#336699</span>), which is 
what I used in gradient with black for ProTx&#8482;.</p>
<p><b>Note</b>: I have prepared a HTML color table listing some colors, their 
names and their hexadecimal values in the appendix section.</p>
<p><b>RGB Values</b><br />
Using RGB (Red Green Blue) values is very similar to hex only that the hex 
values are converted back to decimal and used in a different way; so instead of:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;font color=&quot;#ffff00&quot;&gt;yellow colored text&lt;/font&gt;</td></tr></tbody></table>
<p style="text-align: left">you should use:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;font style=&quot;color:rgb(255,255,0)&quot;&gt;yellow colored text&lt;/font&gt;</td></tr></tbody></table>
<p>To get the RGB equivalent of the hex values, you have to convert the first 
two digits from hex to decimal to give the first set of numbers before the first 
comma, then the next two digits from hex to decimal to give the next set of 
numbers after the first comma and lastly convert the last two digits from hex to 
decimal to give the last set of numbers.</p>
<p>FF in Hexadecimal = 255 in Decimal, while 00 in Hexadecimal = 0 in Decimal. 
You can do this conversion with a scientific calculator if you have one or you 
can use the small Hex to Decimal (H2D™) converter I made for this purpose:
<a href="http://www.htmlonline.tk/tools/h2d.php">http://www.htmlonline.tk/tools/h2d.php</a></p>
<p>So converting #ffff00 from Hexadecimal to RGB gives rgb(255,255,0); Try out 
some numbers by yourself!</p>
<p>Now, you should be able to specify colors at any point while writing your 
HTML codes, using up to four different methods. You can use these values to 
color any tag.</p>
<p>See you at the next lesson!</p>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: center">If you have questions, feel free to email me; check my <a href="../../contact.php">contact page</a> for my email address.</p>
<p style="text-align:center">&nbsp;</p>
<p style="text-align:center"><b><a href="#top">Back To Top Of Page</a></b></p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?=lab();?>
<div style="height:42px">&nbsp;</div>
</body>
</html>