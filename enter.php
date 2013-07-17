<?php

//
// the write-to-database, run from javascript upon data entry sumbission
//

require "db.php";

mysql_query("insert into measure (build,lvl,absx,absy,sig,qual,ch)
values ($_GET[build],$_GET[lvl],$_GET[absx],$_GET[absy],$_GET[sig],$_GET[qual],$_GET[ch])");
system("/var/www/merge/mrgall.sh $_GET[build] $_GET[lvl]");
?>
