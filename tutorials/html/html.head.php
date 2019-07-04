<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>HTML Head - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; HTML Head</b><h2>HTML Head</h2>
<p style="line-height:150%">I&#39;m going to teach you some of the tags that are 
placed within <span style="font-family:Courier New">&lt;head&gt; &lt;/head&gt;</span>, one of which we&#39;ve already used (<span style="font-family:Courier New">&lt;title&gt; 
&lt;/title&gt;</span>).</p>
<p style="line-height:150%">Usually, anything placed within <span style="font-family:Courier New">&lt;head&gt;</span> is not 
visible on the webpage, but some browsers still display things placed here! In 
this lesson, I&#39;ll treat only five (5) tags briefly: <span style="font-family:Courier New">&lt;meta&gt;</span>, <span style="font-family:Courier New">&lt;script&gt;</span>, <span style="font-family:Courier New">&lt;style&gt;</span>, 
<span style="font-family:Courier New">&lt;link&gt;</span> and <span style="font-family:Courier New">&lt;base&gt;</span>; little has to be said about <span style="font-family:Courier New">&lt;title&gt;</span> <span style="font-family:Courier New">&lt;/title&gt;</span>.</p>
<p style="line-height:150%"><b>Meta Tag</b><br />
The meta tag is used to carry information used by the web browser and some 
search engines. Using the appropriate attributes and values, you can use <span style="font-family:Courier New">&lt;meta&gt;</span> 
to do the following:</p>
<ul>
	<li>redirect the browser to another page after some time (in seconds)</li>
	<li>set the default editor (for Internet Explorer) when you attempt to edit 
	the web page you&#39;re viewing</li>
	<li>describe a webpage content for a search engine</li>
	<li>list keywords for search engines to use in indexing your webpage</li>
</ul>
<b>Note</b>: Please note that the ending tag for <span style="font-family:Courier New">&lt;meta&gt;</span> is forbidden!<p><b>Browser Redirection:  </b>Below is a typical web 
browser redirection page; you can change the things you want if you like to use 
it.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />&lt;!--<br />
you can change the time (in seconds) when you want the browser to be redirected.<br />
You can replace &quot;mypage.htm&quot; with the location of the page your redirecting the 
browser to; remember to include the full
location (URL) of the page,
unless it is located within the same folder as webpage 
from which your redirecting.<br />--&gt;<br />
&lt;meta http-equiv=&quot;refresh&quot; content=&quot;2;url=mypage.htm&quot;&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p align=&quot;center&quot;&gt;You will be redirected to a new page shortly!&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>For Search Engines:</b> In the example below, I have written  
&quot;description&quot; and &quot;keywords&quot; for search engines to use when indexing or crawling 
my webpage on the internet.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;meta name=&quot;description&quot; content=&quot;HTML Online - Free HTML 
online tutorials!&quot;&gt;<br />
&lt;meta name=&quot;keywords&quot; content=&quot;HTML,free,lessons,tutorials,Kheme,BackandFront&quot;&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;Some text&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Other Uses: </b>You can use <span style="font-family:Courier New">&lt;meta&gt;</span> to carry some other information. Such information may include the author of the 
webpage, etc.; look 
at what I have here:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;meta name=&quot;Author&quot; content=&quot;Kheme&quot;&gt;<br />
&lt;meta name=&quot;Email&quot; content=&quot;kheme@htmlonline.tk&quot;&gt;<br />
&lt;meta name=&quot;Client&quot; content=&quot;Public&quot;&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;Some text&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Script Tag<br />
</b>The <b> <i>script</i></b> tag is used to insert client-side scripts such as JScript 
or JavaScript and VBScript. I will say more about this tag later in the
<a onclick="window.open(this.href);return false" href="javascript.js">Introduction To JavaScript</a> lesson; anyway, try these lines:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;script&gt;<br />
a=new Date()<br />
alert(&quot;The time according to your computer is &quot;+a.getHours()+&quot;:&quot;+a.getMinutes())<br />
&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;put some content here if you want!&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</p></td></tr></tbody></table>
<p><b>Style Tag</b><br />
The <i><b>style</b></i> tag is used for defining your Cascading Style Sheet or 
CSS properties. With CSS, you can do your entire formatting; positioning, 
colors, widths &amp; heights, etc. I will say a little more about CSS later in the 
Introduction to CSS lesson. Meanwhile, try this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;style&gt;<br />
body {direction:rtl;background-color:black;color:white;cursor:help}<br />
&lt;/style&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;Put some content here to try out with the style I've defined.&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Link Tag</b><br />
The <i><b>link</b></i> tag (with no ending tag) is used when you have your CSS 
in an external file and you want to use it on a particular webpage. The tag 
below creates a link to the CSS file so that the present page can use the CSS 
defined in that CSS file.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;!-- the &quot;href&quot; attribute defines the location of the CSS file --&gt;<br />
&lt;link href=&quot;styles.css&quot; rel=&quot;StyleSheet&quot;&gt;<br />
&lt;!-- the &quot;rel&quot; defines the relationship between the HTML file and CSS file --&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;<br />
Nothing will affect this text because you do not have a &amp;quot;styles.css&amp;quot; file that 
defines any styles<br />
&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p><b>Base Tag<br />
</b>The <i>base</i> tag defines the &quot;base&quot; reference point for all locations 
(e.g. of images, external CSS, external JavaScript, etc.)</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<span style="font-family: Courier New">&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;base href=&quot;http://www.khemeonline.tk/blog/&quot;&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;&lt;a href=”30080601.php”&gt;An interesting blog of mine&lt;/a&gt;&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</span></td></tr></tbody></table>
<p>The <i>href</i> attribute defines the reference point for all locations.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p>&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;base href=&quot;http://www.htmlonline.tk&quot;&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;img src=&quot;mypic.gif&quot;&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</p></td></tr></tbody></table>
<p>From what I have here, it means that the actual location of the image is 
http://www.htmlonline.tk + mypic.gif which is
<a href="http://www.htmlonlinetk/mypic.gif">http://www.htmlonlinetk/mypic.gif</a></p>
<p>And from the previous example above, the link to my blog entry would actually 
be http://www.khemeonline.tk/blog/30080601.php and any other link I place on 
that page would start with http://www.khemeonline.tk/blog/</p>
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