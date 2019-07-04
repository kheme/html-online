<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Introduction To CSS - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Introduction To CSS</b><h2><b> Introduction To CSS</b></h2>
<p>CSS or Cascading Style Sheets are used to define styles on webpages, in CSS 
files or in HTML tags. First of all, I will talk about the various ways you can 
use CSS on your webpage.</p>
<p><b>External CSS</b><br />
You can have a CSS file on its own, outside your HTML file and still use it on 
your webpage. All you need to do is add the link tag like what I have below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;link href=&quot;styles.css&quot; rel=&quot;StyleSheet&quot;&gt;</td></tr></tbody></table>
<p>You should change the href to contain the location of your CSS file and 
that&#39;s all (CSS files usually have the extension .css).</p>
<p><b>Note</b>: Please remember that <span style="font-family:courier new">&lt;link&gt;</span> must be placed within <span style="font-family:courier new">&lt;head&gt; 
&lt;/head&gt;</span>.</p>
<p><b>Internal CSS</b><br />
You can also have your CSS defined within the webpage, but you&#39;ll do that with 
<span style="font-family:courier new">&lt;style&gt; &lt;/style&gt;</span>. Below is a typical example of internal CSS. Please observe 
that <span style="font-family:courier new">&lt;style&gt; &lt;/style&gt;</span> must always be placed in <span style="font-family:courier new">&lt;head&gt; &lt;/head&gt;</span>.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;style&gt;<br />
body {color:black;font-family:verdana,arial,tahoma}<br />
a:link {text-decoration:none}<br />
a:hover {text-decoration:underline}<br />
&lt;/style&gt;</td></tr></tbody></table>
<p><b>Inline CSS</b><br />
You can also place your CSS inline with HTML tages; all you need to do is add 
the <i>style</i> attribute to the tag like I have below, and define your styles 
within the <i>style</i> attribute.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body style=&quot;font-family:verdana,arial,tahoma;color:black&quot;&gt;<br />
&lt;p align=&quot;center&quot; style=&quot;text-decoration:underline;font-weight:bold&quot;&gt;<br />
Welcome to my home page!&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Defining Styles</b><br />
Now, to define styles in your CSS file or within a webpage using <span style="font-family:courier new">&lt;style&gt; 
&lt;/style&gt;</span>, you&#39;ll follow this format:</p>
<p style="font-family:courier new">tagname {style-attribute:attribute value;}</p>
<p>What I have here will define the style for all tags named tagename. Please 
note that attributes are separated from their values with a colon (:), while 
attribute:value pairs are separated by semicolons (;). Below is a typical 
example (notice the colons and semicolons):</p>
<p style="font-family:courier new">body {color:black; font-family:verdana, Arial, tahoma}</p>
<p>In the line above, I have defined for the <i><b>body</b></i> tag (&lt;body&gt; 
&lt;/body&gt;) that its text color be black, and that it&#39;s font face (or font family) 
be verdana, and if verdana is not available on the system, then arial should be 
used, and if arial is also not available on the system, the tahoma should be 
used.</p>
<p>We can also define styles for only certain tags. In this case, we&#39;ll have to 
give it a name called ‘class’. You can use any name but the only difference it 
that you have to put a dot (.) before the name when defining it. For example,</p>
<p style="font-family:courier new">.name {color:black; font-family:verdana, arial, tahoma}</p>
<p>Now, to use this on any tag, you should add the class attribute to the tag 
and set its value as the name of the style class, but without the dot. Doing so 
applies the style defined for &quot;name&quot; to the tag. Look at my example below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;p class=&quot;name&quot;&gt;This text will be black and displayed in &quot;Verdana&quot;&lt;/p&gt;</td></tr></tbody></table>
<p><b>Inline Styles:</b> Defining styles within you HTML tags is similar; enter 
the attribute:value pairs like I had them in the other examples, as values for 
the <i>style</i> 
attribute for the tag you want to affect. Look at my example below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;p style=&quot;color:black; font-family:verdana, arial, tahoma&quot;&gt;<br />
This text will be black and displayed in &quot;Verdana&quot;&lt;/p&gt;</td></tr></tbody></table>
<p>Below is a table of several style attributes, their functions and some examples.</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse;border:1px solid #CCCCCC" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:20%"><b>Attributes</b></td>
<td style="width:36%"><b>Function</b></td>
<td style="width:110%"><b>Examples</b></td>
</tr><tr>
<td valign="top">font-family</td>
<td valign="top">sets font face type or family</td>
<td valign="top">style=&quot;font-family:comic sans ms&quot;</td>
</tr><tr>
<td valign="top">font-size</td>
<td valign="top">sets font size</td>
<td valign="top">style=&quot;font-size:11pt&quot;</td>
</tr><tr>
<td valign="top">font-weight</td>
<td valign="top">sets font weight</td>
<td valign="top">style=&quot;font-weight:bold&quot;</td>
</tr><tr>
<td valign="top">line-height</td>
<td valign="top">sets line height or spacing</td>
<td valign="top">style=&quot;font-height:150%&quot; (1.5 line spacing)</td>
</tr><tr>
<td valign="top">letter-spacing</td>
<td valign="top">sets space between letters</td>
<td valign="top">style=&quot;letter-spacing:10px&quot;</td>
</tr><tr>
<td valign="top">text-align</td>
<td valign="top">sets text alignment</td>
<td valign="top">style=&quot;text-align:center&quot;</td>
</tr><tr>
<td valign="top">color</td>
<td valign="top">sets font color</td>
<td valign="top">style=&quot;color:gold&quot;</td>
</tr><tr>
<td valign="top">background-color</td>
<td valign="top">sets background color</td>
<td valign="top">style=&quot;background-color:#336699&quot;</td>
</tr><tr>
<td valign="top">background-image</td>
<td valign="top">sets background images</td>
<td valign="top">style=&quot;background-image:url(mypic.jpg)&quot;</td>
</tr><tr>
<td valign="top">border</td>
<td valign="top">sets all border thickness</td>
<td valign="top">style=&quot;border:2px&quot; (0px for no border)</td>
</tr><tr>
<td valign="top">border-bottom</td>
<td valign="top">sets bottom border thickness</td>
<td valign="top">style=&quot;border-bottom:1px&quot;</td>
</tr><tr>
<td valign="top">border-top</td>
<td valign="top">sets top border thickness</td>
<td valign="top">style=&quot;border-top:2px&quot;</td>
</tr><tr>
<td valign="top">height</td>
<td valign="top">sets object height</td>
<td valign="top">style=&quot;height:100%&quot;</td>
</tr><tr>
<td valign="top">visibility</td>
<td valign="top">sets the visibility of an object</td>
<td valign="top">style=&quot;visibility:hidden&quot;<br />or 
style=&quot;visibility:visible&quot;</td>
</tr><tr>
<td valign="top">width</td>
<td valign="top">sets object width</td>
<td valign="top">style=&quot;width:250px&quot;</td>
</tr><tr>
<td valign="top">cursor</td>
<td valign="top">sets the cursor to display when the mouse is held 
over object</td>
<td valign="top">style=&quot;cursor:help&quot; or style=&quot;cursor:hand&quot;<br />or 
style=&quot;cursor:help&quot;</td>
</tr>
</tbody>
</table>
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