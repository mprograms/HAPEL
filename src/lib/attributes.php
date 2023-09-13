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
     * TAG ATTRIBUTE
     * Set the tag to create.
     *
     * @var bool|string $child.
     */
    public $tag = null;

    /**
     * CHILD ATTRIBUTE
     * Set the child attributes for the element.
     * This expects a string or boolean value.
     *
     * TRUE: Creates an opening element. Example: '<div>'
     * FALSE: Creates a closing element. Example: '</div>'
     * STRING: Wraps the STRING content in an opening and closing element. Example: '<div>Content</div>'
     *
     * @var bool|string $child is true, false, or 'string'.
     */
    public $child = null;

    /**
     * CLASS ATTRIBUTE
     * Set the class attributes for the element.
     * This expects a string or an array of values.
     *
     * @var null|array $class is 'class1 class2' or [ 'class1' => 'class2', ... ].
     */
    public $class = null;

    /**
     * ID ATTRIBUTE
     * Set the id attributes for the element.
     * This expects string.
     *
     * @var null|string|array $id is 'id'.
     */
    public $id = null;


    /**
     * STYLE ATTRIBUTE
     * Set the style attributes for the element.
     * This expects string or an array of key/value pairs where key is the property and value is the value.
     *
     * @var null|string|array $style is either 'color=red;background=blue;...' or [ 'color' => 'red', 'background' => 'blue', ... ].
     */
    public $style = null;


    /**
     * DATA ATTRIBUTE
     * Set the data attributes for the element.
     * This expects an array of key/value pairs where key is the data-name and value is the value.
     * Note: Do not add "data" to the name. It will be added for you.
     *
     * @var null|array $data is [ 'name1' => 'value1', 'name2' => 'value2', ... ].
     */
    public $data = null;


    /**
     * OTHER ATTRIBUTES
     * Use this to specify other attributes not set in other library settings.
     * This expects an array key/value pair where key is the attribute name and value is the attribute value.
     *
     * @var null|array $attr is [ 'attr1' => 'value1', 'attr2' => 'value2', ... ].
     */
    public $attr = null;


    /**
     * CONTROL IF ELEMENT HAS A WRAPPER OR NOT.
     * Wrapped elements are elements such as <p></p> or <div></div>. Non-wrapped or empty elements are elements such as <img> or <meta>.
     *
     * @var bool $hasWrap
     * @see Element::_wrap();
     * @see Element::_noWrap();
     */
    public $hasWrap = false;
}