# Sketch Recognition

The approach employed here focuses on the sketches of the objects. The user is expected to input a sketch image. The application identifies the sketch and returns the label and a set of matching images. The detailed working of the proposed system is as follows:

**Step 1**: The colored training images as well as the sketch training images are contained in two different folders on the system.

![image](https://user-images.githubusercontent.com/38344621/146685242-7d8cbb9a-32c3-452a-8ee0-95d32089c632.png)

![image](https://user-images.githubusercontent.com/38344621/146685265-e7d84e23-60c5-43a2-af8d-5a9fdfe41951.png)

**Step 2**: Python programs for extracting the Color, Edge and Contour of the training images are executed and the values obtained are stored in a csv file under respective columns.

![image](https://user-images.githubusercontent.com/38344621/146685282-a2ae9c5e-78ab-40de-b645-3fdcc7e54fcb.png)

**Step 3**: A user interface is provided to the user to choose the preferred algorithm to perform classification. The options provided are K-Nearest 
Neighbors(KNN) and Scale Invariant Feature Transform(SIFT).

![image](https://user-images.githubusercontent.com/38344621/146685315-c7bd71a1-72a3-4019-b4c8-53c705807861.png)

**Step 4**: Once the user chooses the algorithm, the user can upload the sketch image as input.

![image](https://user-images.githubusercontent.com/38344621/146685336-73c18d11-77db-4a88-8b60-8d34ba0883ed.png)

**Step 5**: The python programs run and extract the features containing this input query and stores values in a query image csv file.

![image](https://user-images.githubusercontent.com/38344621/146685348-e208e2bc-32f2-46f8-9f00-5b2d670ff8eb.png)

**Step 6**: The query image csv file and the training dataset csv file are given to the respective algorithm for classification.

**Step 7**: Once the algorithm is done classifying the images, it maps the sketch images to the colored images, retrieves the colored images from the folder and displays 3 related images to the user.

![image](https://user-images.githubusercontent.com/38344621/146685367-8b8e96d3-d5cf-45a3-bbb7-bc5745c0c30d.png)

The performance evaluation metrics show that the KNN algorithm has an accuracy rate of 77% for the considered dataset while SIFT has an accuracy of 51%.
