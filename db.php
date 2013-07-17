<?php
//
// database connectivity
//

$dbc = mysql_connect("localhost", "cover", "coverpass") or die (mysql_error());

$db = mysql_select_db("cover") or die (mysql_error());

mysql_set_charset('utf8', $dbc);

/*
mysql> desc measure;
+-------+---------+------+-----+---------+----------------+
| Field | Type    | Null | Key | Default | Extra          |
+-------+---------+------+-----+---------+----------------+
| ix    | int(11) | NO   | PRI | NULL    | auto_increment |
| build | int(11) | YES  |     | NULL    |                |
| lvl   | int(11) | YES  |     | NULL    |                |
| absx  | int(11) | YES  |     | NULL    |                |
| absy  | int(11) | YES  |     | NULL    |                |
| sig   | int(11) | YES  |     | NULL    |                |
| qual  | int(11) | YES  |     | NULL    |                |
| ch    | int(11) | YES  |     | NULL    |                |
+-------+---------+------+-----+---------+----------------+
8 rows in set (0.00 sec)
*/
?>

