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
 * @subpackage Element
 * This class builds an element and returns its compiled structure and content.
 *
 */

namespace HAPEL;


class Element
{

    /**
     * @var array $_settings
     * @see Html::$settings
     * @since 0.1.0
     */
    private static $_settings;


    /**
     * @var array $_attributes
     * @see Attributes
     * @since 0.1.0
     */
    private static $_attributes;


    public function __construct($settings = null)
    {
        self::$_settings = $settings;
        self::$_attributes = new Attributes();
    }


    /**
     * SETS A TAG
     * @param string $value
     * @see Attributes::$tag
     * @since 0.1.0
     * @return void
     */
    public static function setTag($value)
    {
        self::$_attributes->tag = $value;
    }

    /**
     * SETS THE CLASS
     * @param null|string|array $value
     * @see Attributes::$class
     * @since 0.1.0
     * @return void
     */
    public static function setClass($value)
    {
        self::$_attributes->class = $value;
    }

    /**
     * SETS THE ID
     * @param null|string $value
     * @see Attributes::$id
     * @since 0.1.0
     * @return void
     */
    public static function setId($value)
    {
        self::$_attributes->id = $value;
    }

    /**
     * SET THE STYLE
     * @param null|string|array $value
     * @see Attributes::$style
     * @since 0.1.0
     * @return void
     */
    public static function setStyle($value)
    {
        self::$_attributes->style = $value;
    }

    /**
     * SET THE DATA
     * @param null|string|array $value
     * @see Attributes::$data
     * @since 0.1.0
     * @return void
     */
    public static function setData($value)
    {
        self::$_attributes->data = $value;
    }

    /**
     * SET THE ATTRIBUTES
     * @param null|string|array
     * @see Attributes::$attr
     * @since 0.1.0
     * @return void
     */
    public static function setAttr($value)
    {
        self::$_attributes->attr = $value;
    }

    /**
     * SET THE CHILD CONTENT
     * @param bool|string $value
     * @see Attributes::$child
     * @since 0.1.0
     * @return void
     */
    public static function setChild($value)
    {
        self::$_attributes->child = $value;
    }

    /**
     * SET THE WRAP
     * @param bool $value
     * @see Attributes::$hasWrap
     * @since 0.1.0
     * @return void
     */
    public static function setWrap($value)
    {
        self::$_attributes->hasWrap = $value;
    }
    

    /**
     * GET THE ELEMENT
     * This is the main function to get an element.
     * @since 0.1.0
     * @uses Attributes::$hasWrap;
     * @return string
     */
    public static function get()
    {
        if ( self::$_attributes->hasWrap === true ) {
            return self::_wrap();
        } else {
            return self::_noWrap();
        }
    }






    /**
     * GET ELEMENT TAG
     * @access private
     * @since 0.1.0
     * @uses Attributes::$tag
     * @access private
     * @return string
     */
    private static function _getTag()
    {
        return self::$_attributes->tag;
    }

    /**
    * GET ELEMENT CLASS
    * @access private
    * @since 0.1.0
    * @uses Attributes::$class
    * @return string
    */
    private static function _getClass()
    {
        $o = '';
        if (self::$_attributes->class != null) {

            // Check to see if the class is an array, if so, split it into chunks, if not, return the class
            if (is_array(self::$_attributes->class)) {
                for ($i = 0; $i < count(self::$_attributes->class); $i++) {
                    $o .= $i > 0 ? ' ' : '';
                    $o .= self::$_attributes->class[$i];
                }
            } else {
                $o = self::$_attributes->class;
            }
        }
        return $o != '' ? ' class="' . $o . '"' : '';
    }

    /**
     * GET ELEMENT ID
     * @access private
     * @since 0.1.0
     * @uses Attributes::$id
     * @return string
     */
    private static function _getId()
    {
        return self::$_attributes->id != '' ? ' id="' . self::$_attributes->id . '"' : '';
    }

    /**
     * GET ELEMENT STYLE
     * @access private
     * @since 0.1.0
     * @uses Attributes::$style
     * @return string
     */
    private static function _getStyle()
    {
        $o = '';

        // Check to see if the style is an array, if so, split it into chunks, if not, return the style
        if (is_array(self::$_attributes->style)) {
            foreach (self::$_attributes->style as $k => $v) {
                $o .= $k . ':' . $v . ';';
            }
        } else {
            $o = self::$_attributes->style;
        }

        return $o != '' ? ' style="' . $o . '"' : '';
    }

    /**
     * GET ELEMENT DATA
     * @access private
     * @since 0.1.0
     * @uses Attributes::$data
     * @return string
     */
    private static function _getData()
    {
        $o = '';
        if (is_array(self::$_attributes->data)) {
            foreach (self::$_attributes->data as $k => $v) {
                $o .= ' data-' . $k . '="' . $v . '"';
            }
        }
        return $o;
    }

    /**
     * GET ELEMENT ATTR
     * @access private
     * @since 0.1.0
     * @uses Attributes::$attr
     * @return string
     */
    private static function _getAttr()
    {
        $o = '';
        if ( isset(self::$_attributes->attr ) ){
            if ( is_array(self::$_attributes->attr) ) {
                foreach (self::$_attributes->attr as $k => $v) {
                    $o .= !is_null($v) ? ' ' . $k . '="' . $v . '"' : '';
                }
            }
        }
        return $o;
    }

    /**
     * BUILD WRAPPER ELEMENT
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _wrap()
    {

        // Ensure that tag type is set
        if ( !isset(self::$_attributes->child) && !isset(self::$_attributes->tag) ) {
            return '<!-- HAPEL Warning: Cannot create node. Tag property not set! -->';
        }

        // Check if content is true / false
        if (is_bool(self::$_attributes->child)) {

            // True - Open the element only
            if (self::$_attributes->child === true || self::$_attributes->child !== false) {
                return self::_wrapOpen(). self::_lineBreak();
            }

            // False - Close the element only
            if (self::$_attributes->child !== true || self::$_attributes->child === false) {
                return self::_wrapClose(). self::_lineBreak();
            }

        } elseif ( is_string(self::$_attributes->child) || is_numeric(self::$_attributes->child) ) {
            // The element has child html content so wrap it
            return self::_wrapChild(). self::_lineBreak();

        } elseif ( is_null(self::$_attributes->child) && self::$_attributes->tag == 'textarea' ) {
            // Special case for textarea tags since they may have null child values if blank.
            return self::_wrapChild(). self::_lineBreak();

        } else {
            // No child parameter was set.
            return '<!-- HAPEL Warning: Cannot create <' . self::$_attributes->tag . '> node. Parameter $child not set. -->';
        }

    }


    /**
     * BUILD EMPTY ELEMENT
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _noWrap()
    {
        return '<' . self::_getTag() . self::_getClass() . self::_getId() . self::_getStyle() . self::_getData() . self::_getAttr() . self::_xhtmlClose() . '>' . self::_lineBreak();
    }


    /**
     * OPEN AN HTML ELEMENT
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _wrapOpen()
    {
        return '<' . self::_getTag() . self::_getClass() . self::_getId() . self::_getStyle() . self::_getData() . self::_getAttr() . '>';
    }


    /**
     * CLOSE AN HTML ELEMENT
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _wrapClose()
    {
        return '</' . self::_getTag() . '>';
    }


    /**
     * WRAP CONTENT IN AN HTML ELEMENT
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _wrapChild()
    {
        return self::_wrapOpen() . self::_getChild() . self::_wrapClose();
    }


    /**
     * GET INNER HTML CONTENT
     * @access private
     * @since 0.1.0
     * @return string|null
     */
    private static function _getChild()
    {
        if ( isset( self::$_attributes->child) ){
            return self::$_attributes->child;
        } else {
            return null;
        }
    }


    /**
     * MAKE XHTML
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _xhtmlClose()
    {
        if ( self::$_settings['xhtml'] === true ){
            return '/';
        }
    }

    /**
     * ADD LINE BREAK
     * @access private
     * @since 0.1.0
     * @return string
     */
    private static function _lineBreak()
    {
        // Do not add a line break if minify is true.
        if ( self::$_settings['minify'] !== true ){
            return "\r\n";
        }
    }


}