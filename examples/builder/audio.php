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
 * @subpackage Examples\Builder\Audio
 *
 * Shows usage examples for the HAPEL Builder Audio class.
 *
 * @since 0.3.0
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the audio builder class.
$a = new \HAPEL\Builder\Audio();


// Set optional parameters.
$a->setControls();

// Set the src value for basic setup.
$a->setSrc('cow.mp3');

// Output the generated code.
echo $a->get();

// Unset the src value.
$a->unsetSrc();

// Set sources.
$a->setSource('chicken.mp3');
$a->setSource('chicken.ogg', 'audio/ogg');

// Output the generated code with a class applied.
echo $a->get('my-player');



