<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 * @copyright 2018 MRittman
 * @version 0.2.0
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @subpackage Stylesheet
 * This class provides a simple method of creating stylesheets.
 */

namespace HAPEL\Builder;


class Stylesheet
{

    /**
     * @var array $_style holds the selectors and properties for the stylesheet generator.
     */
    private $_style;
    private $_minify;


    /**
     * ADD SELECTOR TO STYLESHEET
     * This will add a selector to the stylesheet and allow you to set properties
     *
     * @access public
     * @since 0.2.0
     *
     * @param string $selector is the selector (element, class, id, etc)
     * @param mixed ...$row is an array of column data (use addTD() or addTH() to create data)
     *
     */
    public function addSelector($selector, ...$properties)
    {
        $this->_style[] = array(
            'selector'      => $selector,
            'properties'    => $properties
        );
    }

    /**
     * ADD PROPERTY TO SELECTOR
     * This will add a property to the current selector.
     *
     * @access public
     * @since 0.2.0
     *
     * @param string $name is the name of the property.
     * @param string $value is the value of the property.
     *
     */
    public function addProp($name, $value)
    {
        $name = is_array( $name ) ? implode(',', $name) : $name;
        return array(
            'name'  =>  $name,
            'value' =>  $value
        );
    }

    /**
     * GET STYLESHEET OUTPUT
     * This will return a fully formatted stylesheet.
     *
     * @access public
     * @since 0.2.0
     *
     * @return string
     *
     */
    public function get($minify = false)
    {
        $this->_minify = $minify;
        return $this->_getStylesheet();
    }



    /**
     * GET STYLESHEET
     * This will generate the stylesheet output.
     *
     * @access private
     * @since 0.2.0
     *
     * @return string
     *
     */
    private function _getStylesheet()
    {
        $o = '';

        $o .= $this->_addNewLine();
        $o .= '<style type="text/css">' . $this->_addNewLine();
        $o .= $this->_getSelectors();
        $o .= '</style>' . $this->_addNewLine();

        return $o;
    }

    /**
     * GET STYLESHEET SELECTORS
     * This will loop over and add each selector.
     *
     * @access private
     * @since 0.2.0
     *
     * @return string
     *
     */
    private function _getSelectors()
    {
        $o = '';
        foreach ( $this->_style as $selector ) {
            $selector['selector'] = is_array($selector['selector']) ? implode(',', $selector['selector']) : $selector['selector'];
            $o .= $selector['selector'] . $this->_addSpace() . '{' . $this->_addNewLine();
            $o .= $this->_getProperties($selector['properties']);
            $o .= '}' . $this->_addNewLine();
        }
        return $o;
    }

    /**
     * GET SELECTOR PROPERTIES
     * This will loop over and add each selector property.
     *
     * @access private
     * @since 0.2.0
     *
     * @return string
     *
     */
    private function _getProperties($properties)
    {
        $o = '';
        foreach ( $properties as $property ) {
            $o .= $this->_addIndent() . $property['name'] . ':' . $this->_addSpace() . $property['value'] . ';' . $this->_addNewLine();
        }
        return $o;
    }

    private function _addNewLine()
    {
        if ( $this->_minify === false ) {
            return "\r\n";
        }
    }
    private function _addIndent()
    {
        if ( $this->_minify === false ) {
            return '   ';
        }
    }
    private function _addSpace()
    {
        if ( $this->_minify === false ) {
            return ' ';
        }
    }
}