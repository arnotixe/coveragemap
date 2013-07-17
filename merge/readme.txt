# convert real.gif out.txt
## actually dumps all pixels to out.txt in the format x,y,color :)
# 0,0: (174,174,174)  #AEAEAE  rgb(174,174,174)

1) download each file and gnuplot in grayscale (gnuplot data)
2) convert each to .txt
3) cat all.txt |sed 's/\([0123456789]*.[0123456789]*...[0123456789]*\).*/\1/'|sort -r >mixt.txt
4) now read it and choose only every 2nd after x changed ;) or 3rd, if 2-loss is wanted
5) the resulting file has 000..255 as intensity and can be fed back into gnuplot, or divided back to 100



So it can be sed'ed

then cat'ed together with others, and the 2nd or 3rd best can be grepped out (I think)

