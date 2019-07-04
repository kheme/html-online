<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Basic XHTML Template - XHTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Basic XHTML Template</b><h2>Basic XHTML Template</h2>
<p>Funny as this may sound, there really is a basic XHTML template and I didn't 
come up with this one :) Remember that XHTML is cleaner, stricter HTML, so 
everything has to be done RIGHT, or else it won't check out as a valid XHTML 
document. This being the case, there is a &quot;basic&quot; XHTML template:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;!DOCTYPE ...&gt;<br />
&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;title&gt;...&lt;/title&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;...&lt;/body&gt;<br />
&lt;/html&gt;
</td></tr></tbody></table>
<p>This means that EVERY valid XHTML page MUST have at least these 5 tags 
properly nested:</p>
<ul>
	<li>&lt;!DOCTYPE&gt;</li>
	<li>&lt;html&gt; &lt;/html&gt;</li>
	<li>&lt;head&gt; &lt;/head&gt;</li>
	<li>&lt;title&gt; &lt;/title&gt;</li>
	<li>&lt;body&gt; &lt;/body&gt;</li>
</ul>
<p>Every other tag to come into the pages has to be nested properly within the 
appropriate tag in this &quot;template&quot;.</p>
<p>&nbsp;</p>
<p><b>.: SUMMARY</b></p>
<ul>
	<li>All valid XHTML pages must contain at least 5 elements: &lt;!DOCTYPE&gt;, 
	&lt;html&gt;, &lt;head&gt;, &lt;title&gt; and &lt;body&gt;</li>
	<li>All other XHTML elements must be nested within an appropriate tag</li>
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