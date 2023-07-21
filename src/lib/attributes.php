<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 *
 * @copyright 2018 MRittman
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @subpackage Attributes
 * This class creates an object to hold element attributes.
 *
 */

namespace HAPEL;


class Attributes
{

    /**
     * @var null|string $tag is the html element to create.
     * @var null|string|bool $child is the inner html content.
     * @var null|string|array $class is the class of the element.
     * @var null|string $id is the id of the element.
     * @var null|string|array $style is the style of the element.
     * @var null|array $data is the data-* of the element.
     * @var null|array $attr is additional attributes of the element.
     * @var null|bool $hasWrap will create a wrapped or empty element {@see _wrap() & _noWrap()}
     *
     */
    public $tag = null;
    public $child = null;
    public $class = null;
    public $id = null;
    public $style = null;
    public $data = null;
    public $attr = null;
    public $hasWrap = false;




}