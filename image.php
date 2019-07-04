<?
require "admin/conn";
Header("Content-type: image/gif"); 
if ($_GET['id']=="1") $string="kheme@htmlonline.tk";
else if ($_GET['id']=="2") $string="kheme@msn.com";
else if ($_GET['id']=="3") $string="+905338483788";
else $string=$_GET["id"];
$font=2; 
$width=ImageFontWidth($font)* strlen($string); 
$height=ImageFontHeight($font); 
$im = ImageCreate($width,$height); 
$x=imagesx($im)-$width ; 
$y=imagesy($im)-$height; 
$background_color=imagecolorallocate ($im, 242, 242, 242);
$text_color=imagecolorallocate ($im, 0, 0,0);
$trans_color=$background_color;
imagecolortransparent($im, $trans_color); 
imagestring($im, $font, $x, $y,  $string, $text_color); 
imagegif($im); 
ImageDestroy($im); 
?> 