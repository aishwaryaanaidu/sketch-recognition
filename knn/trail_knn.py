#!C:\Users\Arvin\AppData\Local\Programs\Python\Python37\python.exe
# Example of kNN implemented from Scratch in Python
print("Content-Type: text/html; charset=utf-8\n\n")
print()

import sys
import os
import json
import csv
import random
import math
import operator
from all_check import loadDataset
from all_check import loadTestset
from all_check import euclideanDistance
from all_check import getNeighbors
from all_check import getResponse

def get_home_file_path(directory):
    trainingSet=[]
    testSet=[]
    loadDataset('index.csv', trainingSet)
    loadTestset('test_data.csv', testSet)
    predictions=[]
    result = []
    k = 3
    for x in range(len(testSet)):
        neighbors = getNeighbors(trainingSet, testSet[x], k)
        result = getResponse(neighbors)
        predictions.append(result)
    
    return json.dumps(neighbors)

if __name__ == "__main__":
    print (get_home_file_path(sys.argv[1]))
               
        


