<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Basic HTML Template - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Basic HTML Template</b><h2>Basic HTML Template</h2>
<p>The basic HTML webpage temple is something that I recommend each time you 
create a new webpage with HTML; it should contain at least the following tags at 
ALL times:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
Other stuff you want to add goes here<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p>Since I’ve explained the tags in this template and their functions, I will 
now go further to explain some other things about writing HTML.</p>
<p><b>Note:</b> For practice sake, all new tags I teach in this tutorial should be 
nested within the body tag in the HTML template suggested above, unless I state 
otherwise.</p>
<p><br />
<b>HTML Tag Nesting</b><br />
Each time you code in HTML, it is important that you nest you HTML tags to 
ensure that your webpage is properly displayed. Please refer to my HTML template 
above; you'll notice that I used &lt;html&gt; as the first and last tags on the page, 
then &lt;title&gt; &lt;/title&gt; within &lt;head&gt; &lt;/head&gt;. This arrangement is called 'Tag 
Nesting'. Now, to properly nest your HTML tags, follow this simple rule: the tag you open first MUST be closed last, then the tag you open second must be 
closed before closing the first opened tag… get it? So we can have something 
like:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;<br />
This is my first paragraph with some &lt;font size=&quot;3&quot;&gt;&lt;b&gt;BIG BOLD&lt;/b&gt;&lt;/font&gt; text 
and some &lt;u&gt;underlined text in &lt;i&gt;italics&lt;/i&gt;&lt;/u&gt;<br />
&lt;/p&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p>So, following the rule above, the tags above should be easy for you to understand. Improperly nested tags 
could 
look like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;You page title here<br />
&lt;/head&gt;<br />
&lt;/title&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;<br />
This is my first paragraph with some &lt;b&gt;&lt;font size=&quot;3&quot;&gt;BIG BOLD&lt;/b&gt;&lt;/font&gt; text 
and some &lt;u&gt;underlined text in &lt;i&gt;italics&lt;/u&gt;&lt;/i&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</td></tr></tbody></table>
<p>These tags are terribly<i> </i>nested and you should make it like second-nature to 
ALWAYS nest your tags properly!</p>
<p>Another rule for nesting your tags is to create the start<i> </i>and end 
tags at once, then do all other tags within, understand?</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
<br />
&lt;/html&gt;</td></tr></tbody></table>
<p>So I start with &lt;html&gt; and end it immediately so I'll never have to forget. 
Then the next tags can follow in the same manner:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<p>&lt;/head&gt;<br />
&lt;/html&gt;</p></td></tr></tbody></table>
<p>And so on until...</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;Welcome to HTML 101 with Kheme&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<p>&lt;/body&gt;<br />
&lt;/html&gt;<br />
<br />
&lt;/html&gt;</p></td></tr></tbody></table>
<p style="line-height:150%">Follow these rules when nesting your tags and you 
would have learned to keep you code tidy!
I prepared a short video to explain this rule;
<a href="../../images/tag_nesting.wmv">click here</a> to download it.</p>
<p><b><br />
HTML and White Spaces</b><br />
A white space is your normal space when you press the spacebar on your keyboard, 
but the deal with HTML and white spaces is that HTML only sees one (1) white 
space even when more than one (1) white spaces are used consecutively! HTML also 
sees carriage returns (<span style="font-family:Symbol">¿</span> Enter) or new lines in your 
HTML file as a single space. Using out HTML template try the lines below and 
observe the results:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;p&gt;This&nbsp;&nbsp; 
page will<p></p><p style="text-align: left">&nbsp;</p><p style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
display&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
just fine&lt;/p&gt;</p></td></tr></tbody></table>
<p>What did you get? Here's what I got:</p>
<p style="text-align:center">
<img alt="" style="border:1px solid black" src="../../images/2.gif" /></p>
<p>So, as you're probably wondering &quot;how on earth am I going to use multiple 
spaces?&quot; Well, it’s pretty simple; we use Character Entities. These are HTML 
forms of special characters like the angle brackets (&lt; and &gt;) or the white space 
or the copyright sign (©) or the hash sign (#), etc. Without these entities it 
would be impossible for you to write the HTML codes on webpages as I displayed 
here because the web browser sees every &lt;p&gt; as the 'start' of a paragraph tag 
and doesn't know if you want it to display or ‘interpret’ it! I will give you a 
list of these entities for you to play with.</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse;border:1px solid #CCCCCC" width="61%" class="forTexts">
<tbody>
<tr>
<td style="width:28%;height:16"><b>Name</b></td>
<td style="width:27%;height:16" align="center"><b>Character</b></td>
<td style="width:113%;height:16" align="center"><b>Entity</b></td>
</tr><tr>
<td>white space</td>
<td align="center">&nbsp;</td>
<td align="center">&amp;nbsp;</td>
</tr><tr>
<td>angle bracket</td>
<td align="center">&gt;</td>
<td align="center">&amp;lt;</td>
</tr><tr>
<td>angle bracket</td>
<td align="center">&lt;</td>
<td align="center">&amp;gt;</td>
</tr><tr>
<td>copyright </td>
<td align="center">©</td>
<td align="center">&amp;copy;</td>
</tr><tr>
<td>registered</td>
<td align="center">®</td>
<td align="center">&amp;reg;</td>
</tr><tr>
<td>trademark</td>
<td align="center">™</td>
<td align="center">&amp;trade;</td>
</tr><tr>
<td>multiplication</td>
<td align="center">×</td>
<td align="center">&amp;times;</td>
</tr><tr>
<td>division</td>
<td align="center">÷</td>
<td align="center">&amp;divide;</td>
</tr><tr>
<td>ampersand</td>
<td align="center">&amp;</td>
<td align="center">&amp;amp;</td>
</tr></tbody></table>
<p>You can also use the ASCII format of these entities too. Here are the same entities in the ASCII form; they work just the same way, try them!</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="61%" class="forTexts">
<tbody>
<tr>
<td><b>Name</b></td>
<td align="center"><b>Character</b></td>
<td align="center"><b>Entity </b>(ASCII format)</td>
</tr><tr>
<td>white space</td>
<td align="center">&nbsp;</td>
<td align="center">&amp;#160;</td>
</tr><tr>
<td>angle bracket</td>
<td align="center">&gt;</td>
<td align="center">&amp;#60;</td>
</tr><tr>
<td>angle bracket</td>
<td align="center">&lt;</td>
<td align="center">&amp;#62;</td>
</tr><tr>
<td>copyright </td>
<td align="center">©</td>
<td align="center">&amp;#169;</td>
</tr><tr>
<td>registered</td>
<td align="center">®</td>
<td align="center">&amp;#174;</td>
</tr><tr>
<td>trademark</td>
<td align="center">™</td>
<td align="center">&amp;#153;</td>
</tr><tr>
<td>multiplication</td>
<td align="center">×</td>
<td align="center">&amp;#215;</td>
</tr><tr>
<td>division</td>
<td align="center">÷</td>
<td align="center">&amp;#247;</td>
</tr><tr>
<td>ampersand</td>
<td align="center">&amp;</td>
<td align="center">&amp;#38;</td>
</tr></tbody></table>
<p>I have created a page that might be fun for you to use; it generates as many 
HTML entities as you want and gives their corresponding ASCII form. <a onclick="window.open(this.href);return false" href="../../tools/ascii.php">Click here</a> to access the page. Also note that 
even if these entities are not case-sensitive, you should write them in 
lowercase each time.</p>
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