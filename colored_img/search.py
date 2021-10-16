# import the necessary pa
import colordescriptors as c
import argparse
import glob
import cv2
import numpy as np

def adj_canny(image, sigma=0.33):
	#compute the median of the single channel pixel intensities
	image = np.asarray(image)
	v = np.median(image)
 
	lower = int(max(0, (1.0 - sigma) * v))
	upper = int(min(255, (1.0 + sigma) * v))
	edged = cv2.Canny(image, lower, upper)
 
	# return the edged image
	return edged

def contours(image):
        im = cv2.imread(image)
        imgray = cv2.cvtColor(im, cv2.COLOR_BGR2GRAY)
        thresh1 = adj_canny(imgray)
        ret, thresh = cv2.threshold(imgray, 127, 255, 0)
        #find contours
        _,contours, hierarchy = cv2.findContours(thresh1, cv2.RETR_TREE, cv2.CHAIN_APPROX_SIMPLE)
        #draw contours
        #cnt = contours[4]
        cv2.drawContours(im, contours, -1, (0,255,0), 3)
        #cv2.imshow('image', im)
        op = np.mean(im)
        return op
       
        
 
# construct the argument parser and parse the arguments
ap = argparse.ArgumentParser()
ap.add_argument("-d", "--dataset", required = True,
	help = "Path to the directory that contains the images to be indexed")
ap.add_argument("-i", "--index", required = True,
	help = "Path to where the computed index will be stored")
args = vars(ap.parse_args())
 
# initialize the color descriptor
cd = c.ColorDescriptor((5,4,3))

# open the output index file for writing
output = open(args["index"], "w")
 
# use glob to grab the image paths and loop over them
for imagePath in glob.glob(args["dataset"] + "/*.jpg"):
        #Color
	# extract the image ID (i.e. the unique filename) from the image
	# path and load the image itself
	imageID = imagePath[imagePath.rfind("/") + 1:]
	image = cv2.imread(imagePath)
 
	# describe the image
	features = cd.describe(image)
	featuresmean = str(np.mean(features))
 
	# write the features to file
	#featuresmean = [str(f) for f in featuresmean]


        #Canny-edges

	image1 = cv2.imread(imagePath, 0)
        #gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
	blurred = cv2.GaussianBlur(image1, (3, 3), 0)
 
	# apply Canny edge detection using a wide threshold, tight
	# threshold, and automatically determined threshold
	wide = cv2.Canny(blurred, 10, 200)
	tight = cv2.Canny(blurred, 225, 250)
	auto = adj_canny(blurred)
 
	# describe the image
	cannymean = str(np.mean(auto))
	cont = contours(imagePath)
	x = imageID.split("\\")
	
	output.write("%s,%s,%s,%s\n" % (str(featuresmean),str(cannymean), str(cont),x[1]))
 
# close the index file
output.close()
