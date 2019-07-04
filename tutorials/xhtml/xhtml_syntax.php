<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>XHTML Syntax - XHTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; <a href="../../tutorials">Tutorials</a><b> &gt; <a href="../html">XHTML Tutorials</a> 
&gt; XHTML Syntax</b><h2>XHTML Syntax</h2>
<p>Remember, XHTML is XML + HTML; applying XML rules to HTML. So, what is XML 
and what are XML rules? Do you really need to know XML to learn HTML?</p>
<p>XML means E<b>x</b>tensible <b>M</b>arkup <b>L</b>anguage, and I you DO NOT 
NEED to know XML first to learn XHTML. All you need to know are the following 
rules that XML demands, which was adopted into HTML to form XHTML. Once you 
understand these rules and apply them to the normal HTML you know, then you&#39;d 
get XHTML... simple!</p>
<p><b>.: XHTML Rules</b></p>
<p>Remember the following AT ALL TIMES:</p>
<ul>
	<li>All tag names MUST be in lower case</li>
	<li>All tag attribute names MUST be in lower case</li>
	<li>All tag attribute values MUST be within quotation marks</li>
	<li>No tag attribute value should be minimized (I&#39;d explain)</li>
	<li>Instead of the &quot;name&quot; attribute, the &quot;id&quot; attribute MUST be used (<b>Note</b>: 
	this is not for all tags)</li>
	<li>All tags MUST be closed</li>
</ul>
<p>Now, I will explain these rules one after the other and with examples</p>
<p>&nbsp;</p>
<p><b>.: Lower Case Tag Names<br />
</b>XHTML demands that ALL HTML tag names be written ONLY in lower case, and NOT 
upper case or mIxEd caSe. Even though the following would display well on most 
browsers, in XHTML this is WRONG:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;DIV&gt;div 1&lt;/DIV&gt;<p>&lt;TextArea&gt;Some text&lt;/TextArea&gt;</p></td>
</tr></tbody></table>
<p>So a typical XHTML tag MUST look like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;div&gt;div 1&lt;/div&gt;<p>&lt;textarea&gt;Some text&lt;/textarea&gt;</p></td>
</tr></tbody></table>
<p>&nbsp;</p>
<p><b>.: Lower Case Attribute Names<br />
</b>XHTML demands that ALL HTML tag attribute names be written ONLY in 
lower case as well, and NOT upper case or mIxEd caSe. The following is wrong in 
XHTML, even though the tag name is in lower case:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;form STYLE=form1&gt;<br />
Name: &lt;input NAME=firstname tYpE=text&gt;<br />
&lt;input NAME=submitbutton TyPe=submit&gt;<br />
&lt;/form&gt;</td>
</tr></tbody></table>
<p>The correct form should be written like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;form style=form1&gt;<br />
Name: &lt;input name=firstname type=text&gt;<br />
&lt;input name=submitbutton type=submit&gt;<br />
&lt;/form&gt;</td>
</tr></tbody></table>
<p><b>Note:</b> ONLY attribute names MUST be written in 
lower case! Please do not confuse this to mean that all attribute values must be 
in lower case as well! ONLY the attribute names MUST be in lower case.</p>
<p>&nbsp;</p>
<p><b>.: Quoted Attribute Values<br />
</b>XHTML demands that ALL HTML tag attribute values be written ALWAYS 
within quotation marks ( &quot; ). From the previous example above, the following is 
still wrong in XHTML, even though the tag names and attribute names are now 
written in lower case:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
&lt;form style=form1&gt;<br />
Name: &lt;input name=firstname type=text&gt;<br />
&lt;input name=submitbutton type=submit&gt;<br />
&lt;/form&gt;</td>
</tr></tbody></table>
<p>The correct form should be written like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;form style=&quot;form1&quot;&gt;<br />
Name: &lt;input name=&quot;firstname&quot; type=&quot;text&quot;&gt;<br />
&lt;input name=&quot;submitbutton&quot; type=&quot;submit&quot;&gt;<br />
&lt;/form&gt;</td>
</tr></tbody></table>
<p>&nbsp;</p>
<p><b>.: No Minimized Tag Attributes</b><br />XHTML 
also demands that NO HTML tag attribute be minimized. I know I didn&#39;t really 
mention this during my HTML tutorials, but there are certain HTML tags with 
certain attributes that can be &quot;minimized&quot;. These are HTML tags that have 
attributes whose values are either of 2 values: each time we want the default 
value for these attributes, we simply write ONLY the attribute name without and 
any values for it at all! Below are some examples:</p>
<p>
</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;option 
value=&quot;2&quot; selected&gt;&lt;/option&gt;<p></p>
<p style="text-align: left">&lt;input 
type=&quot;checkbox&quot; checked value=&quot;course&quot;&gt;</p>
<p style="text-align: left">&lt;input 
type=&quot;button&quot; disabled value=&quot;Submit&quot;&gt;</p></td></tr></tbody></table>
<p>The proper way of writing what we have above would be:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;option 
value=&quot;2&quot; selected=&quot;selected&quot;&gt;&lt;/option&gt;<p></p>
<p style="text-align: left">&lt;input 
type=&quot;checkbox&quot; checked=&quot;checked&quot; value=&quot;course&quot;&gt;</p>
<p style="text-align: left">&lt;input 
type=&quot;button&quot; disabled=&quot;disabled&quot; value=&quot;Submit&quot;&gt;</p></td></tr></tbody></table>
<p>Here is a list of commonly minimized attribute and their proper ways of 
writing them in XHTML:</p>
<ul>
	<li><b>readonly=&quot;readonly&quot;</b> instead of <b>readonly</b></li>
	<li><b>noshade=&quot;noshade&quot;</b> instead of <b>
	noshade</b></li>
	<li><b>disabled=&quot;disabled&quot;</b> instead of <b>
	disabled</b></li>
	<li><b>selected=&quot;selected&quot;</b> instead of <b>
	selected</b></li>
	<li><b>multiple=&quot;multiple&quot;</b> instead of <b>
	multiple</b></li>
	<li><b>checked=&quot;checked&quot;</b> instead of <b>
	checked</b></li>
	<li><b>ismap=&quot;ismap&quot;</b> instead of <b>ismap</b></li>
	<li><b>noresize=&quot;noresize&quot;</b> instead of <b>
	noresize</b></li>
	<li><b>nohref=&quot;nohref&quot;</b> instead of <b>nohref</b></li>
	<li><b>nowrap=&quot;nowrap&quot;</b> instead of <b>nowrap</b></li>
</ul>
<p>&nbsp;</p>
<p><b>.: ID&nbsp; Instead of Name<br /></b>In XHTML, 
the &quot;name&quot; attribute of the following HTML tags were replaced with the &quot;id&quot; 
attribute: a, applet, frame, iframe, img, and map. Which makes the following 
wrong:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;a name=&quot;newlink&quot; href=&quot;new.php&quot;&gt;Click Here&lt;/a&gt;</p>
<p style="text-align: left">&lt;iframe name=&quot;newpageframe:&gt;&lt;/iframe&gt;</p>
<p style="text-align: left">&lt;img name=&quot;passport&quot; src=&quot;passport.jpg&quot;&gt;</p></td></tr></tbody></table>
<p>The above should be written as shown below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;a id=&quot;newlink&quot; href=&quot;new.php&quot;&gt;Click Here&lt;/a&gt;</p>
<p style="text-align: left">&lt;iframe id=&quot;newpageframe:&gt;&lt;/iframe&gt;</p>
<p style="text-align: left">&lt;img id=&quot;passport&quot; src=&quot;passport.jpg&quot;&gt;</p></td></tr></tbody></table>
<p><b>Note:</b> Sometimes, it is a good idea to include both the &quot;name&quot; 
attribute and the &quot;id&quot; attribute with the same values, to compensate for older 
browsers.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;img id=&quot;passport&quot; name=&quot;passport&quot; src=&quot;passport.jpg&quot;&gt;</p></td></tr></tbody></table>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: left"><b>.: Close All Tags<br />
</b>In XHTML, EVERY and ALL tags MUST be closed, excluding the DTD tag! YES! ALL 
tags, including those tags without closing tags, such as &lt;img&gt;, &lt;input&gt;, &lt;meta&gt;, 
etc.</p>
<p style="text-align: left">If you remember, I mentioned that all tags should be 
properly nested and closed, at all times. Now, for single tags (tags without 
closing tags) the way to &quot;close them is by ending the tag itself with a space 
and a slash ( / ). Observe the following tags how I closed them with a space and 
a slash:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;img id=&quot;passport&quot; name=&quot;passport&quot; src=&quot;passport.jpg&quot; 
/&gt;</p>
<p style="text-align: left">&lt;meta name=&quot;robots&quot; content=&quot;all&quot; /&gt;</p>
<p style="text-align: left">&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; 
/&gt;</p>
<p style="text-align: left">&lt;br /&gt;</p>
<p style="text-align: left">&lt;hr /&gt;</p></td></tr></tbody></table>
<p>&nbsp;</p>
<p><b>.: SUMMARY</b></p>
<ul>
	<li>All tag names MUST be in lower case</li>
	<li>All tag attribute names MUST be in lower case</li>
	<li>All tag attribute values MUST be within quotation marks</li>
	<li>No tag attribute value should be minimized (I&#39;d explain)</li>
	<li>Instead of the &quot;name&quot; attribute, the &quot;id&quot; attribute MUST be used (<b>Note</b>: 
	this is not for all tags)</li>
	<li>All tags MUST be closed</li>
</ul>
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