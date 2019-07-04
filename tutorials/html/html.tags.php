<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>HTML Tags - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; HTML Tags</b><h2>HTML Tags</h2>
<p>A HTML document or file is made of HTML tags called <i>elements</i>. HTML 
tags are usually written in the following format:</p>
<p><span style="font-family:Courier New">&lt;tagname&gt; &lt;/tagname&gt;</span></p>
<p>So a typical HTML tag or HTML element would look like:</p>
<p><span style="font-family:Courier New">&lt;b&gt; &lt;/b&gt;</span></p>
<p>This tag tells the browser to display the text within
<span style="font-family:Courier New">&lt;b&gt; &lt;/b&gt;</span> in bold.</p>
<p><b>Start &amp; End Tags</b><br />
By now you must have noticed that I wrote the tags in pairs (e.g.
<span style="font-family:Courier New">&lt;b&gt; &lt;/b&gt;</span>, <span style="font-family:Courier New">&lt;marquee&gt; 
&lt;/marquee&gt;</span>, etc.); that&#39;s because we have to tell the browser (for 
example) where the bold text ‘starts’ and where it ‘ends&#39;. So the first tag 
(e.g. <span style="font-family:Courier New">&lt;b&gt;</span>) is called the start tag while the 
second tag is called the end tag. So like I said earlier, only the text, etc. 
placed with the start and end&nbsp;tags will be affected by the tag; get it?<br />
<br />
<b>HTML Tag Attributes</b><br />
HTML tag attributes add certain properties to the tag. HTML tag attribute are 
added to a tag like shown in the example below. In this example, the size 
attribute of <span style="font-family:Courier New">&lt;font&gt; &lt;/font&gt;</span> determines the size 
of the font (or text) placed with the tag; try it!</p>
<p>
</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;p&gt;<br />
This is some 
normal text while &lt;font size=&quot;3&quot;&gt;this is some larger 
text&lt;/font&gt;<br />
&lt;/p&gt;</td></tr></tbody></table>
<p>Attributes are added to tags in this format:</p><p style="font-family:courier new">attributename=&quot;attributevalue&quot;</p>
<p><b>Note:</b> Spaces are NOT allowed in attribute names! e.g. size=&quot;3&quot;</p>
<p>For attribute values, it is okay to use either single quotes or double 
quotes, so we can have cases like:</p>
<p style="font-family:courier new">&lt;input name=&quot;name&quot; value=&quot;what&#39;s your name?&quot; type=&quot;text&quot;&gt;</p>
<p>So using single quotes ( &#39; ) to specify attribute values allows you to used 
double ( &quot; ) quotes within attribute values, while using double quotes ( &quot; ) to 
specify attribute values allows you to use single quotes ( &#39; ) within attribute 
values.<br />
<br />
Default Attribute Values<br />
When a tag is used by itself (e.g. &lt;p&gt;), all its attributes are set to their 
default values. When you set any value manually, the default values ignored. For 
example, the dir attribute of &lt;p&gt; by default is set to &quot;ltr&quot; (left-to-right), so 
the (default) text direction is ltr. If we set it by ourselves like below,</p>
<p style="font-family:courier new">&lt;p dir=&quot;ltr&quot;&gt;some text&lt;/p&gt;</p>
<p>the text direction still won&#39;t change because we&#39;ve set it to its default 
value and in this case, adding the dir attribute is as good as not adding it at 
all! If we want something different, then we can change it like this:</p>
<p style="font-family:courier new">&lt;p dir=&quot;rtl&quot;&gt;some text&lt;/p&gt;</p>
Now the text direction is set to rtl (right-to-left) which is no longer the 
default value. This works for all the attributes of all other tags: default 
attribute values are used if you didn&#39;t set any!<p style="text-align: left">&nbsp;</p>
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