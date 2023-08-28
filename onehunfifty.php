<!DOCTYPE html>
<html>
<head>
    <title>Image Buttons</title>
    <style>
        body {
            padding: 20px; /* Add space around the site */
        }
        
        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px; /* Add space between the images and the rest of the content */
        }

        .image-button {
            display: inline-block;
            margin: 10px; /* Add padding around each image button */
        }

        .image-button img {
            width: 200px; /* Set the width of the image */
            height: 200px; /* Set the height of the image */
        }
    </style>
</head>
<body>
    <div class="image-container">
    <?php
    // Array of image filenames
    $imageFilenames = array('image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg', 'image/image1.jpg');

    // Loop through the image filenames
    for ($i = 0; $i < count($imageFilenames); $i++) {
        // Display each image as a button
        echo '<a href="pay.php?image=' . $imageFilenames[$i] . '" class="image-button"><img src="' . $imageFilenames[$i] . '" alt="Image"></a>';

        // Insert a line break after every 4 images
        if (($i + 1) % 4 === 0) {
            echo '<br>';
        }
    }
    ?>
    </div>
</body>
</html>
