<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Type Definition - XHTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
<meta name="robots" content="all" />
<meta name="keywords" content="html,tutorials,online,free" />
<meta name="description" content="Welcome to HTML online, a website for free HTML tutorials online created by Kheme" />
<meta name="keyphrases" content="free html tutorials online,tutorials by Kheme,free tutorials,html tutorials online,protx,free html lessons,free css tutorials,kheme's website" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../favicon.ico" />
<script src="../../script.js" type="text/javascript"></script>
</head>
<body style="margin:0px 0px" onload="s();x();init()">
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
&gt; Data Type Definition</b><h2><b> Data Type Definition</b></h2>
<p style="text-align: left">The Data Type Definition or DTD is used to describe 
the &quot;type&quot; of document. In other words, the DTD defines what syntax rules are 
allowable in the document and applied to its elements. ALL XHTML files MUST have 
a data type defined using the &lt;!DOCTYPE&gt; tag.</p>
<p style="text-align: left"><b>Note:</b> The &lt;!DOCTYPE&gt; tag is ALWAYS written in 
UPPER CASE and DOES NOT end with a &quot;/&gt;&quot; it is not really an XHTML 
element and so it&#39;s not treated as one. Also, the &lt;!DOCTYPE&gt; 
tag MUST always be the FIRST tag in your XHTML pages.</p>
<p style="text-align: left">There are presently 3 types of XHTML documents, 
namely:</p>
<ul>
	<li>
	<p style="text-align: left">Strict</p></li>
	<li>
	<p style="text-align: left">Transitional</p></li>
	<li>
	<p style="text-align: left">Frameset</p></li>
</ul>
<p>&nbsp;</p>
<p><b>.: XHTML 1.0 Strict Document Type<br />
</b>You should use this document type when you want really clean codes that are 
free of presentational clutter. CSS also comes in handy with this document type 
because its syntax rules are so strict that formatting has to be done via CSS 
because depreciated tags/attributes and &quot;formatting&quot; tags are FORBIDDEN in this document type! To use this 
document type, the following tag should be the FIRST tag on your XHTML pages:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;!DOCTYPE html
PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; 
&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;</p></td>
</tr>
</tbody>
</table>
<p style="text-align: left">Below is a list of some tags NOT allowed in the 
XHTML strict document type:</p>
<ul>
	<li>
	<p style="text-align: left">&lt;b&gt; &lt;/b&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;u&gt; &lt;/u&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;big&gt; &lt;/big&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;small&gt; &lt;/small&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;hr&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;center&gt; &lt;/center&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;font&gt; &lt;/font&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;frame&gt; &lt;/frame&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;frameset&gt; &lt;/frameset&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;iframe&gt; &lt;/iframe&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;noframes&gt; &lt;/noframes&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;sub&gt; &lt;/sub&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;sup&gt; &lt;/sup&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;s&gt; &lt;/s&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;strike&gt; &lt;/strike&gt;</p></li>
	<li>
	<p style="text-align: left">&lt;basefont&gt;</p></li>
</ul>
<p style="text-align: left"><b>Note:</b> There are also certain attributes that 
are not allowed in the XHTML 1.0 Strict document type, e.g. the &quot;align&quot; is not 
allowed for any tag; the &quot;target&quot; attribute is not allowed for the anchor tag; 
the &quot;height&quot; attribute is not for the table tag.</p>
<p style="text-align: left"><b>.: XHTML 1.0 Transitional Document Type<br />
</b>You should use this document type if you still want to make use some of some 
depreciated tags/attributes or &quot;formatting&quot; tags to do some formatting without CSS. It allows for 
features of presentational benefits in HTML.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;!DOCTYPE html
PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; 
&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;</p></td>
</tr>
</tbody>
</table>
<p style="text-align: left"><b>Note:</b> Two tags are NOT allowed in this 
document type: &lt;frame&gt;&lt;/frame&gt; &amp; &lt;frameset&gt;&lt;/frameset&gt;.</p>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: left"><b>.: XHTML 1.0 Frameset Document Type<br />
</b>Like the name suggests, you should use this document type if you use frames 
to partition your web page.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%" border="1">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;!DOCTYPE html
PUBLIC &quot;-//W3C//DTD XHTML 1.0 Frameset//EN&quot; 
&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd&quot;&gt;</p></td>
</tr>
</tbody>
</table>
<p style="text-align: left">Depending on your level of HTML/XHTML, you choose 
what&#39;s best for you. And in case you were wondering again, this website is XHTML 
1.0 Strict document type.</p>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: left"><b>.: XHTML Validation<br />
</b>The use of document types give raise to what is called XHTML validation. ALL 
XHTML documents must be validated to ensure that its elements (tags and 
attributes) all comply with the defined document type it uses. That is, if the 
document type is strict, then all XHTML elements on the page will be validated 
against the XHTML 1.0 Strict document type syntax and rules. If successful, then 
the document passes out as a valid XHTML document.</p>
<form method="get" action="http://validator.w3.org/check">
<p>To validate your XHTML on the internet, enter your web page address below:</p>
<p><input name="uri" size="60" value="http://www.htmlonline.tk/index.php" /></p>
<p><input value="Validate the page" type="submit" /></p>
</form>
<p>&nbsp;</p>
<p><b>.: SUMMARY</b></p>
<ul>
	<li>
	<p style="text-align: left">There are 3 types of valid XHTML documents: 
	Strict, Transitional and frameset</p></li>
	<li>
	<p style="text-align: left">XHTML 1.0 Strict document type does not allow 
	old tags and presentational tags</p></li>
	<li>
	<p style="text-align: left">XHTML 1.0 Transitional document type allows old 
	tags and presentational tags</p></li>
	<li>
	<p style="text-align: left">XHTML 1.0 Frameset document type is same as 
	XHTML 1.0 Transitional document type, but allows tags related with frames</p></li>
	<li>
	<p style="text-align: left">All XHTML must be validated against a DTD, 
	specified in its &lt;!DOCTYPE&gt; tag</p></li>
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