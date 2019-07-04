<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>From HTML To XHTML - XHTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; From HTML To XHTML</b><h2>From HTML To XHTML</h2>
<p>In this lesson, I&#39;m going to teach you how to convert your existing HTML 
pages into valid XHTML pages.</p>
<p>First of all, remember that XHTML is also HTML, but with XML syntax applied. 
So let&#39;s recall the syntax of XHTML again:</p>
<ul>
	<li>All tag names MUST be in lower case</li>
	<li>All tag attribute names MUST be in lower case</li>
	<li>All tag attribute values MUST be within quotation marks</li>
	<li>No tag attribute value should be minimized (I&#39;d explain)</li>
	<li>Instead of the &quot;name&quot; attribute, the &quot;id&quot; attribute MUST be used (<b>Note</b>: 
	this is not for all tags)</li>
	<li>All tags MUST be closed</li>
</ul>
<p>Using this outline, you can begin to convert your HTML into XHTML. Let&#39;s 
begin...</p>
<p>&nbsp;</p>
<p><b>.: Change ALL Tag Names To Lower Case <br />
</b>First of all, you should change ALL UPPER CASE tag names to lower case. One 
way of doing this easily is to use a good HTML editor that has &quot;find and 
replace&quot; function (I use MS FrontPage). Once with the editor, view the HTML 
source, and then perform a find and replace to replace most common tags in UPPER 
CASE to lower case. I have a snap-shot of how I do it with MS FrontPage:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/from_h1.jpg" width="500" height="300" /> </p><p>
Take note of the anchor tags I have towards the left of this picture, they&#39;re 
all in UPPER CASE. So with my fine and replace, I&#39;ve requested that every single 
&quot;&lt;A&quot; (case sensitive) be replaced with &quot;&lt;a&quot;. I will have to repeat the same 
procedure to replace all &quot;&lt;/A&gt;&quot; with &quot;&lt;/a&gt;&quot;.</p>
<p>On the other hand, you can also do the change manually! It&#39;s going to take 
more time, but I&#39;m sure you&#39;d get the work done before you know it ;)</p>
<p>&nbsp;</p>
<p><b>.: Change ALL Attribute Names To Lower Case <br />
</b>Next, you have to change ALL UPPER CASE attribute names to lower case too. 
Well, doing this with the find and replace feature of a HTML editor could help 
too. But be sure you do it properly, else you&#39;re going to mess your code up 
completely.</p>
<p>Say for example, say you want to change all the &quot;ALIGN&quot; 
attributes to lower case, I&#39;d suggest you search for &quot; ALIGN=&quot; and replace it 
with &quot; align=&quot;, rather than searching for &quot;ALIGN&quot; and replacing with &quot;align&quot;.</p>
<p>&nbsp;</p>
<p><b>.: Quote ALL Attribute Values<br />
</b>Next, you have to quote ALL attribute values, and always use the double 
quotation mark ( &quot; ) rather than the single quotation mark ( &#39; ). Unfortunately, 
there&#39;s not faster way that I know for doing this than to do it manually, one 
after another.</p>
<p>&nbsp;</p>
<p><b>.: Correct ALL Minimized Tag Attributes</b><br />
Next, you have to correct ALL minimized attributes. Below is a list of some 
minimized attributes and their correct form. Make reference to this list and 
manually check your tags for minimized attributes.</p>
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
	<li><b>compact=&quot;compact&quot;</b> instead of <b>compact</b></li>
	<li><b>declare=&quot;declare&quot;</b> instead of <b>declare</b></li>
	<li><b>defer=&quot;defer&quot;</b> instead of <b>defer</b></li>
</ul>
<p>&nbsp;</p>
<p><b>.: Change &quot;Name&quot; To &quot;ID&quot;<br /></b>If you used 
the used the &quot;name&quot; attribute for any of the following tags in your HTML page: 
a, applet, frame, iframe, img, or map, then you would have to change all of them 
to &quot;id&quot;.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;a name=&quot;newlink&quot; href=&quot;new.php&quot;&gt;Click Here&lt;/a&gt;</p>
<p style="text-align: left">&lt;img name=&quot;passport&quot; src=&quot;passport.jpg&quot;&gt;</p></td></tr></tbody></table>
<p>For example, the above should be written as shown below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
<p style="text-align: left">&lt;a id=&quot;newlink&quot; href=&quot;new.php&quot;&gt;Click Here&lt;/a&gt;</p>
<p style="text-align: left">&lt;img id=&quot;passport&quot; src=&quot;passport.jpg&quot;&gt;</p></td></tr></tbody></table>
<p><b>Note:</b> Sometimes, it is a good idea to include both the &quot;name&quot; 
attribute and the &quot;id&quot; attribute with the same values, to compensate for older 
browsers.</p>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: left"><b>.: Close All Tags<br />
</b>Next, you have to close ALL tags, especially the single tags like &lt;meta&gt;, 
&lt;link&gt;, &lt;img&gt;, &lt;br&gt;, &lt;hr&gt;, etc. Make sure you close every tag you open. As for 
single tags, all you have to do is add &quot; /&gt;&quot; to the end of the tag; &lt;br&gt; becomes 
&lt;br /&gt;; &lt;img src=&quot;logo.gif&quot;&gt; becomes &lt;img src=&quot;logo.gif&quot; /&gt;; &lt;hr&gt; becomes &lt;hr 
/&gt;.</p>
<p style="text-align: left">&nbsp;</p>
<p style="text-align: left"><b>.: Add Document Type Definition<br />
</b>Next, you have to add a document type definition. As for this, I would like 
to advice that you use the XHTML 1.0 Transitional document type for more 
flexibility, unless you want to use frames and inline frames on certain web 
pages, then those web pages should use XHTML 1.0 Frameset document type, while 
every other &quot;normal&quot; page should use transitional.</p>
<p style="text-align: left">If you want to use XHTML 1.0 Strict document type, 
then be aware that presentational tags, such as &lt;b&gt;, &lt;font&gt;, etc. are NOT 
allowed. And certain attributes are also NOT allowed, such as the &quot;align&quot; 
attribute for the paragraph tag or the &quot;height&quot; attribute for the table tag.</p>
<p style="text-align: left">Again, I suggest that you use XHTML 1.0 
Transitional.</p>
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
<p>&nbsp;</p>
<p><b>.: Validation<br />
</b>The last step in converting your HTML into XHTML is the XHTML validation. 
Now, you can do this either online over the internet, or offline on your 
computer.</p>
<p><span style="text-decoration:underline">Offline Validation</span>: If you use Mozilla FireFox browser, there are 
XHTML validator add-ons you can download from 
<a href="https://addons.mozilla.org/en-US/firefox/" onclick="window.open(this.href);return false;">FireFox&#39;s add-ons page</a>. 
You can also download XHTML validation software, such as
<a onclick="window.open(this.href);return false;" href="http://www.htmlvalidator.com/">CSE HTML Validator</a>. 
You can also search the internet for others. After validation with the add-on or 
software, more errors might show up and you&#39;d have to fix them all. Once 
validated without error, then you&#39;re good to go!</p>
<p><span style="text-decoration:underline">Online Validation</span>: After validating your XHTML pages with the FireFox 
add-ons or other software, it is recommended that you still validate your XHTML 
with W3C at <a href="http://validator.w3.org/" onclick="window.open(this.href);return false;">http://validator.w3.org/</a></p>
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