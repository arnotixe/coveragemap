<?php
//
// dump data in "X Y Z\n" format, suitable for input into gnuplot
//



require "db.php";

$level = $_GET["lvl"];
if ( $level == "") { $level = "1"; }

$build = $_GET["build"];
if ( $build == "") { $build = "1"; }

$ch = $_GET["ch"];
if ( $ch == "") { $ch = "1"; }

// VERY DANGEROUS: mysql injection possible
 $dq = mysql_query("select * from measure where lvl=$level and build=$build and ch=$ch");

 while ($i = mysql_fetch_array($dq)) {
  echo "$i[absx] $i[absy] $i[sig]\n";
 }
 
?>
