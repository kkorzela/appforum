<?php
session_start();

$dir = 'images/';
$images = glob($dir . '*.jpg');

if (empty($images)) {
    echo 'Brak obrazków do wyświetlenia.';
} else {
    $currentIndex = isset($_SESSION['current_index']) ? $_SESSION['current_index'] : 0;
    $currentImage = $images[$currentIndex];

    echo '<img src="' . $currentImage . '" alt="Obrazek" /><br />';
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="current_index" value="' . $currentIndex . '" />';
    echo '<input type="submit" name="next_image" value="Następny obrazek" />';
    echo '</form>';

    if (isset($_POST['next_image'])) {
        $nextIndex = ($currentIndex + 1) % count($images);
        $_SESSION['current_index'] = $nextIndex;
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>
