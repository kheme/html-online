<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Working With Forms - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Working With Forms</b><h2><b> Working With Forms</b></h2>
<p>In this lesson, I&#39;m only going to teach you several HTML <i><b>form</b></i> 
elements for you to manipulate HTML forms on webpages. I am not going to teach 
you how to process forms in this lesson, but after this lesson, you can download 
a form mailer from the internet, and manipulate the HTML form elements without 
problems :)</p>
<p><b>Form Tag</b><br />
The <i><b>form</b></i> tag is similar to the table tag in the sense that <span style="font-family:courier new">&lt;form&gt;</span> 
<span style="font-family:courier new">&lt;/form&gt;</span> it tells the browser to expect a form, but the <i><b>form</b></i> tag 
alone does nothing just like <span style="font-family:courier new">&lt;table&gt;</span> <span style="font-family:courier new">&lt;/table&gt;</span>. The following tags are needed 
when working with HTML forms:</p>
<p><b>Form Input:</b> Most form fields are placed using the <i><b>input</b></i> 
tag, but with different values for the type attribute. I will explain this over 
the next few paragraphs. Please note now that the ending tag is forbidden for 
<span style="font-family:courier new">&lt;input&gt;</span>.</p>
<p><b>Text Input</b><br />
To place a text form input field just like the one in which you enter your 
e-mail address on websites, you should set the type attribute of the <i><b>input</b></i> 
tag to &#39;text&#39;. Try what I have below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;form method=&quot;post&quot; action=&quot;formmailer.php&quot;&gt;<br />
Enter your name: &lt;input type=&quot;text&quot; name=&quot;first_name&quot; size=&quot;25&quot;&gt;<br />
&lt;/form&gt;</td></tr></tbody></table>
<p>In the HTML code above, I used <span style="font-family:courier new">&lt;form&gt;</span> and <span style="font-family:courier new">&lt;input&gt;</span>. In <span style="font-family:courier new">&lt;form&gt;</span>, the <i>action</i> 
attribute is the location of the form handler to which the form is submitted. A 
form handler is a script (usually serve-side) that handles the data sent from 
the form. The <i>method</i> attribute sets the &quot;method&quot; used in sending the 
information from the form to the form handler: using &quot;post&quot; sends the 
information through the browser in a way that it is not visible to the user, 
while using &quot;get&quot; sends the information to the form handler&nbsp;as variables in the 
address bar of the web browser. When &quot;get&quot; is used, after the form is submitted, 
the address bar may have something like this:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/21.gif" /></p>
<p>I&#39;ve also set the input <i>type</i> to &quot;text&quot; and this places a &quot;text&quot; input 
field. The <i>name</i> attribute here is the &quot;name&quot; that the form handler will 
use to identify the field and its value. The <i>size</i> attribute sets the 
width of the text field.</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/22.gif" /></p>
<p>Now, to get other form input fields, try changing the <i>type</i> attribute 
in the previous example from “text” to any of the values in the table below:</p>
<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse;border:1px solid #CCCCCC" width="100%" class="forTexts">
<tbody>
<tr>
<td style="width:19%"><b>Attribute Values</b></td>
<td style="width:37%"><b>Function</b></td>
<td style="width:110%"><b>Examples</b></td>
</tr><tr>
<td valign="top">hidden</td>
<td valign="top">places an invisible form field</td>
<td valign="top">&lt;input type=&quot;hidden&quot; name=&quot;IP&quot;&gt;</td>
</tr><tr>
<td valign="top">button</td>
<td valign="top">places a normal clickable button</td>
<td valign="top">&lt;input type=&quot;button&quot; name=&quot;Submit&quot;&gt;</td>
</tr><tr>
<td valign="top">reset</td>
<td valign="top">places a button to reset the form&nbsp; when clicked (test it!)</td>
<td valign="top">&lt;input type=&quot;reset&quot; name=&quot;Clear Form&quot;&gt;</td>
</tr><tr>
<td valign="top">submit</td>
<td valign="top">places a button used to submit the form to the form handler</td>
<td valign="top">&lt;input type=&quot;submit&quot; name=&quot;Submit Form&quot;&gt;</td>
</tr><tr>
<td valign="top">password</td>
<td valign="top">places a password field</td>
<td valign="top">&lt;input type=&quot;password&quot; name=&quot;password&quot;&gt;</td>
</tr><tr>
<td valign="top">file</td>
<td valign="top">places a filed for uploading files</td>
<td valign="top">&lt;input type=&quot;file&quot; name=&quot;your_picture&quot;&gt;</td>
</tr><tr>
<td valign="top">images</td>
<td valign="top">places an image as a submit button</td>
<td valign="top" style="text-align: left">&lt;input type=&quot;images&quot; name=&quot;Submit&quot; src=&quot;images/images_button.gif&quot;&gt;</td>
</tr><tr>
<td valign="top">check box</td>
<td valign="top">places a check box</td>
<td valign="top">&lt;input type=&quot;checkbox&quot; name=&quot;likes&quot;&gt;</td>
</tr><tr>
<td valign="top">radio button</td>
<td valign="top">places a radio button</td>
<td valign="top">&lt;input type=&quot;radio&quot; name=&quot;gender&quot;&gt;</td>
</tr>
</tbody>
</table>
<p><b>Text Area</b><br />
To insert a text area like the one you into which you type e-mail messages, you 
should use the <i><b>textarea</b></i> tag. Use the cols attribute of the <i><b>
textarea</b></i> tag to set the width of the text area while the rows attribute 
sets the height of the <i><b>textarea</b></i>.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;form method=&quot;post&quot; action=&quot;formmailer.php&quot;&gt;<br />
Comments: &lt;textarea cols=&quot;30&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;<br />
&lt;/form&gt;</td></tr></tbody></table>
<p>Here's what I got:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/25.gif" /></p>
<p><b><br />
Drop-down Menu</b><br />
To insert a drop-down menu, we use the <i><b>select</b></i> tag; but <span style="font-family:courier new">&lt;select&gt;</span> 
<span style="font-family:courier new">&lt;/select&gt;</span> alone will give us an empty drop-down menu with no options. Now, to 
add options to this <i><b>select</b></i> (or drop-down menu), you should nest 
<span style="font-family:courier new">&lt;option&gt;</span> <span style="font-family:courier new">&lt;/option&gt;</span> within <span style="font-family:courier new">&lt;select&gt; &lt;/select&gt;</span>. See below:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;form method=&quot;post&quot; action=&quot;formmailer.php&quot;&gt;<br />
Gender:<br />
&lt;select name=&quot;gender&quot;&gt;<br />
&lt;option value=&quot;Male&quot;&gt;Male&lt;/option&gt;<br />
&lt;option value=&quot;Female&quot;&gt;Female&lt;/option&gt;<br />
&lt;/select&gt;<br />
&lt;/form&gt;</td></tr></tbody></table>
<p>In my example, I used the <i>value</i> attribute in &lt;option&gt; to set the value 
of that option. This is the value the form handler gets from the selected 
option. The text in between <span style="font-family:courier new">&lt;option&gt; &lt;/option&gt;</span> is what the user sees for that 
option. Now try it; here&#39;s what I got:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/26.gif" /></p>
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