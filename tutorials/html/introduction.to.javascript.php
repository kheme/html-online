<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Introduction To JavaScript - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Introduction To JavaScript</b><h2><b> Introduction To JavaScript</b></h2>
<p>JavaScript is a client-side scripting language used to make webpages dynamic 
and interactive. By &quot;client-side&quot; I mean, it runs only after the webpage has 
been downloaded to the user&#39;s computer via the browser. If a script is not 
client-side, then it is &quot;server-side&quot;, which means the script runs on the server 
before the webpage is downloaded to the user’s computer via the browser. And 
just like CSS, there are various ways of using JavaScript on webpages.</p>
<p><b>External JavaScript</b><br />
You can have your JavaScript coded on a separate file and still use it on a 
webpage by using the <i><b>script</b></i> tag. Please note now that <span style="font-family:courier new">&lt;script&gt; 
&lt;/script&gt;</span> should be nested within <span style="font-family:courier new">&lt;head&gt; &lt;/head&gt;</span> in most cases. In other cases, 
it can be placed anywhere else within the <i><b>body</b></i> tag.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;script src=&quot;myscript.js&quot;&gt;&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
Other stuff you want to add goes here<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p>The <i>src</i> (<b>s</b>ou<b>rc</b>e) attribute contains the 
location of the JavaScript file (JavaScript files usually have the extension .js).<b><br />
<br />
<br />
Internal JavaScript<br />
</b>We can also use <span style="font-family:courier new">&lt;script&gt; &lt;/script&gt;</span> to insert JavaScript directly into 
your webpages. Simply do our coding within <span style="font-family:courier new">&lt;script&gt; &lt;/script&gt;</span> 
but without the <i>
src</i> attribute.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;script&gt;<br />
alert(&quot;Good Day!&quot;);<br />
&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
Other stuff you want to add goes here<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Note</b>: When the <i>src</i> attribute is specified, whatever codes you 
place between <span style="font-family:courier new">&lt;script&gt; &lt;/script&gt;</span> will be ignored completely!</p>
<p><b>Inline JavaScript</b><br />
You can also insert JavaScript directly into HTML tags, but it&#39;s usually not 
advisable. Best way to use JavaScript and CSS on your webpages if they are much, 
is to write them in an external file, and then link them to the webpage that 
needs them. This reduces the total size of your webpage, and saves time when 
your page is being view over a slow internet connection.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a href=&quot;#&quot; onclick=&quot;alert('Okay!')&quot;&gt;Click 
me!&lt;/a&gt;</td></tr></tbody></table>
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