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

$h = new \HAPEL\Html();

// Create a new instance of the table builder class.
$s = new \HAPEL\Builder\Stylesheet();

$s->addSelector('body',
    $s->addProp('background', '#ff9800'),
    $s->addProp('color', '#FFF')
);
$s->addSelector('h1',
    $s->addProp('font-size', '50px'),
    $s->addProp('font-family', 'Arial, sans-serif'),
    $s->addProp('text-align', 'center')
);


echo $h->doctype();
echo $h->html();
echo $h->head();
echo $s->get();
echo $h->head(false);
echo $h->body();
echo $h->h1('Hello World!');
echo $h->body(false);
echo $h->html(false);
