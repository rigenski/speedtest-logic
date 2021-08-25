<?php
session_start();
header("Content-type: image/png");

$img = imagecreate(120, 40);
imagecolorallocate($img, 204, 204, 204);

$color = imagecolorallocate($img, 64, 64, 64);

$rand_text = "";
for($i = 1; $i <= 4; $i++) {
    $src = imagecreate(20, 20);
    imagecolorallocate($src, 204, 204, 204);

    $rand = md5(rand());
    $text = substr($rand, 0, 1);
    imagestring($src, 5, 5, 0, $text, $color);

    $angle = rand(10, 60);
    $src = imagerotate($src, $angle, 0);
    $x = $i * 20;
    $y = rand(5, 15);
    imagecopy($img, $src, $x, $y, 0, 0, 20, 20);

    $rand_text .= $text;
}

for($i = 1; $i <= 4;$i++) {
    imageline($img, 0, rand() % 50, 200, rand() % 50, $color);
}

for($i = 1; $i <= 200; $i++) {
    imagesetpixel($img, rand() % 200, rand() % 50, $color);
}

$_SESSION['key'] = $rand_text;

imagepng($img);