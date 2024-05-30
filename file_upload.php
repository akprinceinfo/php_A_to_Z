<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3>Upload an image (PNG or JPG):</h3>
        <input type="file" name="image" accept="image/png, image/jpeg"><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>


<?php 
                    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                        $file = $_FILES['image'];
                        $fileName = $file['name'];
                        $fileTmpName = $file['tmp_name'];
                        $fileSize = $file['size'];
                        $fileType = $file['type'];
                
                        // Allowed file types
                        $allowedTypes = ['image/png', 'image/jpeg'];
                
                        // Check if the file type is allowed
                        if (in_array($fileType, $allowedTypes)) {
                            // Check if the file is actually an image
                            $fileInfo = getimagesize($fileTmpName);
                            if ($fileInfo !== false) {
                                // Validate file size (example: max 2MB)
                                $maxFileSize = 2 * 1024 * 1024; // 2MB in bytes
                                if ($fileSize <= $maxFileSize) {
                                    // Sanitize the file name
                                    $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "", basename($fileName));
                                    $uploadDir = 'uploads/';
                                    $fileDestination = $uploadDir . $fileName;
                
                                    // Create upload directory if it doesn't exist
                                    if (!is_dir($uploadDir)) {
                                        mkdir($uploadDir, 0777, true);
                                    }
                
                                    // Move the file to the destination
                                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                                        echo "File uploaded successfully.";
                                    } else {
                                        echo "Error moving the uploaded file.";
                                    }
                                } else {
                                    echo "File size exceeds the maximum limit of 2MB.";
                                }
                            } else {
                                echo "File is not a valid image.";
                            }
                        } else {
                            echo "Invalid file type. Only PNG and JPG are allowed.";
                        }
                    } else {
                        echo "Error uploading the file.";
                    }
                    ?>