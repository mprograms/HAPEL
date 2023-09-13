<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 *
 * HAPEL Stylesheet Builder Class Example
 *
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the Stylesheet builder class.
$s = new \HAPEL\Builder\Stylesheet();


// Add a selector and properties.
$s->addSelector('body',
    $s->addProp('background', '#ff9800'),
    $s->addProp('color', '#FFF')
);

$s->addSelector('h1',
    $s->addProp('font-size', '50px'),
    $s->addProp('font-family', 'Arial, sans-serif'),
    $s->addProp('text-align', 'center')
);


// Get the created code.
echo $s->get();

