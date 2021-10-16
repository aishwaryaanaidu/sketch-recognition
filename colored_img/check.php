import sys
import os
import json

def get_home_file_path(directory):
	dir_path = []
	for root,dirs,file in os.walk(directory):
		dir_path.append(os.path.join(root,name))
	
	return json.dumps(dir_paths)

if __name__ == "__main__":
	print get_home_file_path(sys.argv[1])
