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
 * @subpackage Examples\Builder\Video
 *
 * Shows usage examples for the HAPEL Builder Video class.
 *
 * @since 0.3.0
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the video builder class.
$v = new \HAPEL\Builder\Video();


// Set optional parameters.
$v->setControls();

// Set the src value for basic setup.
$v->setSrc('fireworks.mp4');

// Output the generated code.
echo $v->get();

// Unset the src value.
$v->unsetSrc();

// Set sources.
$v->setSource('fireworks.mp4');
$v->setSource('fireworks.avi', 'video/avi');

// Output the generated code with a class applied.
echo $v->get('my-player');



