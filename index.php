<?php
//
// all-in-one welcome screen and output display. Sorry about the meta refresh hehe
//

require "db.php";

echo "specify GET parameters 'lvl' for floor, 'build' for building. default using 1 for both<br>";

$level = $_GET["lvl"];
if ( $level == "") { $level = "1"; }

$build = $_GET["build"];
if ( $build == "") { $build = "1"; }

echo "<html><head>

<meta http-equiv=\"refresh\" content=\"5\"></head><body>
<h2>Building $build, floor $level</h2>";

$imginfo = getimagesize("in/$build-$level.jpg");
echo "<p>height $imginfo[1], width $imginfo[0] - <a href=\"out.php?build=$build&lvl=$lvl\" target=\"_blank\">OUTPUT</a><br>";


echo"
<a href=\"click.php?img=$build?lvl=$level?h=$imginfo[1]\" target=\"_blank\">
<img ismap src=\"out/$build-$level.jpg\" 
        alt=\"HTML\" border=\"0\"/>
</a>";


?>
