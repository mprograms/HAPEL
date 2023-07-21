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
     * @var array $settings {@see Html->$settings}
     *
     */

    private static $_settings;
    private static $_attributes;



    public function __construct($settings = null)
    {
        self::$_settings = $settings;
        self::$_attributes = new Attributes();
        
    }


    
    
    public static function setTag($value)
    {
        self::$_attributes->tag = $value;
    }
    public static function setClass($value)
    {
        self::$_attributes->class = $value;
    }
    public static function setId($value)
    {
        self::$_attributes->id = $value;
    }
    public static function setStyle($value)
    {
        self::$_attributes->style = $value;
    }
    public static function setData($value)
    {
        self::$_attributes->data = $value;
    }
    public static function setAttr($value)
    {
        self::$_attributes->attr = $value;
    }
    public static function setChild($value)
    {
        self::$_attributes->child = $value;
    }
    public static function setWrap($value)
    {
        self::$_attributes->hasWrap = $value;
    }
    

    /**
     * GET THE ELEMENT
     * This will build the html element.
     **
     * @since 0.1.0
     *
     * @uses $this->hasWrap
     *
     * @return string
     *
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
     * SET ELEMENT TAG
     * This will return the tag name of the element.
     *
     * @since 0.1.0
     *
     * @uses $this->tag
     *
     * @return string
     */
    private static function _getTag()
    {
        return self::$_attributes->tag;
    }

     /**
     * SET ELEMENT CLASS
     * This sets the class name(s) of the html element.
     *
     *
     * @since 0.1.0
      *
     * @uses $this->class
     *
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
     * SET ELEMENT ID
     * This sets the id name of the html element.
     *
     * @since 0.1.0
     *
     * @uses $this->id
     *
     * @return string
     */
    private static function _getId()
    {
        return self::$_attributes->id != '' ? ' id="' . self::$_attributes->id . '"' : '';
    }

    /**
     * SET ELEMENT STYLE
     * This sets the class name(s) of the html element.
     *
     *
     * @since 0.1.0
     *
     * @uses $this->style
     *
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
     * SET ELEMENT DATA
     * This sets the data attributes of the html element.
     *
     * @access private
     * @since 0.1.0
     * @uses $this->data
     *
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
     * SET ELEMENT ATTR
     * This sets a custom attribute for the html element.
     * This method allows the creation of additional attributes that are not preconfigured elsewhere in the library.
     *
     * Format is ['attribute-name'] => 'attribute-value';
     *
     * Example:
     *
     * $attr = array(
     *      'lang'      =>  'en',
     *      'tabindex'  =>  '1'
     * );
     *
     * @access private
     * @since 0.1.0
     * @uses $this->attr
     *
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
     * This will create a standard html element that allows for inner html. We can open, close, or place content
     * inside the wrapper based on the value of $content.
     *
     * Based on the value of $this->child:
     *    bool (true) - opens the element
     *    bool (false) - closes the element
     *    string ('my content') - wraps 'my content' with the type of wrapper.
     *
     * @access private
     * @since 0.1.0
     *
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

        } elseif (is_string(self::$_attributes->child)) {
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
     * This will build an empty html element (one that does not have inner html)
     *
     * @access private
     * @since 0.1.0
     *
     * @return string
     */
    private static function _noWrap()
    {
        return '<' . self::_getTag() . self::_getClass() . self::_getId() . self::_getStyle() . self::_getData() . self::_getAttr() . self::_xhtmlClose() . '>' . self::_lineBreak();
    }



    /**
     * OPEN AN HTML ELEMENT
     * This will create an html element's open tag
     *
     * @access private
     * @since 0.1.0
     *
     * @return string
     */
    private static function _wrapOpen()
    {
        return '<' . self::_getTag() . self::_getClass() . self::_getId() . self::_getStyle() . self::_getData() . self::_getAttr() . '>';
    }

    /**
     * CLOSE AN HTML ELEMENT
     * This will create an html element's close tag
     *
     * @access private
     * @since 0.1.0
     *
     * @return string
     */
    private static function _wrapClose()
    {
        return '</' . self::_getTag() . '>';
    }


    /**
     * WRAP CONTENT IN AN HTML ELEMENT
     * This will create an html element's content wrapped in its open and close tag.
     *
     * @access private
     * @since 0.1.0
     *
     * @return string
     */
    private static function _wrapChild()
    {
        return self::_wrapOpen() . self::_getChild() . self::_wrapClose();
    }


    /**
     * GET INNER HTML CONTENT
     * This will get the inner html content for the element.
     *
     * @access private
     * @since 0.1.0
     *
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
     * This will add a closing slash to make XHTML code.
     *
     * @access private
     * @since 0.1.0
     *
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
     * This will add a line break at the end of each line of code.
     *
     * @access private
     * @since 0.1.0
     *
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