#!/bin/bash
echo "var fuzzdata = ["
for i in *.gif; do
	siz=$(identify $i[0] | cut -d " " -f 3)
	w=$(echo $siz | cut -d x -f 1)
	h=$(echo $siz | cut -d x -f 1)
echo "{ 'fn': 'static/fuzz/$i', 'w': $w, 'h': $h }, "
done
echo "];"
