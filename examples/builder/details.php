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
 * @subpackage Examples\Builder\Details
 *
 * Shows usage examples for the HAPEL Builder Details class.
 *
 * @since 0.3.0
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the video builder class.
$d = new \HAPEL\Builder\Details();

// Output the details code.
echo $d->details('Click Me', 'I am hidden until clicked.');


// Start with details open.
echo $d->details('Click Me', 'I am already open.', true);


// Add a wrapper to the details content.
echo $d->details('Click Me', '<p>I am a paragraph.</p><p>So am I.</p>');


// Add a class.
echo $d->details('Click Me', 'I now have a class.', false, 'myclass');

