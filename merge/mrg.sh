#!/bin/bash
cd `dirname $0`
wget -O dataget$1.txt "http://localhost/dump2.php?build=1&lvl=1&ch=$1"
cat header dataget$1.txt > data.txt
gnuplot real
composite image.jpg -blend 25% real.gif out.jpg
eog out.jpg
