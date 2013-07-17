#!/bin/bash
# Get the nth best of two files compared
c=0
a=""
while read i; do
# echo -n $i;
 if [ "`echo $i|grep -o .*:`" == "$a" ]; then
  let c=c+1;
#  echo $a like c=$c;
  if [ $c -eq $1 ] ; then
#   echo break point output coords and $i here
   echo $i
  fi
 else
  c=0;
#  echo $a unlike c=$c;
  a=`echo $i|grep -o .*:`;
 fi;
done < outmix.txt
