<?php
header('Content-Type: application/json');

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo json_encode(['success' => false, 'message' => 'File is not an image.']);
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo json_encode(['success' => false, 'message' => 'File already exists.']);
    $uploadOk = 0;
}

// Check file size (limit to 5MB)
if ($_FILES["profileImage"]["size"] > 5000000) {
    echo json_encode(['success' => false, 'message' => 'Sorry, your file is too large.']);
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo json_encode(['success' => false, 'message' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.']);
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo json_encode(['success' => false, 'message' => 'Sorry, your file was not uploaded.']);
} else {
    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
        // Here you should update the image URL in your database
        // Example: $imageUrl = "uploads/" . basename($_FILES["profileImage"]["name"]);
        // Database connection
        $mysqli = new mysqli("localhost", "username", "password", "database");

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Assuming you have a user ID or some identifier
        $userId = 1; // Replace with actual user ID

        // Update the image path in the database
        $stmt = $mysqli->prepare("UPDATE users SET profile_image = ? WHERE id = ?");
        $stmt->bind_param("si", $targetFile, $userId);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'imageUrl' => $targetFile]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database update failed.']);
        }

       
     

        echo json_encode([
            'success' => true,
            'imageUrl' => $targetFile // Or the URL/path of the uploaded image
        ]);
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Sorry, there was an error uploading your file.']);
    }
    $mysqli->close();
}
?>
