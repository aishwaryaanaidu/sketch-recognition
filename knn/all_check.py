import csv
import random
import math
import operator
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
       

def insertcsv(arr):
                with open('out.csv', 'w') as csvfile:
                    writer = csv.writer(csvfile, delimiter=',')
                    for line in arr:
                        writer.writerow(line)
                    

def loadDataset(filename, trainingSet=[]):
                with open(filename, 'r') as csvfile:
                    lines = csv.reader(csvfile)
                    dataset = list(lines)
                    for x in range(len(dataset)-1):
                        for y in range(2):
                            dataset[x][y] = float(dataset[x][y])
                        trainingSet.append(dataset[x])
                    
def loadTestset(filename, testSet=[]):
                with open(filename, 'r') as csvfile:
                        lines = csv.reader(csvfile)
                        dataset = list(lines)
                        for x in range(len(dataset)):
                                for y in range(2):
                                    dataset[x][y] = float(dataset[x][y])
                                testSet.append(dataset[x])

def euclideanDistance(instance1, instance2, length):
                distance = 0
                for x in range(length):
                        distance += pow((float(instance1[x]) - float(instance2[x])), 2)
                return math.sqrt(distance)

def getNeighbors(trainingSet, testInstance, k):
                distances = []
                length = len(testInstance)
                for x in range(len(trainingSet)):
                        dist = euclideanDistance(testInstance, trainingSet[x], length)
                        distances.append((trainingSet[x], dist))
                distances.sort(key=operator.itemgetter(1))
                neighbors = []
                for x in range(k):
                        neighbors.append(distances[x][0])
                return neighbors

def getResponse(neighbors):
                classVotes = {}
                for x in range(len(neighbors)):
                        response = neighbors[x][-1]
                        if response in classVotes:
                                classVotes[response] += 1
                        else:
                                classVotes[response] = 1
                sortedVotes = sorted(classVotes.items(), key = operator.itemgetter(1), reverse=True)
                return sortedVotes[0][0]
