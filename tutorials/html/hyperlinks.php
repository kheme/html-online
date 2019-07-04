<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hyperlinks - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Hyperlinks</b><h2>Hyperlinks</h2>
<p>In this lesson, I will show you how to link webpages together to form a 
website using <i><b>hyperlinks</b></i>. I will also show you how to use <i><b>
hyperlinks</b></i> to link to other parts of the same page.</p>
<p><b>Anchor Tag</b><br />
With the anchor tag, you can link to other webpages or even a different part of 
the same page! First, I will show you how to link to other webpages with the <i>
<b>anchor</b></i> tag using the <i>href</i> (<b>h</b>ypertext <b>ref</b>erence) 
attribute.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a href=&quot;page2.htm&quot;&gt;Page 2&lt;/a&gt;</td></tr></tbody></table>
<p>The href attribute sets the location of the page you're linking to. The text 
placed between <span style="font-family:courier new">&lt;a&gt; &lt;/a&gt;</span> is what the user sees and clicks on, to access the page.</p>
<p><b>Target</b>: The target attribute when used with <span style="font-family:courier new">&lt;a&gt; &lt;/a&gt;</span> is used to tell 
the browser where to open the page; whether in the window or a new window, etc. 
Below is a table with various target values and their functions.</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:11%"><b>Value</b></td>
<td style="width:37%"><b>Function</b></td>
<td style="width:118%"><b>Examples</b></td>
</tr><tr>
<td valign="top">_blank</td>
<td valign="top">opens page in a new blank page</td>
<td valign="top">&lt;a href=&quot;page1.htm&quot; target=&quot;_blank&quot;&gt;Page 1&lt;/a&gt;</td>
</tr><tr>
<td valign="top">_search</td>
<td valign="top">opens page in the search window of the browser</td>
<td valign="top">&lt;a href=&quot;page1.htm&quot; target=&quot;_search&quot;&gt;Page 1&lt;/a&gt;</td>
</tr><tr>
<td valign="top">_self</td>
<td valign="top">opens page in the same window<br /> (this is the default value)</td>
<td valign="top">&lt;a href=&quot;page1.htm&quot; target=&quot;_self&quot;&gt;Page 1&lt;/a&gt;<br />or simply<br />&lt;a href=&quot;page1.htm&quot;&gt;Page 1&lt;/a&gt;</td>
</tr><tr>
<td valign="top">_top</td>
<td valign="top">opens page in the topmost window</td>
<td valign="top">&lt;a href=&quot;page1.htm&quot; target=&quot;_top&quot;&gt;Page 1&lt;/a&gt;</td>
</tr>
</tbody>
</table>
<p><b>Link to a Different Part of the Same Page</b><br />
We can also create a hyperlink that links to another part of the same page. I 
have used this in all of my tutorial web pages; if you've noticed, I always have 
a link at the bottom of every lesson that takes you back to the top of the page; 
that's what I'm about to teach you!</p>
<p>To do this, you should use <span style="font-family:courier new">&lt;a&gt; &lt;/a&gt;</span> and, the <i>name</i> &amp; <i>href</i> 
attributes in different combinations. To eventually achieve this, you should 
first indicate what part of the page you want the link to pointed to, and you do 
so by using <span style="font-family:courier new">&lt;a&gt; &lt;/a&gt;</span> and the name attribute.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a name=&quot;top&quot;&gt;&lt;/a&gt;</td></tr></tbody></table>
<p>What I have here is called a &quot;bookmark&quot;. Put this at the part of the page 
where you want the link to point to. Anything can go in between the tag, such as 
text or image, etc. Next, you create the hyperlink itself, but in your <i>href</i>, 
you shoulder enter a hash sign (#) followed by the &quot;name&quot; of the bookmark. So, 
from my example above, if I want the link to go to the book mark I just created, 
then my hyperlink will look like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a href=&quot;#top&quot;&gt;Back to top&lt;/a&gt;</td></tr></tbody></table>
<p><b>Email Link<br />
</b>You can also use the anchor tag to create a link so that when it's clicked, 
it opens up your email page to compose an email to a particular email address.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a href=&quot;mailto:kheme@htmlonline.tk&quot;&gt;Email 
Kheme&lt;/a&gt;</td></tr></tbody></table>
<p>You can also predefine the subject of the email message.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;a href=&quot;mailto:kheme@htmlonline.tk?subject=Love 
your lessons!&quot;&gt;email me&lt;/a&gt;</td></tr></tbody></table>
<p>This will be all for these lessons, and I wish you all the best as you learn 
HTML and website design and development. But I still have 2 more introductory 
lessons for you!</p>
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