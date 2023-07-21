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
 * This class helps build more complex elements and return its compiled structure and content.
 *
 */

namespace HAPEL;


class Component
{

    public static $settings;

    public function __construct($settings)
    {
        self::$settings = $settings;
    }


    /**
     * CREATE ELEMENT with GLOBAL ATTRIBUTES
     * This will create an html element that uses global html attributes.
     *
     */
    public static function globalElement($tag = null, $child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$settings);
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

    public static function emptyElement($tag = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$settings);
        $e::setTag($tag);
        $e::setClass($class);
        $e::setId($id);
        $e::setStyle($style);
        $e::setData($data);
        $e::setAttr($attr);
        $e::setWrap(false);

        return $e::get();
    }

    public static function commentElement($child = '')
    {
        return '<!-- ' . $child . '-->' . "\r\n";

    }

    public static function doctype($type)
    {
        return '<!DOCTYPE ' . $type . '>' . "\r\n";
    }

    public static function imgElement($src = '', $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['src'] = $src;
        $attr['alt'] = $alt;
        return self::emptyElement('img',$class, $id, $style, $data, $attr);
    }

    public static function pictureElement($sources, $src, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = self::source($sources);
        $o .= self::imgElement($src, $alt, $class);

        return self::globalElement('picture', $o, $class, $id, $style, $data, $attr);
    }

    public static function inputElement($type, $name, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['type'] = $type;
        $attr['name'] = $name;
        $attr['value'] = $value;
        $attr['required'] = $required === true ? 'required' : null;
        return self::emptyElement('input', $class, $id, $style, $data, $attr);
    }

    public static function textAreaElement($name, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;
        return self::globalElement('textarea', $value, $class, $id, $style, $data, $attr);
    }

    public static function checkBoxElement($name, $label, $value = null, $retrievedValue = null, $checked = false, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['value'] = $value;

        $labelClass = str_replace('[]', '', $name) . '-' . $value;

        $checked = self::_checkValues($value, $retrievedValue);


        $attr['checked'] = $checked === true ? 'checked' : null;
        $attr['required'] = $required === true ? 'required' : null;

        return self::globalElement('label', true, $labelClass) . self::inputElement('checkbox', $name, $value, $required, $class, $id, null, $data, $attr) . $label . self::globalElement('label', false);
    }

    public static function checkBoxListElement($name, $options = null, $retrievedValues = null, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';
        foreach ( $options as $k=>$v) {
            $o .= self::checkBoxElement($name.'[]', $v, $k, $retrievedValues, false, false, $class, $id, $data, $attr);
        }
        return $o;
    }

    public static function inputSelectElement($name, $options = null, $retrievedValues = null, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';

        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;

        $o .= self::globalElement('select', true, $class, $id, null, $data, $attr);

        foreach ( $options as $k=>$v) {

            $selected = self::_checkValues($k, $retrievedValues);

            $itemAttr['value'] = $k;
            $itemAttr['selected'] = $selected === true ? 'selected' : null;
            $o .= self::globalElement('option', (string)$v, null, null, null, null, $itemAttr);
            unset($itemAttr);
        }

        $o .= self::globalElement('select', false);
        return $o;
    }

    public static function inputRadioElement($name, $options = null, $retrievedValues = null, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';

        $attr['required'] = $required === true ? 'required' : null;

        $id = !is_null($id) ? $id : $name;

        foreach ( $options as $k=>$v) {

            $tempId = $id . $k;
            $tempClass = $class . ' ' . $class . '-' . $k;

            unset($attr['checked']);

            if ( $retrievedValues == $k ) {
                $attr['checked'] = 'checked';
            }

            $o .= self::inputElement('radio', $name, $k, $required, $tempClass, $tempId, null, $data, $attr);
            $o .= self::globalElement('label', $v, '', '', '', '', ['for'=>$tempId]);
        }

        return $o;
    }

    public static function inputDatalistElement($name, $value, $options, $required, $class, $id, $style, $data, $attr)
    {
        $o = '';

        $listId = !is_null($id) ? $id : $name;
        $attr['list'] = $listId . '-list';

        $o .= self::inputElement('text', $name, $value, $required, $class, $id, $style, $data, $attr);

        $o .= self::globalElement('datalist ', true, null, $attr['list']);

        foreach ( $options as $v) {
            $o .= self::emptyElement('option ', null, null, null, null, array('value'=>$v));
        }

        $o .= self::globalElement('datalist', false);
        return $o;
    }





        /**
     * @param $sources array
     *
     *      $sources
     *          [media]
     *          [src]
     *          [srcset]
     *          [type]
     *          [sizes]
     *
     * @return string
     */
    public static function source($sources)
    {
        $o = '';
        foreach ($sources as $item) {

            $sourceAttr['media'] = isset($item['media']) ? $item['media'] : null;
            $sourceAttr['src'] = isset($item['src']) ? $item['src'] : null;
            $sourceAttr['srcset'] = isset($item['srcset']) ? $item['srcset'] : null;
            $sourceAttr['type'] = isset($item['type']) ? $item['type'] : null;
            $sourceAttr['sizes'] = isset($item['sizes']) ? $item['sizes'] : null;

            $o .= self::emptyElement('source', null, null, null, null, $sourceAttr);
            unset($sourceAttr);
        }
        return $o;
    }


    /**
     * SET VALUES OF CHECKBOXES & SELECT BOXES
     *
     * @param $value
     * @param $retrievedValue
     *
     * @return bool
     */
    private static function _checkValues($value, $retrievedValue) {

        $isMatch = false;

        if ( is_array($retrievedValue) ){
            // See if the value of the checkbox is in the array of values.
            if ( in_array($value, $retrievedValue) ) {
                $isMatch = true;
            }
        } else {
            // Check to see if checkbox should be checked based on previous value.
            if ($value == $retrievedValue) {
                $isMatch = true;
            }
        }

        return $isMatch;
    }


}