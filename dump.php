<?php

//
// dump data in "human readable" format.
//

require "db.php";

$level = $_GET["lvl"];
if ( $level == "") { $level = "1"; }

$build = $_GET["build"];
if ( $build == "") { $build = "1"; }

echo "<html><head><meta http-equiv=\"refresh\" content=\"5\"></head><body>
specify GET parameters 'lvl' for floor, 'build' for building. default using 1 for both<br>";

// VERY DANGEROUS: mysql injection possible
 $dq = mysql_query("select * from measure where lvl=$level and build=$build");

 while ($i = mysql_fetch_array($dq)) {
  echo "$i[ix]: Build $i[build] floor $i[lvl] at X$i[absx]/Y$i[absy]: SIG $i[sig] QUAL $i[qual] at CHAN $i[ch]<br>";
 }
 
echo "</body></html>";
?>
