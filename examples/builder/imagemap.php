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
 * @subpackage Examples\Builder\Imagemap
 *
 * Shows usage examples for the HAPEL Builder Imagemap class.
 *
 * @since 0.3.0
 */


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the imagemap builder class.
$i = new \HAPEL\Builder\Imagemap();

// Set the image.
$i->setImg('my-image.jpg', 200, 100, 'My Photo');

// Set the link areas.
$i->addArea('rect', '0,0,100,100', 'page1.html');
$i->addArea('rect', '101,0,200,100', 'page2.html');

// Get the image map generated code.
echo $i->get('imgmap');