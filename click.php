<?php
//
// show data entry dialog box
//

require "db.php";


// Prepare input variables
//var_dump($_GET);
$getv = preg_split("[\?]", $_GET["img"]);
//var_dump($getv);
$click = preg_split("[,]", $getv[3]);
//var_dump($click);

$absy = substr($getv[2], 2, strlen($getv[2])) - $click[1];

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<script language=\"JavaScript\" type=\"text/javascript\">
    function CloseAndRefresh()
    {
    var oR = new XMLHttpRequest();
    oR.open(\"GET\",\"enter.php?build=" . $getv[0] . "&lvl=" . substr($getv[1], 4, strlen($getv[1])) . 
    "&absx=$click[0]&absy=$absy&sig=\"+document.getElementById('s').value+\"&qual=\"+document.getElementById('q').value+\"&ch=\"+document.getElementById('c').value, false);
    oR.send();

//alert(\"enter.php?build=" . $getv[0] . "&lvl=" . substr($getv[1], 4, strlen($getv[1])) . 
    "&absx=$click[0]&absy=$absy&sig=\"+document.getElementById('s').value+\"&qual=\"+document.getElementById('q').value+\"&ch=\"+document.getElementById('c').value);
    self.close();
    }

    function sv(id,val,e)
    {
      document.getElementById(e.id.substring(0,2)+document.getElementById(id).value).style.backgroundColor=\"\";
      document.getElementById(e.id).style.backgroundColor=\"lightgreen\";
      document.getElementById(id).value=val;
    }
    </script>

</head>
<body>

<h2>Enter measurement data</h2>
for X$click[0]/Y$absy on building $getv[0], floor $getv[1]<br>
Signal strength:
<table border=1 style=\"border-collapse:true;\"><tr>";

for ($a=0; $a<100; $a++) { // create 
 if (($a % 20) == 0) echo "</tr><tr>";
 echo "<td id=ss$a onClick=\"sv('s',$a,this);\">$a</td>\n";
}

echo "</tr></table>
Signal quality:
<table border=1 style=\"border-collapse:true;\"><tr>";

for ($a=0; $a<100; $a++) { // create 
 if (($a % 20) == 0) echo "</tr><tr>";
 echo "<td id=qs$a onClick=\"sv('q',$a,this);\">$a</td>\n";
}

echo "</tr></table>
Channel:
<table border=1 style=\"border-collapse:true;\"><tr>";

for ($a=1; $a<15; $a++) { // create 
 if (($a % 8) == 0) echo "</tr><tr>";
 echo "<td id=cs$a onClick=\"sv('c',$a,this);\">$a</td>\n";
}

echo "</tr></table>
<form name=f1>
<input type=hidden name=x value=$click[0]>
<input type=hidden name=y value=$absy>
<input type=hidden id=s name=sig value=0>
<input type=hidden id=q name=qual value=0>
<input type=hidden id=c name=ch value=0>
</form>";


// echo "Img height " . substr($getv[2], 2, strlen($getv[2])) . ", clicky $click[1] = absx $click[0]/absy $absy";


?>

<input type="button" value="Enter" onClick="CloseAndRefresh();">
    


