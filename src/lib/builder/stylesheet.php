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
 * @subpackage Builder\Stylesheet
 * This class provides a simple method of creating stylesheets.
 *
 * @since 0.2.0
 */

namespace HAPEL\Builder;


class Stylesheet
{

    /**
     * @var array $_style holds the stylesheet data.
     * @since 0.2.0
     */
    private $_style = [];

    /**
     * @var bool $_minify Should the stylesheet be minified?
     * @since 0.2.0
     */
    private $_minify = false;



    /**
     * ADD SELECTOR TO STYLESHEET
     * @param string|array $selector is the selector (element, class, id, etc). Required.
     * @param object $properties uses the method addProp() to set data. Required.
     * @since 0.2.0
     */
    public function addSelector($selector, ...$properties)
    {
        $selector = is_array( $selector ) ? implode(',', $selector) : $selector;

        $obj = new \stdClass();
        $obj->selector  = $selector;
        $obj->properties = $properties;
        $this->_style[] = $obj;
    }

    /**
     * ADD PROPERTY TO SELECTOR
     * @param string $name is the name of the property. Required.
     * @param string $value is the value of the property. Required.
     * @since 0.2.0
     */
    public function addProp($name, $value)
    {
        $obj = new \stdClass();
        $obj->name = $name;
        $obj->value = $value;
        return $obj;
    }

    /**
     * GET STYLESHEET OUTPUT
     * @since 0.2.0
     * @return string
     */
    public function get($minify = false)
    {
        $this->_minify = $minify;
        return $this->_getStylesheet();
    }



    /**
     * GET STYLESHEET
     * @access private
     * @since 0.2.0
     * @return string
     */
    private function _getStylesheet()
    {
        $o = '';

        $o .= $this->_addNewLine();
        $o .= '<style rel="text/css">' . $this->_addNewLine();
        $o .= $this->_getSelectors();
        $o .= '</style>' . $this->_addNewLine();

        return $o;
    }


    /**
     * GET STYLESHEET SELECTORS
     * @access private
     * @since 0.2.0
     * @return string
     */
    private function _getSelectors()
    {
        $o = '';
        foreach ( $this->_style as $obj ) {
            $obj->selector = is_array($obj->selector) ? implode(',', $obj->selector) : $obj->selector;
            $o .= $obj->selector . $this->_addSpace() . '{' . $this->_addNewLine();
            $o .= $this->_getProperties($obj->properties);
            $o .= '}' . $this->_addNewLine();
        }
        return $o;
    }

    /**
     * GET SELECTOR PROPERTIES
     * @access private
     * @since 0.2.0
     * @return string
     */
    private function _getProperties($properties)
    {
        $o = '';
        foreach ( $properties as $obj ) {
            $o .= $this->_addIndent() . $obj->name . ':' . $this->_addSpace() . $obj->value . ';' . $this->_addNewLine();
        }
        return $o;
    }


    /**
     * ADD NEWLINE (CRLF) AT END OF LINE
     * @since 0.2.0
     * @return string|void
     */
    private function _addNewLine()
    {
        if ( $this->_minify === false ) {
            return "\r\n";
        }
    }


    /**
     * ADD INDENT
     * @since 0.2.0
     * @return string|void
     */
    private function _addIndent()
    {
        if ( $this->_minify === false ) {
            return '   ';
        }
    }


    /**
     * ADD SPACE
     * @since 0.2.0
     * @return string|void
     */
    private function _addSpace()
    {
        if ( $this->_minify === false ) {
            return ' ';
        }
    }
}