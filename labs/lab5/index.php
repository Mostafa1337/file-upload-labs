<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 5 - XSS via Image Upload</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

    <div class="upload-container">
        <h2>Upload Your Image (SVG, JPG, JPEG)</h2>

        <!-- File upload form -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="mustafa" id="file-upload" class="file-upload">
            <label for="file-upload">Choose File</label>
            <span class="file-name" id="file-name">No file chosen</span>
            <input type="submit" value="Upload">
        </form>

        <!-- PHP Code -->
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $image_name = $_FILES['mustafa']['name'];
            $image_temp = $_FILES['mustafa']['tmp_name'];
            $image_type = $_FILES['mustafa']['type'];
            $image_size = $_FILES['mustafa']['size'];

            // Allowed MIME types 
            $allowedTypes = ['image/jpeg', 'image/png', 'image/svg+xml', 'image/jpg'];

            if(isset($_FILES['mustafa']['name'])) {
                // Extract the last extension properly
                $ext1 = explode('.', $image_name);
                $ext = strtolower(end($ext1));

                if (in_array($image_type, $allowedTypes) && in_array($ext, ['jpg', 'jpeg', 'svg'])) {
                    move_uploaded_file($image_temp, "../../uploads/" . $image_name);
                    echo "<p style='color: green;'>Uploaded Successfully!</p>";

                    // Display the uploaded file as an image
                    echo "<img src='../../uploads/$image_name' style='max-width:300px;'><br>";
                    echo "<p>Image Path: <a href='../../uploads/$image_name' target='_blank'>Click Here</a></p>";
                } else {
                    echo "<p style='color: red;'>Only JPG, JPEG, and SVG files are allowed.</p>";
                }
            }
        }
        ?>
    </div>

</body>
</html>
