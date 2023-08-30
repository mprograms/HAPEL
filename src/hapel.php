<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 *
 * @copyright 2018 MRittman
 * @version 0.3.2
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * This loads all the required classes for HAPEL to run.
 */

namespace HAPEL;

define('HAPEL_VERSION', '0.3.2');

$classes = array(
    '/lib/attributes.php',
    '/lib/element.php',
    '/lib/html.php',
    '/lib/component.php',
    '/lib/builder/bulletlist.php',
    '/lib/builder/table.php',
    '/lib/builder/stylesheet.php',
    '/lib/plugins/bootstrap.php',
);

foreach ($classes as $class) {
    require_once __DIR__ . $class;
}