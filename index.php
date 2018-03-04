<?php
date_default_timezone_set('Asia/Baku');
$posted_at = "2018-1-30 20:36:16"; //now()
include_once('Ago.php');
$ago = new Ago();
$unixTimeStamp = $ago->convertToUnixTimestamp($posted_at);
//echo  date_default_timezone_get();
?>
<div style="width:350px;">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, provident?<br/>
<span style="float:right;font-size:10px;color:gray;">
<?php echo $ago->converToAgoFormat($unixTimeStamp);?>
</span>
</div>