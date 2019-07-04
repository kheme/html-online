<?
require"../../admin/conn";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Using HTML Tables - HTML Tutorials - HTML Online - Free HTML Tutorials Online!</title>
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
&gt; Using HTML Tables</b><h2><b> Using HTML Tables</b></h2>
<p>Creating tables with HTML can be quite confusing for starters, and yes it was 
for me too! But if you to follow this lesson closely, you would do just fine ;)!</p>
<p><b>Table Tag</b><br />
We use the <i><b>table</b></i> tag to tell the browser to expect a HTML table; 
but <span style="font-family:courier new">&lt;table&gt;</span> <span style="font-family:courier new">&lt;/table&gt;</span> alone doesn&#39;t give us a table, because a table cannot exist 
without a cell! So we&#39;ll need two (2) extra tags nested within <span style="font-family:courier new">&lt;table&gt;</span> <span style="font-family:courier new">&lt;/table&gt;</span> 
to give us a table.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;row 1 on column 1 (Cell 1)&lt;/td&gt;<br />
&lt;td&gt;row 2 on column 1 (Cell 2)&lt;/td&gt; <br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/8.gif" /></p>
<p>So like is said, <span style="font-family:courier new">&lt;table&gt;</span> <span style="font-family:courier new">&lt;/table&gt;</span> tells the browser to expect a table while <span style="font-family:courier new">&lt;tr&gt;</span> 
<span style="font-family:courier new">&lt;/tr&gt;</span> denotes a table row and <span style="font-family:courier new">&lt;td&gt;</span> <span style="font-family:courier new">&lt;/td&gt;</span> denotes at table data or a (table) 
cell.</p>
<p><b>Table Rows</b>: To insert rows into a <i><b>table</b></i>, merely 
duplicate <span style="font-family:courier new">&lt;tr&gt;</span> <span style="font-family:courier new">&lt;/tr&gt;</span> for as many rows as you want, but also remember that within 
each <span style="font-family:courier new">&lt;tr&gt;</span> <span style="font-family:courier new">&lt;/tr&gt;</span> you MUST nest at least one (1) <span style="font-family:courier new">&lt;td&gt;</span> <span style="font-family:courier new">&lt;/td&gt;</span> because no table can 
exist without a cell (which is an intersecting row and column).</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;&lt;td&gt;row 1 (on column 1)&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;&lt;td&gt;row 2 (on column 1)&lt;/td&gt;&lt;/tr&gt;<br />
&lt;tr&gt;&lt;td&gt;row 3 (on column 1)&lt;/td&gt;&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/9.gif" /></p>
<p><b>Table Columns: </b>To insert columns into tables, merely 
duplicate <span style="font-family:courier new">&lt;td&gt;</span> <span style="font-family:courier new">&lt;/td&gt;</span> nested within a <span style="font-family:courier new">&lt;tr&gt;</span> <span style="font-family:courier new">&lt;/tr&gt;</span> and that will give you a new 
cell, or rather, a column on the same row.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;td&gt;column 2 (on row1)&lt;/td&gt;<br />
&lt;td&gt;column 3 (on row1)&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/10.gif" /></p>
<p style="text-align: left">So, with what I've shown you, you can 
combine <span style="font-family:courier new">&lt;tr&gt;</span> and <span style="font-family:courier new">&lt;td&gt;</span> to give you the rows and columns you want.</p>
<p style="text-align: left"><b>Column Spanning: </b>What if you want to do something like:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/11.gif" /></p>
<p>Any ideas how to do it? Do you want to try it on your own? Go ahead and try! 
So here&#39;s what we&#39;ll do: First of all, note that we have one (1) column on the 
first row and two (2) columns on the second row, right? Okay. But if you go 
ahead and try this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td align=&quot;center&quot;&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;td&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: left">you will get this:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/12.gif" /></p>
<p style="text-align: left">What we need to do here is to add to the first row's tag, an 
appropriate value for the <i>colspan</i> attribute. The <i>colspan</i> attribute 
tells the browser to to &quot;span&quot; the cell over a certain number of 
columns.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td colspan=&quot;2&quot; align=&quot;center&quot;&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;td&gt;column 1 (on row1)&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: left">Of course you should know by now that the <i>align</i> 
attribute controls the text alignment within the cell.</p>
<p style="text-align: left">So get this right: when you want a <i>column</i> to
<i>span</i> over x number of columns, add the <i>colspan</i> (<b>col</b>umn <b>
span</b>) attribute with x as the value. Get it? Now that you know how, try to do this:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/13.gif" ondblclick="sho()" /></p>
<p>Now double-click on the image above to see how I did it.</p>
<p><b>Row Spanning:</b> Now, what if we want to do this:</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/14.gif" /></p>
<p>Can you guess? Okay, let's go through this together: we have two (2) rows and 
two (2) columns with the first column stretching (spanning) down over two 
(2) rows. So what we 
have to do first of all is create the table as I explained it; look at 
my tags:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;some text&lt;/td&gt;&lt;td&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>Now, what we have to do  is add a <i>rowspan</i> attribute with an 
appropriate value. The <i>rowspan</i> attribute tell the browser to stretch 
(span) a row over the next certain number of rows. </p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td rowspan=&quot;2&quot;&gt;some text&lt;/td&gt;&lt;td&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>Try out some other ways you can span rows and columns, also try 
doing what I have below.</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/15.gif" /></p>
<p><b><br />
Table Width &amp; Height<br />
</b>Now, I'll teach you how to manipulate the <i>width</i> and <i>
height</i> of a table and it's cells.</p>
<p><b>Table Width:</b> Using the <i>width</i> attribute, we can control the 
width of a table, simply enter a number to set the value. Try this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;300&quot;&gt;<br />
&lt;tr&gt;&lt;td&gt;some text&lt;/td&gt;&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>We can also set width (as well as the height) in percentages.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot;&gt;<br />
&lt;tr&gt;&lt;td&gt;some text&lt;/td&gt;&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>What I have above tells the browser to set the width of the table to 50% of 
the width of the tag containing the table (in the case, the <i><b>body</b></i>), 
that&#39;s how percentage values work!</p>
<p><b>Table Height:</b> With the <i>height</i> attribute, we can set the height of the table. Just enter a number (e.g. 100) or use percentage (e.g. 25%).</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot; height=&quot;100&quot;&gt;<br />
&lt;tr&gt;&lt;td&gt;some text&lt;/td&gt;&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>Now try different widths and heights for your table, use numbers and 
percentages too.</p>
<p><b>Note</b>: The effect of using percentage is that when the browser&#39;s page 
is resized, the table automatically re-adjusts its height/width to fit the new 
size of the page. I made a short video clip to demonstrate this.
<a style="text-decoration: underline; text-underline: single" href="../../images/table.wmv">
Click here</a> to download the short clip and observe the black border as it 
resizes.</p>
<p><b>Cell Width</b>: We can also manipulate the width of a cell but using the
<i>width</i> attribute on the &lt;td&gt;.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot; height=&quot;100&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td width=&quot;20%&quot;&gt;some text&lt;/td&gt;<br />
&lt;td width=&quot;80%&quot;&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p>Now, in the HTML I have above, I used percentage to set the width of the 
second row. Please note that in this case, the percentage here is of the table&#39;s 
width because it’s the table that contains the cell. This means that the width 
of the &lt;td&gt; (80%) is actually 80% of the 50% of the width of the table, which is 
actually 40% of the total table width! You can also use numbers to set the width 
of the cell.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot; height=&quot;100&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td width=&quot;200&quot;&gt;some text&lt;/td&gt;<br />
&lt;td width=&quot;400&quot;&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="line-height:150%">I think I really don&#39;t have to give you a lesson on 
cell height, right? You can do that on your own... I trust you ;) ! Now, you can 
also adjust with thickness of the table by using higher numbers (e.g. 2 or 3) as 
border for the table. You can also use the align attribute to set the table’s 
text alignment to left, center or right.</p>
<p style="line-height:150%"><b>Border Color</b><br />
You can change the color of your table borders using the <i>bordercolor</i> 
attribute on your <i><b>table</b></i> tag. You should know how to specify colors 
by now, so I don&#39;t have to dwell on that! You can also use the same attribute (<i>bordercolor</i>) 
to set the color of the borders of individual cells too. Now try doing this 
(click on the sticky note to see how I did it):</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/16.gif" ondblclick="sho1()" /></p>
<p><b>Note:
</b>If you don&#39;t know how to 
<a href="specifying.colors.php">specify colors</a> in 
HTML, please read this tutorial: <a href="specifying.colors.php">Specifying 
Colors</a></p>
<p><b>Background Color<br />
</b>Using the <i>bgcolor</i> (<b>b</b>ack<b>g</b>round <b>color</b>) attribute on <span style="font-family:courier new">&lt;table&gt;</span>, <span style="font-family:courier new">&lt;tr&gt;</span> and <span style="font-family:courier new">&lt;td&gt;</span>, you can set 
their background colors. Now try to do this (double-click on the image to see how I 
did it):</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/17.gif" ondblclick="sho2()" /></p>
<p><b>Cell Spacing &amp; Padding</b><br />
You can set the space between each cell in a table and the space between the 
cells &amp; the table&#39;s border using the <i>cellspacing</i> attribute. In the 
example I have below, I used a large value for my table&#39;s <i>cellspacing</i> so 
you can easily see it; notice the space between both cells and the table&#39;s 
border.</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot; height=&quot;100&quot; 
cellspacing=&quot;5&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td width=&quot;200&quot;&gt;some text&lt;/td&gt;<br />
&lt;td width=&quot;400&quot;&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/18.gif" /></p>
<p><b>Cell Padding</b>: You can also set the padding of each cell; by padding I 
mean, the space between the cell&#39;s border and the cell&#39;s content. Look at this:</p>
<table class="forCode" cellspacing="0" cellpadding="5" width="100%">
<tbody>
<tr>
<td style="width:100%">
&lt;table border=&quot;1&quot; width=&quot;50%&quot; height=&quot;100&quot; 
cellpadding=&quot;5&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td width=&quot;200&quot;&gt;some text&lt;/td&gt;<br />
&lt;td width=&quot;400&quot;&gt;some text&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</td></tr></tbody></table>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/19.gif" /></p>
<p>Notice the space between the &quot;some text&quot; and the borders of each cell. Now 
try to do this (double-click the next image to see the HTML):</p>
<p style="text-align: center">
<img alt="" style="border:1px solid black" src="../../images/20.gif" ondblclick="sho3()" /></p>
<p>This will be all from me about tables, let's move over to the 
next lesson: <a href="working.with.forms.php">Working With Forms</a>.</p>
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