<?
require "conn";
if (isset($_GET['logout'])) { // Logs user out and terminates eBSta session
 if (ge("logout")==null) {unset($_SESSION['ebsta_user']);unset($_SESSION['ebsta_pass']);}
}
val();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>eBSta - Home</title>
<meta name="robots" content="noindex" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="script.php"></script>
</head>
<body onselectstart="return false">
<?toplink()?>
<p align="center"><b style="font-size:10pt">Home</b>
<hr color="#000000" width="100%" align="left" />
</p>
<p>
</p>
<b>eBSta Summary</b>
<table width="100%" cellpadding="2" border="0" style="font-size: 10px; border-collapse: collapse" bordercolor="#111111" cellspacing="0">
<tr>
<td width="25%" valign="top">
<p><a class="top" style="text-decoration:none" href='Invites/'><b>Invites</b><br /><?
$a=mysql_query("select * from iv");
$b=ro($a);
$fb=$b;
if ($b!=0) {
 if ($b==1) {echo "<font color='blue'><b>$b</b> Invite!";}
 else {echo "<font color='blue'><b>$b</b> total Invites!";}
}
else {echo "<font color='red'><b>No</b> no Invites!";}
?></a></p>
</td>
<td width="25%" valign="top">
<p><a class="top" style="text-decoration:none" href='Newsletter/'><b>Newsletter Subscribers</b><br /><?
$a=mysql_query("select * from nl_sub");
$b=ro($a);
$fb=$b;
if ($b!=0) {
 if ($b==1) {echo "<font color='blue'><b>$b</b> Subscriber!";}
 else {echo "<font color='blue'><b>$b</b> total Subscribers!";}
}
else {echo "<font color='red'><b>No</b> no Subscriber!";}
?></a></p>
</td>
<td width="25%" valign="top">
<p><a class="top" style="text-decoration:none" href='Downloads/'><b>Downloads</b><br /><?
$a=mysql_query("select * from dload");
$b=ro($a);
$B=0;
for ($A=0;$A<$b;$A++) {$B+=re($a,$A,'count');}
if ($B!=0) {
 if ($B==1) {echo "<font color='blue'><b>$B</b> Download!";}
 else {echo "<font color='blue'><b>$B</b> total Downloads!";}
}
else {echo "<font color='red'><b>No</b> no Downloads!";}
?></a></p>
</td>

</tr>
</table>
<hr color="#000000" width="100%" align="left" />
<table border="1" height="50" align="left" cellspacing="3" style="border:1px solid dotted" bordercolor="#FFFFFF" cellpadding="3">
<tr>
<?
$dir=path."/admin/";
if (is_dir($dir)) {
if ($dh=opendir($dir)) {
while (($file=readdir($dh))!==false) {
if (filetype($dir.$file)=="dir" && $file!=="." && $file!==".." && $file!=="images" && $file!=="_vti_cnf" && $file!=="_vti_pvt" && $file!=="img") {
if ($file=="Image") {$title="Image Editor";} else if ($file=="Messages") {$title="FeedBack Messages";}
else if ($file=="Editor") {$title="Content Editor";} else if ($file=="Poll") {$title="Opinion Poll";}
else {$title=$file;}
echo "<td width='50' align='center'><a class='body' href='".address."/admin/$file/' title='$title'><img src='".address."/admin/images/home_".strtolower($file).".gif' border='0'><br />$file</a></td>";}
}
closedir($dh);
}
}
?>
</tr>
</table>
</body>
</html>