import sys
import os
import json

def get_home_file_path(directory):
	dir_path = [1,2,1,3,4]
	return json.dumps(dir_path)

if __name__ == "__main__":
    print (get_home_file_path(sys.argv[1]))
