<?php


namespace HAPEL;

class Build
{




    private static $element;
    private static $settings;



    public static function setSettings($settings)
    {
        self::$settings = $settings;
    }



    /**
     * BUILD WRAPPER ELEMENT
     * This will create a standard html element that allows for child html. We can open, close, or place content
     * inside the wrapper based on the value of $content.
     *
     * Based on the value of $ele['content']:
     *  bool (true) - opens the element
     *  bool (false) - closes the element
     *  string ('my content') - wraps 'my content' with the type of wrapper.
     *
     * @since 0.1.0
     *
     * @return string
     */
    public static function wrap($node)
    {
       var_dump($node->class);

    }








}