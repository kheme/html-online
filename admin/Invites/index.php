<?
require "../conn";
val();
if (!$_POST && !$_GET || isset($_POST['user']) || isset($_POST['pass'])) {
head("Invites Manager");
?>
<form method="POST" name="f" action="index.php">
<table border="0" cellspacing="3" width="100%" style="border-collapse: collapse; font-size:11px" cellpadding="3">
<tr>
<td width="100%" align="center" valign="top" colspan="2">
<div style="display:none">
<input type="submit" value="New Message" onclick="" name="submit" style="width:80" class="text" id="New"><input type="submit" id="Delete" onclick="if (!confirm('Are you sure you want to perform this action???')) {return false}" value="Delete" name="submit"><input type="submit" value="View" name="submit" class="text" style="width:80" id="View">
</div>
</td>
</tr><tr>
<td width="30%" align="left" valign="top">
<? $a=mysql_query("select * from iv order by id");$b=ro($a); ?>
<b>Total Registered Members (<?=$b;?>)</b><br /><select id='id' size="10" name="id" style="font-family:Verdana;font-size:11px;width:300" onchange='Num.innerText=this.options[this.options.selectedIndex].id' onkeydown="if (event.keyCode==13) {form.View.click();} else if (event.keyCode==46) {form.Delete.click()}" ondblclick="form.View.click()">
<?
for ($c=0;$c<$b;$c++) {
$id=re($a,$c,'id');
$name=re($a,$c,'name');
$date=re($a,$c,'email');
echo "<option value='$id' id='$date'>$name</option>\n";
}
?>
</select><br /><img border="0" style="cursor:hand" src="../images/delete.gif" onclick="f.Delete.click()" alt="Delete Selected Editable" width="16" height="16">&nbsp;
<img border="0" style="cursor:hand" src="../images/view.gif" width="16" height="16" onclick="f.View.click()" alt="View Member Of Selected Students">&nbsp;
</td>
<td width="70%" align="left" valign="top"><b>Email:</b><div align='left' id='Num'>&nbsp;</div></td>
</tr>
</table>
</form>
<p>&nbsp;</p>
<?
}
if ($_POST) {
$post=po("submit");
 if ($post=="New Message") {
 head("Invites Manager");
?>
<form method="POST">
<table border="0"  cellpadding="2" style="font-family: Verdana; font-size: 10pt" bordercolor="#F7F7F7" width="100%">
<caption>Compose New Message</caption>
<tr>
<td width="95" valign="top">
<p align="right"><b>Subject: </b> </td>
<td><input type="text" onmouseover="this.focus()" style="width:200px" name="subject" size="20" class="in"></td>
</tr><tr>
<td width="95" valign="top">
<p align="right"><b>Message: </b> </td>
<td><?=edit("","","");?>&nbsp;</td>
</tr><tr>
<td width="95" valign="top"></td>
<td><input type="submit" value="Send" name="submit">
<input onclick="location='index.php'" type="button" value="Cancel" id="Cancel" name="submit"></td>
</tr>
</table>
</form>
<?
 }
 else if ($post=="Delete") { // For DELETE NC member
 head("Invites Manager");
 if (isset($_POST['id'])) {$_POST['total']=po("id").",";}
 if (!isset($_POST['total']) || @po("total")=="") {
 echo "Please go back and select a member to delete!<p><form method='post'>";
 echo "<input type='button' value='OK' onclick=\"location='index.php'\"></form>";
 botlink();
 lab();
 echo "</body></html>";
 exit; 
 }
 $delete=po("total");
 $delete=substr($delete,0,-1);
 $delete=split(";",$delete);
 $count=count($delete);
 $deleted="";
 for ($a=0;$a<$count;$a++) {
 $d=mysql_query("select * from iv where id='$delete[$a]'");
 $deleted.=re($d,0,'name')." <img src='".address."/images/unsent.gif'><br />";
 mysql_query("delet from iv where id='$delete[$a]'");
 }
 echo "<input type='button' value='OK' onclick=\"location='index.php'\"><p>Successfully deteted the following members from database:</p><p>$deleted</p><p><input type='button' value='OK' onclick=\"location='index.php'\">";
 }
 else if ($post=="View") {
 head("Invites Manager");
 $a=mysql_query("select * from iv order by id");
 $b=ro($a);
?>
<script>
function cn(I) {
if (form.total.value.indexOf(I)==-1) {form.total.value=form.total.value+I+";"}
else {form.total.value=form.total.value.replace(I+",","")}
}
</script>
<form method="POST" name="form" action="index.php">
<input name="total" value="" type="hidden" size="20">
<input value='OK' type='button' onclick='location.replace("index.php")'><input value='Delete' id="Delete" style="display:none" name="submit" type='submit'></form>
<table width="808" style="border:1px outset #fcfcfc;" cellpadding="2" cellspacing="2" height="39">
<tr style="font-weight:bold">
<td width="76" height="13">
<p align="center">
<img border="0" onclick="if (confirm('Are you sure you want to delete the selected member(s)???')) {form.Delete.click()} else {return false}" style="cursor:hand" alt="Delete selected member(s)" src="../images/delete.gif" width="16" height="16"></td>
<td width="165" height="13">Name</td>
<td width="545" height="13">Email</td>
</tr>
<?
  for ($c=0;$c<$b;$c++) {
  $name=re($a,$c,"name");
  $id=re($a,$c,"id");
  $email=re($a,$c,"email");
  echo "<tr>
<td align='center' width='76'><input type='checkbox' onclick='cn(this.value)' style='width:;border:0xp' name='delete' value='$id'></td>
<td width=/165'><a href='?edit=$id'>$name</a></td><td width='545'><a href='../Messages/index.php?id=$email&name=$name&from=&subject='>$email</a></td></tr>";
  }
  echo "<tr>
<td align='center' width='76'>
<img border='0' onclick=\"if (confirm('Are you sure you want to delete the selected member(s)???')) {form.Delete.click()} else {return false}\" style='cursor:hand' alt='Delete selected member(s)' src='../images/delete.gif' width='16' height='16'></td>
<td colspan='2' width='716'>&nbsp;</td></tr></table><p><input value='OK' type='button' onclick='location.replace(\"index.php\")'></p><p>&nbsp;</p>";
 }
}
botlink();
lab();
?></body></html>