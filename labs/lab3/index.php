
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 3</title>
   <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

    <div class="upload-container">
        <h2>Upload Your File</h2>

        <!-- File upload form -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <input type="file" name="mustafa" id="file-upload" class="file-upload">
            <label for="file-upload">Choose File</label>
            <span class="file-name" id="file-name">No file chosen</span>
            <input type="submit" value="Upload">
        </form>






        <!-- PHP code  -->
        <?php
        

        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $image_name = $_FILES['mustafa']['name'];
            $image_temp = $_FILES['mustafa']['tmp_name'];
            $image_type = $_FILES['mustafa']['type'];
            $image_size = $_FILES['mustafa']['size'];

            // Allowed MIME types
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];

            // Allowed extensions
            $ext1 =explode('.', $image_name);
            $ext= strtolower($ext1[1]);


            if(isset($_FILES['mustafa']['name'])&& in_array($image_type,$allowedTypes)){
                
                if(preg_match('/^(jpg|jpeg|png|gif)/i',"$ext")){
                    move_uploaded_file($image_temp,"../../uploads/".$image_name) ;
                    echo "Uploaded Sucessfully <br>";
                }else{
                    echo "Extention not allowed";
                }
                
            }else{
                echo "<h2><div style='color: #e74c3c; font-size: 14px; margin-top: 15px; text-align: center;'>File type is not allowed.</div></h2>";

            }
        
        }


        ?>
    </div>

</body>
</html>











