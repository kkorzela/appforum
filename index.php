<?php
$dir = 'images-app/';
$images = glob($dir . '*.jpg');

if (empty($images)) {
    echo 'Brak obrazków do wyświetlenia.';
} else {
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="Obrazek" /><br />';
    }
}
?>
