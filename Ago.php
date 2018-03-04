<?php

class Ago
{
  public function convertToUnixTimestamp($value)
  {
    
    list($date,$time) = explode(" ",$value);
    list($year,$month,$day) = explode("-",$date);
    list($hour,$minutes,$seconds) = explode(':',$time);
    $unit_timestamp = mktime($hour,$minutes,$seconds,$month,$day,$year);
    return $unit_timestamp;
  }

  public function converToAgoFormat($timestamp)
  {
    
    $diffTime = time() - $timestamp;
    $periodsString = ["second","min","hr","day","week","month","year"];
    $periodsNumber = ["60","60","24","7","4.35","12","1000"];
    for($iterator = 0;$diffTime >= $periodsNumber[$iterator];$iterator++)
  
      $diffTime /= $periodsNumber[$iterator];
      
      $diffTime = round($diffTime);
      
  
      if($diffTime != 1) $periodsString[$iterator].="s";
      $output = "$diffTime $periodsString[$iterator]";
      return "Posted <b>".$output."</b> ago";
  
  }
}