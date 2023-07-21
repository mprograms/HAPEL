<?php


namespace HAPEL\Plugins;



use HAPEL\Html;

class Bootstrap
{


    public function formGropup($label, $input, $class)
    {
        $html = new Html();
        $o = '';
        $o .= $html->div(true, array('form-group', $class));
        $o .= $html->inputLabel($label);
        $o .= $input;
        $o .= $html->div(false);

        return $o;
    }
}