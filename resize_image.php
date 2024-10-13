<?php
function resizeImage($source, $display_width, $display_height) {
    // Get image info
    list($original_width, $original_height, $image_type) = getimagesize($source);

    // Create a new image from the source based on its type
    switch ($image_type) {
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($source);
            break;
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($source);
            break;
        case IMAGETYPE_WEBP:
            $image = imagecreatefromwebp($source);
            break;
        default:
            throw new Exception("Unsupported image type");
    }

    // Calculate aspect ratio and new size
    $aspect_ratio = $original_width / $original_height;
    if ($display_width / $display_height > $aspect_ratio) {
        $display_width = $display_height * $aspect_ratio;
    } else {
        $display_height = $display_width / $aspect_ratio;
    }

    // Create a new true color image with the desired size
    $new_image = imagecreatetruecolor($display_width, $display_height);

    // Preserve transparency for PNG and GIF
    if ($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_GIF) {
        imagecolortransparent($new_image, imagecolorallocatealpha($new_image, 0, 0, 0, 127));
        imagealphablending($new_image, false);
        imagesavealpha($new_image, true);
    }

    // Resample the original image into the new image
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $display_width, $display_height, $original_width, $original_height);

    // Set the content type header for WebP
    header('Content-Type: image/webp');

    // Output the resized image as WebP
    imagewebp($new_image, null, 80); // 80 is the quality for WebP, adjust as needed

    // Free memory
    imagedestroy($new_image);
    imagedestroy($image);
}

// Get source, width, and height from the URL parameters
$source = isset($_GET['source']) ? $_GET['source'] : 'default.jpg'; // Provide a default image if none is supplied
$display_width = isset($_GET['width']) ? (int)$_GET['width'] : 800;
$display_height = isset($_GET['height']) ? (int)$_GET['height'] : 400;

// Call the function to resize and output the image
resizeImage($source, $display_width, $display_height);
?>
