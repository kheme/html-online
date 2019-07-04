<?
require "../conn";
val();
if ($_GET) {
if (!isset($_GET['id'])) {exit;}
$a=$_GET['id'];
$b=mysql_query("select * from nl_msg where id=$a");
if (ro($b)==0) {exit(" ");}
$d=re($b,0,'content');
$c=re($b,0,'subject');
$ee=re($b,0,'stamp');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>eBSta - Newsltter Viewer</title>
</head>
<body onblur=window.close() style='font-family:verdana;font-size:9pt' topmargin=5 leftmargin=5 bottommargin=5 rightmargin=5 background="../../images/bg.jpg"?>
<p align="center"><b>Newsletter Viewer</b> <br />
<a href="javascript:window.close()">Close</a></p>
<table border="1" width="95%" style="font-family:Arial;font-size:11px;border-collapse: collapse" cellspacing="1" align="center">
<tr>
<td align="center" valign="top" width="70%"><b>Subject</b></td>
<td align="center" valign="top" width="30%"><b>Date</b></td>
</tr>
<tr valign="top">
<td><?=$c;?>&nbsp;</td><td><?=$ee;?>&nbsp;</td>
</tr>
</table>
<p align="center"><a href="javascript:window.close()">Close</a></p>
<?
exit;
}
else {exit;}
?>
</body>