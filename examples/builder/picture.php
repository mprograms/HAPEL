<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 * @copyright 2018 MRittman
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @subpackage Examples\Builder\Picture
 *
 * Shows usage examples for the HAPEL Builder Picture class.
 *
 * @since 0.3.0
 */


error_reporting(E_ALL);
ini_set('display_errors', '1');

// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the picture builder class.
$p = new \HAPEL\Builder\Picture();


// Set the src value for basic setup.
$p->setImg('photo.jpg');

// Output the generated code.
echo $p->get();



// Set the source value.
$p->setSource('photo.jpg', '(min-width: 650px)');

// Output the generated code.
echo $p->get();



// Unset the source.
echo $p->unsetSources();


// Set two sources with media parameter as an array.
$p->setSource('photo.jpg', ['min-width'=>'0px', 'max-width'=>'800px']);
$p->setSource('photo.jpg', ['min-width'=>'801px', 'max-width'=>'1600px']);


// Output the generated code.
echo $p->get();


// Output the generated code with a class and id.
echo $p->get('my-class', 'my-id');