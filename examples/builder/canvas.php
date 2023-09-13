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
 * @subpackage Examples\Builder\Canvas
 *
 * Shows usage examples for the HAPEL Builder Canvas class.
 *
 * @since 0.3.0
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the audio builder class.
$c = new \HAPEL\Builder\Canvas();

$script = 'myscript.js';
echo $c->get($script, true);

$script = '
let canvas = document.getElementById("my-canvas");
let sq = canvas.getContext("2d");
sq.fillStyle = "#006699";
sq.fillRect(0, 0, 250, 250);
';
echo $c->get($script, false, null, 'my-canvas');


