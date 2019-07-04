<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Basic HTML Tags - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Basic HTML Tags</b><h2>Basic HTML Tags</h2>
<p>In this lesson, I'll be teaching you a few HTML tags that we may call basic 
HTML tags.</p>
<p>Note: from this point forward, I will indicate HTML tag names in bold italic 
words (e.g. table), while HTML tag attributes will be indicated in normal italic 
words (e.g. align).</p>
<p><b>The Paragraph Tag</b><br />
The paragraph tag (<span style="font-family:courier new">&lt;p&gt; &lt;/p&gt;</span>) is used to indicate paragraphs of text on webpages. 
For every paragraph you want, use <span style="font-family:courier new">&lt;p&gt; &lt;/p&gt;</span>; try this:
</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;p&gt;This is my first paragraph 
of text&lt;/p&gt;<br />
&lt;p&gt;This is the second paragraph&lt;/p&gt;<br />
&lt;p&gt;This of course is my third paragraph. To add more paragraphs, use more &amp;lt;p&amp;gt; 
&amp;lt;p/&amp;gt;&lt;/p&gt;</td></tr></tbody></table>
<p>The <i>align</i> attribute sets the text alignment of each 
paragraph; try this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;p align=&quot;right&quot;&gt;<br />
This paragraph of text is aligned to the &lt;b&gt;right-hand&lt;/b&gt; side of the page&lt;/p&gt;<br />
&lt;p align=&quot;center&quot;&gt;<br />
This paragraph of text is aligned to the &lt;b&gt;center&lt;/b&gt; of the page&lt;/p&gt;</td></tr></tbody></table>
<p>Here&#39;s what I got:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/3.gif" /></p>
<p><b><br />
HTML Comment Tags<br />
</b>HTML <i><b>comment</b></i> tags allow you to add comments to your HTML 
codes. Although these comments are visible in your HTML codes, it will not be 
displayed when viewed in a web browser. There are two ways of writing comments 
in HTML and I'll treat them together; try these lines below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;comment&gt;<br />
This is a comment and it will not show on your webpage<br />
&lt;/comment&gt;<p>&lt;!--<br />
This is another comment; comments can be used to provide extra information like 
explanation for your HTML code to aid you in editing it later.<br />--&gt;</p></td></tr></tbody></table>
<p><b><br />
Line Brakes<br />
</b>To insert new lines in your webpages, you should use the <b> <i>
line brake </i> </b>tag (&lt;br&gt;); try these lines 
below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">
&lt;p&gt;<br />
This is a regular paragraph.&lt;br&gt;This will be a new line on the same paragraph<br />
&lt;/p&gt;</p></td></tr></tbody></table>
<p><b>Note</b>: Not all HTML tags have ending tags; <span style="font-family:coutier new">&lt;br&gt;</span> is one 
of them.</p>
<p><b><br />
Horizontal Lines<br />
</b>To insert horizontal lines in your webpages, you should use 
the <i><b>horizontal rule</b></i> tag (&lt;hr&gt;); try these lines:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;p&gt;<br />
This is a regular paragraph, &lt;br&gt; and this will be a new line on the same 
paragraph<br />
&lt;hr&gt;<br />
This text will appear just underneath a grayish horizontal line<br />
&lt;/p&gt;</td></tr></tbody></table>
<p>Also observe that &lt;hr&gt; is another tag that does not have an ending tag. Some 
other tags without ending tags are: &lt;meta&gt;, &lt;img&gt;, &lt;link&gt; and &lt;bgsound&gt;. You can 
make use of the following attributes of &lt;hr&gt;:</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="80%" class="forTexts">
<tbody>
<tr>
<td style="width:22%"><b>Attribute name</b></td>
<td style="width:50%"><b>Function</b></td>
<td style="width:94%"><b>Examples</b></td>
</tr><tr>
<td><i>color</i></td>
<td>sets the color of the line</td>
<td>&lt;hr color=&quot;black&quot;&gt;</td>
</tr><tr>
<td><i>size</i></td>
<td>sets the size (thickness) of the line</td>
<td>&lt;hr size=&quot;2&quot;&gt;</td>
</tr><tr>
<td><i>align</i></td>
<td>sets the alignment of the line</td>
<td>&lt;hr align=&quot;right&quot;&gt;</td>
</tr>
</tbody>
</table>
<p><b><br />
Heading Tags<br />
</b>You can insert headings into your webpages with the heading tag; try these 
lines below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;h1&gt;This is a heading&lt;/h1&gt;<br />
&lt;h2&gt;This is a smaller heading&lt;/h2&gt;<br />
&lt;h3&gt;This is a much smaller heading&lt;/h3&gt;<br />
&lt;h4&gt;This is another much smaller heading&lt;/h4&gt;<br />
&lt;h5&gt;This is yet another much much smaller heading&lt;/h5&gt;<br />
&lt;h6&gt;This is the smallest heading&lt;/h6&gt;</td></tr></tbody></table>
<p>You can make use of the <i>align</i> attribute with the heading tags as you 
wish; try something new by yourself!</p>
<p><b><br />
Body Tag<br />
</b>I know we've done some stuff with &lt;body&gt; &lt;/body&gt; since we've been using it 
in our basic HTML template, but I will now show you some useful attributes of 
the body tag.</p>
<p>Below is a table of attributes, their function and examples; I want you to 
try them out in your own way, using your own different combinations!</p>
<table border="1" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:18%"><b>Attribute name</b></td>
<td style="width:36%"><b>Function</b></td>
<td style="width:112%"><b>Example</b></td>
</tr><tr>
<td valign="top"><i>bgcolor</i></td>
<td valign="top">sets page background color</td>
<td valign="top">&lt;body bgcolor=&quot;navy&quot;&gt; or <br />&lt;body bgcolor=&quot;lightgrey&quot;&gt;</td>
</tr><tr>
<td valign="top"><i>background</i></td>
<td valign="top">sets page background image</td>
<td valign="top">&lt;body background=&quot;mypic.jpg&quot;&gt;</td>
</tr><tr>
<td valign="top"><i>text</i></td>
<td valign="top">sets color of text</td>
<td valign="top">&lt;body text=&quot;teal&quot;&gt;</td>
</tr><tr>
<td valign="top"><i>link</i></td>
<td valign="top">sets the color of hyperlinks</td>
<td valign="top">&lt;body link=&quot;black&quot;&gt;</td>
</tr><tr>
<td valign="top"><i>scroll</i></td>
<td valign="top">adds/removes page scrollbars</td>
<td valign="top">&lt;body scroll=&quot;yes&quot;&gt; or &lt;body scroll=&quot;no&quot;&gt;</td>
</tr></tbody></table>
<p>Now we&#39;ve covered these basic tags, we can get ready for the next lesson: <a onclick="window.open(this.href);return false" href="formatting.with.html.php">Formatting With HTML</a>.</p>
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