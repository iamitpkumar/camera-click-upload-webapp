<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["imageData"])) {
    $targetDir = "uploads/"; // Create an "uploads" directory in the same folder as your PHP file.
    $imageData = $_POST["imageData"];
    $data = explode(",", $imageData);
    $imageData = base64_decode($data[1]);

    // Generate a unique filename
    $targetFile = $targetDir . uniqid() . ".jpg";

    // Save the image to the target directory
    if (file_put_contents($targetFile, $imageData)) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image.";
    }
}
?>
