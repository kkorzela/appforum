<?php
$dir = 'images/';
$images = glob($dir . '*.png');

if (empty($images)) {
    echo 'Brak obrazków do wyświetlenia.';
} else {
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="Obrazek" /><br />';
    }
}
?>
