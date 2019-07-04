<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Working With Images - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Working With Images</b><h2>Working With Images</h2>
<p>In this lesson, I&#39;m going to teach you how to insert images (pictures) into 
your webpages using HTML, and a little image formatting.</p>
<p><b>Image Tag</b><br />
To insert images into webpages, we make use of the <i><b>image</b></i> tag &lt;img&gt;. 
Note now that the <i><b>image</b></i> tag, &lt;img&gt;, has NO ending tag; in fact, 
the ending tag for &lt;img&gt; is forbidden! Please follow my example below and my 
explanations:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">&lt;img src=&quot;mypic.jpg&quot;&gt;</td></tr></tbody>
</table>
<p style="line-height:150%">What I did here was to use the <i>source</i> 
attribute (written as &quot;src&quot;) to specify the location of the image I want to 
insert into my webpage. I have used the image name and its extension.</p>
<p style="line-height:150%">For first-timers, the extension of the image is the 
last three letters in the name (.jpg in my example) while the file name itself 
is &quot;mypic&quot;. You must use the name and extension to specify an image file name 
when dealing with images.</p>
<p style="line-height:150%"><b>Try This:</b><br />
Make a copy of the image you want to use and place it on your desktop now. In 
your HTML file on your desktop, copy the line from my last example and enter the 
image’s name and its extension like in my example above, save it and preview it. 
What did you get?</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/7.gif" /></p>
<p>One thing to point out here is this: to insert images by using only its name 
(e.g. mypic.jpg), then the HTML file and the image to be inserted MUST be in the 
same folder! So, if your HTML file is still on your desktop, like I suggested 
earlier, make a copy of the image you wish to use and paste it on your desktop 
now. Look at how I have it on my desktop right:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/6.gif" width="500" height="255" /></p>
<p>Now, if you want to insert an image that is in a different location, you have 
to know the image’s absolute path location. This means that you need to know its 
location in relation to the drive in which it is saved, or its complete internet 
address, including the http://www. etc. (if the image is located online). The 
location I used here is ‘relative’ to the containing folder (which is my 
desktop).</p>
<p>If you want to insert an image located, for example, in your WINDOWS folder 
on drive C: then your tag should look something like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;c:/windows/Coffee Bean.bmp&quot;&gt;</td></tr></tbody></table>
<p style="text-align: left">or if it were in some other folder, it might look 
like this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img src=&quot;C:/My 
Games/Bejeweled 2 Deluxe/images/action.gif&quot;&gt;</td></tr></tbody></table>
<p style="text-align: left">If you want to insert an image located on the 
internet, you&#39;ll have to use the full URL of that image:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;http://www.xdavia.com/hd.jpg&quot;&gt;</td></tr></tbody></table>
<p>If you want to insert an image that&#39;s located in a folder within the folder 
containing your HTML file (i.e. the folder containing the image and the HTML 
file are in the same folder) you simply enter the name of the folder, followed 
by a slash (/) and then the name of the image.</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/23.gif" /></p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;images/mypic.jpg&quot;&gt;</td></tr></tbody></table>
<p>Now, if you want to insert an image that&#39;s located in a folder just outside 
the folder containing your HTML file (i.e. the image and the folder containing 
your HTML file are in the same folder), you simply enter two (2) dots followed 
by a slash (/) and then the image name.</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/24.gif" /></p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;../mypic.jpg&quot;&gt;</td></tr></tbody></table>
<p><b>Note</b>: Avoid using spaces in your file names (HTML files, images, CSS 
files, etc.); instead, use underscores (_) or dots (.) instead of spaces. This 
would be proper: &quot;star_logo.gif&quot;, while this would be improper: &quot;star logo.gif&quot;. 
Using spaces may cause some problems displaying them on some other browsers, so 
beware!</p>
<p><b>Alternate Text</b><br />
With the <i>alt</i> attribute of &lt;img&gt;, you can set an &quot;alternate&quot; text for the 
image. This text will be displayed on the image if for one reason or another, 
the image couldn&#39;t load.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;http://www.xdavia.com/hd.jpg&quot; alt=&quot;Xdavia Inc.&quot;&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/29.gif" /></p>
<p style="text-align: left"><b><br />
Borders<br />
</b>If you&#39;ve noticed, the images I use in my lessons 
have a thin black border around them; now, you&#39;ll learn how to do that. To insert a border around your image, use the <i>
border</i> attribute:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody><tr><td style="width:100%">
&lt;img 
src=&quot;mypic.jpg&quot; border=&quot;1&quot;&gt;</td></tr></tbody></table>
<p>Values for this attribute are in numbers: the higher the number,&nbsp; the 
thicker the border. Try it!</p>
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