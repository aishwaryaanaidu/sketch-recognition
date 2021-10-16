# import the necessary pa
import colordescriptors as c
import argparse
import glob
import cv2
import sys
import os
import json
import csv
import random
import math
import operator
import numpy as np
from all_check import insertcsv
from all_check import adj_canny
from all_check import contours
               
# construct the argument parser and parse the arguments

 
# initialize the color descriptor

# open the output index file for writing
 
def get_data(directory):
        #Color
	# extract the image ID (i.e. the unique filename) from the image
	# path and load the image itself
	cd = c.ColorDescriptor((5,4,3))

	image = cv2.imread('data/original.jpg')
	# describe the image
	features = cd.describe(image)
	featuresmean = str(np.mean(features))
	# write the features to file
	#featuresmean = [str(f) for f in featuresmean]


        #Canny-edges

	image1 = cv2.imread('data/original.jpg', 0)
        #gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
	blurred = cv2.GaussianBlur(image1, (3, 3), 0)
 
	# apply Canny edge detection using a wide threshold, tight
	# threshold, and automatically determined threshold
	#wide = cv2.Canny(blurred, 10, 200)
	#tight = cv2.Canny(blurred, 225, 250)
	auto = adj_canny(blurred)
 
	# describe the image
	cannymean = str(np.mean(auto))
	cont = contours('data/original.jpg')
	arr = []
	arr.append(featuresmean)
	arr.append(cannymean)
	arr.append(cont)
	#insertcsv(arr)
	outfile = open('test_data.csv','w')
	out = csv.writer(outfile,delimiter=',', lineterminator='\n')
	out.writerows([arr])
	outfile.close()
	return json.dumps(cont)

if __name__ == "__main__":
    print (get_data(sys.argv[1]))