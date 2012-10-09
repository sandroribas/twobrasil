<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
 
$username = "sandroribas"; 
 
$readurl = "http://twitter.com/statuses/user_timeline/".$username.".json"; 
 
$rdata = json_decode(file_get_contents($readurl)); 
 
## echo "<pre>\r\n"; 
## print_r($rdata); 
## echo "</pre>\r\n"; 
 
function url2link ($string, $target="_blank") {
 
preg_match_all('|(http://[^\s]+)|', $string, $matches1);
if($matches1) { 
foreach($matches1[0] as $match1) { 
$hypertext = "<a href=\"".$match1."\" target=\"".$target."\"><strong>".$match1."</strong></a>";
$string = str_replace($match1, $hypertext, $string);
}
}
 
preg_match_all('|(@[^\s]+)|', $string, $matches2);
if($matches2) { 
foreach($matches2[0] as $match2) { 
$hypertext = "<a href=\"http://twitter.com/".$match2."\" target=\"".$target."\"><strong>".$match2."</strong></a>";
$string = str_replace($match2, $hypertext, $string);
}
}
 
return $string;
}
 
 
 
 
foreach($rdata as $ritem) { 
 
$showtext = $ritem->text; 
 
$showtext = utf8_decode($showtext); 
$showtext = url2link($showtext); 
 
$status_timestamp = strtotime($ritem->created_at); 
$status_locdate = date("Y-m-d (H:i:s)",$status_timestamp); 
 
 
echo "<p style=\"text-align:left; width:570px; clear:both;\">\r\n"; 
echo "<a href=\"http://twitter.com/".$ritem->user->screen_name."\" title=\"".$ritem->user->name."\" target=\"_blank\"><img src=\"".$ritem->user->profile_image_url."\" alt=\"".$ritem->user->name."\" align=\"left\" width=\"48\" height=\"48\" border=\"0\" style=\"padding:10px 8px 2px 0px;\" /></a>\r\n"; 
echo " <a href=\"http://twitter.com/".$ritem->user->screen_name."\" title=\"".$ritem->user->name."\" target=\"_blank\"><strong style=\"font-size:140%;\">".$ritem->user->screen_name."</strong></a> &nbsp;&nbsp; ".$ritem->user->name." \r\n"; 
echo "<span style=\"padding:0px 12px 0px 0px; float:right;\">".$status_locdate."</span>\r\n"; 
echo "<br />\r\n"; 
echo "<span style=\"display:block; margin:2px 0px 2px 54px; padding:6px; background:#DEDEDE; color:#000000;\">".$showtext."</span>\r\n"; 
echo "<br />&nbsp;\r\n"; 
echo "</p>\r\n"; 
 
 
} 
?>
</body>
</html>