coveragemap
===========

Tool for quick hacking a coverage map for various data

The idea is:

1) base maps   -> in/ folder, named <building>-<floor>.jpg
1,5) to startup, copy the maps from in/ to out/

2) go to http://localhost/?build=1&lvl=1
2.5) a map from out/ is shown
3) click on a spot in the map, opens a data entry popup
4) enter data for that point

5) the data is entered into a mysql database
 - the data selection can be tuned to g

6) output coverage/heat map is generated with gnuplot
 - the color gradient can be customized
 - the smoothing can be customized
 - contour lines can be turned on/off
7) coverage map is merged on top/bottom of the building map, to output

output maps -> out/ folder, named <building>-<floor>.jpg


FEATURES
This is a client/server-model, making it possible to collect data from various sources 
Hacking the database it's easily extendable.

TODO
security (mysql injection)
output generation
easier input pictures management
portability


<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
Bear with me, this is a very quick hack
