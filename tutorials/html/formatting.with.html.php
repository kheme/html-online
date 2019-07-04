<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Formatting With HTML - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Formatting With HTML</b><h2>Formatting With HTML</h2>
<p>In this lesson, I will teach you how to format text on webpages using HTML; I 
will teach you how to <span style="text-decoration:underline">underline text</span>, make them <b>bold</b>, italics or 
even <i><b style="text-decoration:underline">bold italics and underlined</b></i> altogether! I will also 
teach you how to color your text, set line spacing, text width, etc.</p>
<p><b>Bold<br />
</b>To make a text bold, we use the <i><b>bold</b></i> (<span style="font-family:courier new">&lt;b&gt; &lt;/b&gt;</span>) tag; try these 
lines:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
<p>This is normal text while 
&lt;b&gt;these ones are bold&lt;/b&gt;</p></td></tr></tbody></table>
<p>I will now give you a list of tags for you to play with; try all of them in 
different combinations, experiment with them, okay :) ?</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="95%" class="forTexts">
<tbody>
<tr>
<td style="width:20%"><b>Tag Name</b></td>
<td style="width:45%"><b>Function</b></td>
<td style="width:101%"><b>Examples</b></td>
</tr><tr>
<td valign="top">Bold</td>
<td valign="top">makes text bold</td>
<td valign="top">&lt;b&gt;bold text&lt;/b&gt;</td>
</tr><tr>
<td valign="top">Italics</td>
<td valign="top">italicizes text</td>
<td valign="top">&lt;i&gt;italics&lt;/i&gt;</td>
</tr><tr>
<td valign="top">Underline</td>
<td valign="top">underlines text</td>
<td valign="top">&lt;u&gt;underlined&lt;/u&gt;</td>
</tr><tr>
<td valign="top">Delete</td>
<td valign="top">
<p>strikes text horizontally, indicating it has been deleted!</p></td>
<td valign="top">&lt;del&gt;struck through&lt;/del&gt;</td>
</tr><tr>
<td valign="top">Big</td>
<td valign="top">makes text bigger in size</td>
<td valign="top">&lt;big&gt;bigger text&lt;/big&gt;</td>
</tr><tr>
<td valign="top">Small</td>
<td valign="top">makes text smaller in size</td>
<td valign="top">&lt;small&gt;smaller text&lt;/small&gt;</td>
</tr><tr>
<td valign="top">Code</td>
<td valign="top">makes text appear like computer <i>code</i></td>
<td valign="top">&lt;code&gt;some code&lt;/code&gt;</td>
</tr><tr>
<td valign="top">Reformat</td>
<td valign="top">reformats text</td>
<td valign="top">&lt;pre&gt;some text&lt;/pre&gt;</td>
</tr><tr>
<td valign="top">Keyboard</td>
<td valign="top">indicates text to be typed (with keyboard)</td>
<td valign="top">&lt;kbd&gt;CTRL + V&lt;/kbd&gt;</td>
</tr>
</tbody>
</table>
<p><b>Note</b>: <span style="font-family:courier new">&lt;u&gt; &lt;/u&gt;</span> is rather depreciated now and styles or CSS are 
recommended instead.<br />
<span style="font-family:courier new">&lt;code&gt; &lt;/code&gt;</span> is applicable when you want to write out some codes (such as HTML 
codes or other program codes) on your webpage,
<span style="font-family:courier new">&lt;pre&gt; &lt;/pre&gt;</span> is very good when you want to write some code on your web page 
also, but you can try it against <span style="font-family:courier new">&lt;code&gt;</span> and <span style="font-family:courier new">&lt;kbd&gt;</span>, and decided whichever works 
best for you. You will also notice that <span style="font-family:courier new">&lt;code&gt;</span>, <span style="font-family:courier new">&lt;kbd&gt;</span>, and <span style="font-family:courier new">&lt;pre&gt;</span> all produce 
same or similar effects.</p>
<p><b>Font Tag</b><br />
I will now teach you how to format text using the font tag and some of its 
attributes. The <i><b>font</b></i> tag (<span style="font-family:courier new">&lt;font&gt; &lt;/font&gt;</span>) in itself, does nothing 
to text until you add some attributes. We will not go through a few of these <i>
<b>font</b></i> tag attributes one at a time. Please note that <span style="font-family:courier new">&lt;font&gt;</span> is now 
depreciated and will not longer be in use with the new HTML (XHTML); but you can 
still perform all I'm about to teach you using styles or CSS.</p>
<p><b>Size</b>: The <i>size</i> attribute of the font tag sets the size of the 
text. Values for this attribute are the numbers 1 through 7 with one being the 
smallest size and 7 being the largest size.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;font size=&quot;1&quot;&gt;size 1&lt;/font&gt;<br />
&lt;font size=&quot;2&quot;&gt;size 2 &lt;/font&gt;<br />
&lt;font size=&quot;3&quot;&gt;size 3 &lt;/font&gt;<br />
&lt;font size=&quot;4&quot;&gt;size 4 &lt;/font&gt;<br />
&lt;font size=&quot;5&quot;&gt;size 5 &lt;/font&gt;<br />
&lt;font size=&quot;6&quot;&gt;size 6 &lt;/font&gt;<br />
&lt;font size=&quot;7&quot;&gt;size 7 &lt;/font&gt;</td></tr></tbody></table>
<p><b>Color</b>: The <i>color</i> attribute sets the color of the text. Please 
note that the spelling of the attribute is &quot;color&quot; (American) and not &quot;colour&quot; 
(British), and using &quot;colour&quot; instead of &quot;color&quot; doesn't work!</p>
<p>In another lesson (Specifying Colors), I will teach you the different ways 
you can specify colors in HTML but for now, we'll use the known names of colors, 
so try these lines:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;font color=&quot;red&quot;&gt;red&lt;/font&gt;<br />
&lt;font color=&quot;blue&quot;&gt;blue&lt;/font&gt;<br />
&lt;font color=&quot;green&quot;&gt;green&lt;/font&gt;<br />
&lt;font color=&quot;teal&quot;&gt;teal&lt;/font&gt;<br />
&lt;font color=&quot;gold&quot;&gt;gold&lt;/font&gt;<br />
&lt;font color=&quot;white&quot;&gt;white&lt;/font&gt;<br />
&lt;font color=&quot;brown&quot;&gt;brown&lt;/font&gt;<br />
&lt;font color=&quot;kheme&quot;&gt;just playing!&lt;/font&gt;</td></tr></tbody></table>
<p><b>Note</b>: I discovered a little trick, that using regular words as color 
names also works! Try my surname (omuta) as a color name and it gives you <span style="color:navy">navy 
blue</span>, while &quot;kheme&quot; gives you something like <span style="color:aqua">aqua</span>! Try your name, and see what 
it gives!</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/4.gif" /></p>
<p><b>Face: </b>The <i>face</i> attribute sets the font face type of 
the text; try these lines:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;font face=&quot;comic sans 
ms&quot;&gt;famous font for e-greeting cards online!&lt;/font&gt;</td></tr></tbody></table>
<p><b>Note</b>: It is recommended that you use fonts that are present on most 
computer systems by default! If you use a font that's on your system but absent 
on someone else's system, your page won't display well on that other system! One 
way to solve this is to set alternate fonts to be used in the absence of some 
font; look at the line below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;font face=&quot;arial, verdana, tahoma&quot;&gt;some 
text&lt;/font&gt;</td></tr></tbody></table>
<p>What this tag and it's attributes tell the browser is this: &quot;use arial to 
display the text, and if no arial is absent on this computer system, use verdana, 
and if no verdana, then use tahoma, and if none of these fonts are present, then 
go ahead and use which ever font you like, to display the text, okay?&quot; and 
that's exactly what the browser does!</p>
<p>If the browser is asked to display text using a font that's not present on 
the user's system, it will display the text using the browsers default set font 
which is usually &quot;Times New Roman&quot; (Internet Explorer's default) or whatever you 
have set in your browser. Always try to avoid using foreign fonts so your page 
won't appear &quot;ugly&quot; on someone else's browser!</p>
<p><b>Lists<br />
</b>I'll now show you how to do this:</p>
<ul>
	<li>this is a list item</li>
	<li>this is another one</li>
	<li>and I can go on listing items</li>
	<li>etc.</li>
</ul>
<p>What I have above is a &quot;list&quot; called an &quot;unordered list&quot;, while there's 
another called an &quot;ordered list&quot; which is numbered; let’s look at the <b><i>
unordered list</i></b> tag:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;ul&gt;<br />
&lt;li&gt;Item one&lt;/li&gt;<br />
&lt;li&gt;Item two&lt;/li&gt;<br />
&lt;/ul&gt;</td></tr></tbody></table>
<p>I&#39;ve used two tags here: the 
first is <span style="font-family:courier new">&lt;ul&gt;</span> (<b>u</b>nordered <b>l</b>ist) and the other is <span style="font-family:courier new">&lt;li&gt;</span> (<b>l</b>ist
<b>i</b>tem). <span style="font-family:courier new">&lt;ul&gt;</span> tells the browser to expect a &quot;list of items&quot; and that it 
should not order them, so they&#39;ll be listed at bullets; try it; 
here&#39;s what I got:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/5.gif" /></p>
<p>Now, to tell the browser to number the list or order the list, you simply 
change <span style="font-family:courier new">&lt;ul&gt;</span> to <span style="font-family:courier new">&lt;ol&gt;</span> (ordered list); try it now!</p>
<p>There's also another kind of list called <i><b>definition list</b></i>. The 
definition list is not actually a list of items but a list of terms or words and 
their definitions. To use this <i><b>definition list,</b></i> you're going to 
work with three (3) tags: <span style="font-family:courier new">&lt;dl&gt;</span>, <span style="font-family:courier new">&lt;dt&gt;</span>, <span style="font-family:courier new">&lt;dd&gt;</span>.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;dl&gt;<br />
&lt;dt&gt;&lt;b&gt;HTML&lt;/b&gt;&lt;/dt&gt;<br />
&lt;dd&gt;HyperText Markup Language&lt;/dd&gt;<br />
&lt;dt&gt;&lt;b&gt;CSS&lt;/b&gt;&lt;/dt&gt;<br />
&lt;dd&gt;Cascading Style Sheets&lt;/dd&gt;<br />
&lt;/dl&gt;</td></tr></tbody></table>
<p><span style="font-family:courier new">&lt;dl&gt;</span> means <b>d</b>efinition<i> </i> <b>l</b>ist and tells the 
browser to expect a list of definitions. <span style="font-family:courier new">&lt;dt&gt;</span> which means<i> 
</i> <b>d</b>efinition<i> 
</i> <b>t</b>erm<i> 
</i>indicates a <b>d</b>efinition <b>t</b>erm while <span style="font-family:courier new">&lt;dd&gt;</span> indicates the 
definition for the term in the previous <span style="font-family:courier new">&lt;dt&gt;</span>.</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/28.gif" /></p>
<p>&nbsp;</p>
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