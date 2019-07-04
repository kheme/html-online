<?
require "../conn";
val();
if ($_POST) { // This is for sending the newsletter
 if (po('submit')=="Send") {
 head("Newsletter Manager");
 $content=po("content");
 $id=po("id");
 $subject=po("subject");
 $stamp=date("l dS of F Y");
 mysql_query("insert into nl_msg values('sent','$subject','$content','$id','$stamp')");
 $a=mysql_query("select * from nl_sub");
 $b=ro($a);
 for ($c=0;$c<$b;$c++) {
 $name=re($a,$c,'name');
 $email=re($a,$c,'email');
 $headers="MIME-Version: 1.0\r\n";
 $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
 $headers.="From: HTML Online - Newsletter <info@htmlonline.tk>\r\n";
 $headers.="Reply-to: info@htmlonline.tk\r\n";
 $headers.="To: $name <$email>\r\n";
 $body="<p style='font-family:verdana;font-size:11px'>$content</p>";
 $body.="<p style='font-size:10px'>To remove your email address from my mailing list, please <a href='".address."/addemail.php?delete=$email' target='_blank'>click here</a></p>";
 $body=str_replace('$name',"$name",$body);
 $subject=str_replace('$name',"$name",$subject);
 $body=str_replace("\'","'",$body);
 $body=str_replace('\"','"',$body);
 $subject=str_replace("\'","'",$subject);
 $subject=str_replace('\"','"',$subject);
 @mail($email,$subject,$body,$headers);
 }
 echo "<script>alert('Newsletter has been sent to all Newsletter Subscribers!');location.replace('./')</script>";
 }
 else if (po('submit')=="Add/Remove") {
 $a=ucwords(strtolower(po("name")));
 $b=strtolower(po("email"));
 $c=po("opt");
 $d=date("U");
  if ($c=="yes") {
  $A=mysql_query("select * from nl_sub where email='$b'");
   if (ro($A)==0) {
   mysql_query("insert into nl_sub values('$a','$b','$d')");
   red("admin/Newsletter/");
   }
   else {
   head("Newsletter Manager");
   echo "<P align='center'><font color='red'><b>Error:</b> Sorry, $a, is already a subscriber to your newsletter, so you cannot subscribe again.</p><p align='center'><a href='javascript:history.go(-1)'>OK</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php'>Cancel</a></p>";
   }
  }
  else {
  $A=mysql_query("select * from nl_sub where email='$b'");
   if (ro($A)==0) {
   head("Newsletter Manager");
   echo "<p align='center'><font color='red'><b>Error:</b> Sorry, we currently have no records of that email address in our newsletter mailling list!<p align='center'><a href='javascript:history.go(-1)'>OK</a></p>";}
   else {
   mysql_query("delete from nl_sub where email='$b'");
   red("admin/Newsletter/");
   }
  }
 }
}
else if ($_GET) { // This is for handling the list of subscribers or sent newsletters
$get=ge("view");
 if ($get=="delete") { // Deletes newsletters
 $a=$_GET['id'];
 mysql_query("delete from nl_msg where id='$a'");
 red("admin/Newsletter/");
 }
 else if ($get=="sub") { // Creates "Add New Subscriber" interface
 head("Newsletter Manager");
?>
<form method="post">
<table border="0" cellpadding="0" width="75%" cellspacing="5" align="center">
<tr>
<td width="100%" colspan="2">
<p align="center">Use the form below to add/remove a subscriber from the mailing list!</td>
</tr><tr>
<td width="100%" colspan="2">&nbsp;</td>
</tr><tr>
<td width="50%">
<p align="center">Name:
<input onmouseover="this.focus()" onclick="if (this.value==&quot;Your Name&quot;) {this.value=&quot;&quot;}" type="text" name="name" size="12" style="width:150px;font-family: Verdana;font-size: 8pt"></td>
<td width="50%">
<p align="center">Email:
<input onmouseover="this.focus()" onclick="if (this.value==&quot;Your Email&quot;) {this.value=&quot;&quot;}" type="text" name="email" size="12" style="width:150px;font-family:Verdana;font-size: 8pt"></td>
</tr><tr>
<td width="100%" colspan="2">&nbsp;</td>
</tr><tr>
<td width="100%" colspan="2">
<p align="center"><input type="radio" style="border:0px;" value="yes" name="opt" checked>Subscribe&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" value="no" name="opt" style="border:0px;">Unsubscribe</td>
</tr><tr>
<td width="100%" colspan="2">&nbsp;</td>
</tr><tr>
<td width="100%" colspan="2">
<p align="center">
<input name="submit" type="submit" style="width:100px;border:1px outset lightgrey;font-family:verdana;font-size:11px" value="Add/Remove">&nbsp;&nbsp;&nbsp;
<input name="submit" onclick='location.replace("index.php")' type="reset" style="border:1px outset lightgrey;font-family:verdana;font-size:11px" value="Cancel"></td>
</tr>
</table>
</form>
<?
 }
 else if ($get=="del") { // Deletes newsletter subscriber
 $a=$_GET['id'];
 mysql_query("delete from nl_sub where id='$a'");
 red("admin/Newsletter/");
 }
 else if ($get=="send") {
 head("Newsletter Manager");
 $id=ge('id');
 $a=mysql_query("select * from nl_msg where id='$id'");
 $b=re($a,0,'subject');
 $c=re($a,0,'content');
 $d=re($a,0,'id');
 ?>
<form method="POST" name="f" id="edi" onsubmit="return a()">
<script>
function a() {
if (f.subject.value=="") {alert('Please go back and enter a SUBJECT for this Newsletter!');f.subject.focus();return false}
else {f.content.value=_Body_editor.document.body.innerHTML}
}
</script>
<input value="<?=$d;?>" name="id" type="hidden">
Subject: <input name="subject" value="<?=$b;?>" size="30" style="width:150px">
<table border="0" cellpadding="2" style="border-collapse: collapse; font-family: Trebuchet MS; font-size: 10pt" bordercolor="#111111" width="100%">
<tr>
<td width="86%" valign="top">
<? edit("nl_msg","content",$id); ?>
</td>
</tr>
<tr style="display:none">
<td width="86%">
<input type="submit" id="Send" value="Send" name="submit">&nbsp;&nbsp;&nbsp; <input type="button" value="Cancel" onclick="location='index.php'" id="Cancel">
</td>
</tr>
</table>
</form>
<?
 }
 else if ($get=="new") {
 head("Newsletter Manager");
 $c=date("U");
 ?>
<form method="POST" name="f" id="edi" onsubmit="return a()">
<script>
function a() {
if (f.subject.value=="") {alert('Please go back and enter a SUBJECT for this Newsletter!');f.subject.focus();return false}
else {f.content.value=_Body_editor.document.body.innerHTML}
}
</script>
<?
echo "<input value=\"$c\" name=\"id\" type=\"hidden\" size=\"20\">";
?>
Subject: <input name="subject" value="" size="30" style="width:150px">
<table border="0" cellpadding="2" style="border-collapse: collapse; font-family: Trebuchet MS; font-size: 10pt" bordercolor="#111111" width="100%">
<tr>
<td width="86%" valign="top">
<? edit("","",""); ?>
</td>
</tr>
<tr style="display:none">
<td width="86%">
<input type="submit" id="Send" value="Send" name="submit">&nbsp;&nbsp;&nbsp; <input type="button" value="Cancel" onclick="location='index.php'" id="Cancel">
</td>
</tr>
</table>
</form>
<?
 }
 else if ($get=="list") { // This handles the list of subscribers
 head("Newsletter Manager");
 $a=mysql_query("select * from nl_sub order by name");
 $b=ro($a);
?>
<p align="center" style=font-size:10pt><b>Current Newsletter Subscribers</b></p>
<div align="center">
<center>
<table border=1 cellpadding=3 cellspacing=3 style=font-family:Verdana;font-size:8pt;border-collapse:collapse width=70%>
<tr><td><font face=arial><i>Action</i></td><td width=40%><b>Name</b></td><td width=60%><b>e-Mail</b></td></tr>
<?
for ($c=0;$c<$b;$c++) {
$st=re($a,$c,'id');
echo "<tr><td><a onclick=\"if (!confirm('Are you sure you want to delete this subscriber???')) {return false}\"  href='index.php?view=del&id=$st'>Delete</a></td><td>".re($a,$c,'name')."</td><td>".re($a,$c,'email')."</td></tr>";
}
?>
</table>
</center>
</div>
<center><font face=Arial><a href=javascript:history.go(-1)>Back</a>
<?
 exit;
 }
 
 else if ($get=="sent") { // This handles the list of sent newsletters
 head("Newsletter Manager");
 $a=mysql_query("select * from nl_msg where box='sent'");
 $b=ro($a);
?>
<p align="center" style="font-size:10pt"><b>Sent Newsletters</b></p>
<table border="1" width="70%" cellpadding="3" cellspacing="3" style="font-family:Verdana;font-size:8pt;border-collapse:collapse" algin="center" width="10%">
<tr valign="top">
<td width="15%"><i><font face="arial">Action</td>
<td width="55%"><b>Subject</b></td>
<td width="30%"><b>Date</b></td>
</tr>
<?
 for ($c=0;$c<$b;$c++) {
 echo "<tr valign=top><td>
 <a onclick=\"if (!confirm('Are you sure you want to delete this letter???')) {return false}\"  href='index.php?view=delete&id=".re($a,$c,'id')."'>Delete</a>&nbsp;
 <a href='index.php?view=send&id=".re($a,$c,'id')."'>Send</a>&nbsp;
 </td>
 <td>".re($a,$c,'subject')."</td>
 <td>".re($a,$c,'stamp')."</td>
 </tr>";
 }
 echo "</table> <p align='center'><font face=Arial><a href=javascript:history.go(-1)>Back</a></p>";
 }
 
}
else {
head("Newsletter Manager");
$a=mysql_query("select * from nl_sub");
$b=mysql_query("select * from nl_msg where box='sent'");
$c=mysql_query("select * from nl_msg where box='unsent'");
$d=ro($a);
$e=ro($b);
$f=ro($c);
?>
<form method="post">
<table border="1" style="font-size:10pt;font-family:Arial;border-collapse:collapse" cellpadding="3" cellspacing="0" width="80%" bordercolor="#FFFFFF">
<tr>
<td width="25%" align="right" bordercolor="#CCCCCC">
<? if ($d!=0) {echo "<a href='index.php?view=list'>";} ?>
Current Subscribers:<? if ($d!=0) {echo "</a>";} ;?></td>
<td width="75%" bordercolor="#CCCCCC"><?=$d;?>&#160;</td>
</tr><tr>
<td width="25%" align="right" bordercolor="#CCCCCC">
<? if ($e!=0) {echo "<a href='index.php?view=sent'>";} ?>
Newsletters Sent:<? if ($d==0) {echo "</a>";} ;?></td>
<td width="75%" bordercolor="#CCCCCC">
<?=$e;?>&#160;</td>
</tr><tr>
<td width="25%" align="right" bordercolor="#CCCCCC"></td>
<td width="75%" bordercolor="#CCCCCC">
<a href='index.php?view=new'>New Newsletter</a>&nbsp; <a href='index.php?view=sub'>Add/Remove Subscriber</a></td>
</tr>
</table>
</form>
<?
}
botlink();
lab();
?></body></html>