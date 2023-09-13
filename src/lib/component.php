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
 * @subpackage Component
 * This class provides framework for empty or global html elements.
 *
 */

namespace HAPEL;


class Component
{

    /**
     * @var array $_settings {@see Html::$settings}
     */
    private static $_settings;

    public function __construct($settings)
    {
        self::$_settings = $settings;
    }


    /**
     * CREATE ELEMENT WITH GLOBAL ATTRIBUTES
     * @param string $tag {@see Attributes::$tag}
     * @param string|bool $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.1.0
     * @return string
     */
    public static function globalElement($tag = null, $child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$_settings);
        $e::setTag($tag);
        $e::setClass($class);
        $e::setId($id);
        $e::setStyle($style);
        $e::setData($data);
        $e::setAttr($attr);
        $e::setChild($child);
        $e::setWrap(true);

        return $e::get();
    }

    /**
     * CREATE AN EMPTY ELEMENT
     * @param string $tag {@see Attributes::$tag}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.1.0
     * @return string
     */
    public static function emptyElement($tag = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$_settings);
        $e::setTag($tag);
        $e::setClass($class);
        $e::setId($id);
        $e::setStyle($style);
        $e::setData($data);
        $e::setAttr($attr);
        $e::setWrap(false);

        return $e::get();
    }

}