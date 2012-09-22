<?php
/*

>>>>>> CrazyStat <<<<<<
A convenient, comprehensive and free PHP statistic-Script with optional counter.

Copyright (C) 2004-2012  Christopher Kramer

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

E-Mail: webmaster AT christosoft DOT de
Web: http://www.christosoft.de
Version: 1.71

*** src/piechart.php ***
Funktion:    generates pie chart
Aufrufbar:   no
Eingebunden: by src/show_stat.php (as an image)
*/


require_once('config_default.php');
require_once('../usr/config.php');

// set memory-limit
@ini_set('memory_limit', $config_stat_memory_limit . 'M');

session_start();
if(!$config_stat_lang_fix)
 {
 if(isset($_GET['lang']) && is_file('lang/'.basename($_GET['lang']).'.php'))  $_SESSION['lang']=basename($_GET['lang']);
 elseif(isset($_POST['lang']) && is_file('lang/'.basename($_POST['lang']).'.php'))  $_SESSION['lang']=basename($_POST['lang']);
 elseif(isset($_SESSION['lang']) && is_file('lang/'.basename($_SESSION['lang']).'.php'))  ;
 elseif(isset($_COOKIE['CrazyStat_lang']) && is_file('lang/'.basename($_COOKIE['CrazyStat_lang']).'.php'))  $_SESSION['lang']=basename($_COOKIE['CrazyStat_lang']);
 else $_SESSION['lang']=$config_stat_lang;
 setcookie('CrazyStat_lang',$_SESSION['lang'],time()+3600*90);
 $config_stat_lang=$_SESSION['lang'];
 }
require_once('lang/'.$config_stat_lang.'.php');


if(!isset($_GET['modul'])) die(L_MSG_ERR_NO_MODULE.' '.L_MSG_ERR_INCLUDE_ONLY);

if(isset($_GET['size']) && is_numeric($_GET['size'])) $width=$_GET['size'];
else $width=$config_stat_pie_size;
$height=$width;

// anti-aliasing
if(!is_callable('imagecreatetruecolor') || !is_callable('imagecopyresampled')) $anti_alias_factor=1;
else $anti_alias_factor=4;
$orig_width=$width;
$orig_height=$height;
$width*=$anti_alias_factor;
$height*=$anti_alias_factor;


if(!isset($_SESSION['module_'.$_GET['modul'].'_data']))
 {
 header('Content-type: image/png');
 $handle=imagecreate($orig_width,$orig_height);
 $message_color=imagecolorallocate($handle,255,255,255);
 $message_color=imagecolorallocate($handle,255,0,0);
 imagestring($handle,1,1,1,strtoupper(L_MSG_ERR),$message_color);
 imagestring($handle,1,1,15,L_MODULEOUT_NO_DATA,$message_color);
 imagepng($handle);
 imagedestroy($handle);
 exit;
 }
$module_data=$_SESSION['module_'.$_GET['modul'].'_data'];


$slice_colors=$config_stat_pie_colors;
if(!isset($module_data)) $module_data[]=0;

$diagram_img=imagecreate($width,$height);

$height--;
$width--;
$color_background=imagecolorallocate($diagram_img, 255, 255, 255);
$color_border=imagecolorallocate($diagram_img, 0, 0, 0);


imagefilledrectangle($diagram_img,0,0,$width,$height,$color_background);

foreach($slice_colors as $color_id => $color_string)
 {
 $color_rgb=hex2rgb($color_string);
 $slice_colors[$color_id]=imagecolorallocate($diagram_img, $color_rgb[0],$color_rgb[1],$color_rgb[2]);
 }

$gray_shade=0;
$angle=270;    // top mid is 270 deegree, so we start here
$slice_nr=0;
$over360=false; // have we crossed mid right (360 degree) once?
rsort($module_data);

foreach($module_data as $value_abs)
 {
 $value_rel=prozent($value_abs,$_SESSION['module_'.$_GET['modul'].'_total']);    // percentage

 if(!isset($slice_colors[$slice_nr]))
  {
  $gray_shade+=20;
  if($gray_shade>255) $gray_shade=0;
  $slice_colors[$slice_nr]=imagecolorallocate($diagram_img,$gray_shade,$gray_shade,$gray_shade);
  }

 if($angle>360)
  {
  $over360=true;
  $angle-=360;
  }
 $value_degree=round(($value_rel/100)*360);  // degree

 if($value_degree>0 && (!$over360 || $angle+$value_degree<=270))
  {
  // draw pie slice
  @imagefilledarc($diagram_img, round($width/2), round($height/2), $width, $height, $angle, $angle+$value_degree, $slice_colors[$slice_nr],IMG_ARC_EDGED);
  $angle+=$value_degree;
  }
 $slice_nr++;
 }


// Redraw circle (border-width: $anti_alias_factor, so after anti-aliasing it is 1px)
for($i=0; $i<$anti_alias_factor; $i++)
 imagearc($diagram_img, round($width/2), round($height/2), $width-$i, $height-$i, 0, 360, $color_border);

// now do the anti-aliasing
if(is_callable('imagecreatetruecolor') && is_callable('imagecopyresampled'))
 {
 $diagram_img_antaliased=imagecreatetruecolor($orig_width, $orig_height);
 imagecopyresampled($diagram_img_antaliased, $diagram_img, 0, 0, 0, 0, $orig_width, $orig_height, $width+1, $height+1);
 }
else
 {
 // fallback because old gdlib misses essential functions -> do not use anti-aliasing
 $diagram_img_antaliased=imagecreate($orig_width, $orig_height);
 imagecopyresized ($diagram_img_antaliased, $diagram_img, 0, 0, 0, 0, $orig_width, $orig_height, $width+1, $height+1);
 }


header('Content-type: image/png');
imagepng($diagram_img_antaliased);
imagedestroy($diagram_img_antaliased);
imagedestroy($diagram_img);

// convert Hex into RGB
function hex2rgb($hex)
 {
 $rgb[0]=hexdec(substr($hex,1,2));
 $rgb[1]=hexdec(substr($hex,3,2));
 $rgb[2]=hexdec(substr($hex,5,2));
 return($rgb);
 }

// Percentage helper-function
function prozent($part, $total)
 {
 if($total==0) return 100;
 return @$part/$total*100;
 }
?>