<?php


namespace HAPEL;

$classes = array(

    '/builder/audio.php',
    '/builder/canvas.php',
    '/builder/details.php',
    '/builder/form.php',
    '/builder/lists.php',
    '/builder/imagemap.php',
    '/builder/picture.php',
    '/builder/table.php',
    '/builder/stylesheet.php',
    '/builder/video.php',
);

foreach ($classes as $class) {
    require_once __DIR__ . $class;
}