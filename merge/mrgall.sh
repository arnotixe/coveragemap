#!/bin/bash
cd `dirname $0`
for i in {0..13}; do wget -O dataget$i.txt "http://localhost/dump2.php?build=$1&lvl=$2&ch=$i"; done
cat header dataget*.txt > data.txt
gnuplot real
composite ../in/${1}-$2.jpg -blend 25% real.gif ../out/${1}-$2.jpg
#eog out.jpg;
