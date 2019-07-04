<?
require "../admin/conn";
$file=ge("download");
header("location:".address."/ebooks/$file");
$a=mysql_query("select * from dload where name='$file'");
$b=ro($a);
$id=date("U");
echo $file;
if ($b==0) {mysql_query("insert into dload values('$file','0','$id')");}
$init=re(mysql_query("select * from dload where name='$file'"),0,'count');
$init++;
mysql_query("update dload set count='$init' where name='$file'");
?>