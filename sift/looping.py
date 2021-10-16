import numpy as np
import glob
import sys
import cv2
import os
import json
import operator
from matplotlib import pyplot as plt


def get_data(directory):

    MIN_MATCH_COUNT = 10

    img1 = cv2.imread('data/original.jpg',0) #queryImage

    # Initiate SIFT detector
    sift = cv2.xfeatures2d.SIFT_create()

    # find the keypoints and descriptors with SIFT
    kp1, des1 = sift.detectAndCompute(img1,None)

    FLANN_INDEX_KDTREE = 0
    index_params = dict(algorithm = FLANN_INDEX_KDTREE, trees = 5)
    search_params = dict(checks = 5)

    flann = cv2.FlannBasedMatcher(index_params, search_params)

    all_images_to_compare = []
    allmatches={}
    titles = []
    for f in glob.iglob("database\*"):
        image = cv2.imread(f)
        titles.append(f)
        all_images_to_compare.append(image)
    for image_to_compare, title in zip(all_images_to_compare, titles):
        kp2, des2 = sift.detectAndCompute(image_to_compare,None)
        matches = flann.knnMatch(des1,des2,k=2)

        # store all the good matches as per Lowe's ratio test.
        good = []
        #print(matches)
        for m,n in matches:
            if m.distance < 0.7*n.distance:
                good.append(m)
        '''allmatches.append(good)
    best=allmatches.sort()
    for i in best:
        print(i)
    print(type(allmatches))'''
        if len(good)>0:
            #print("Enough matches are found - %d" % (len(good)))
            #print(title)
            allmatches[title]=len(good)
            

    sorted_d = sorted(allmatches.items(),key = operator.itemgetter(1), reverse=True)
    arr = []
    for s in sorted_d[:3]:
        arr.append(s[0])
        #cv2.imshow('Output',s[0])
    arr1 = []
    for x in arr:
        y = x.split("\\")
        arr1.append(y)
    return json.dumps(arr1)

if __name__ == "__main__":
    print (get_data(sys.argv[1]))