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
 * @subpackage BulletList
 * This class provides a simple method of creating bulleted lists.
 */

namespace HAPEL\Builder;


class BulletList
{

    /**
     * @var string $type, (default: 'ul') is the type of list to make. Either 'ul' or 'ol'.
     * @var string $class, (default: null) is the class for the list.
     * @var array $list is the content for the list.
     *
     * Example:
     *
     *      Simple List:
     *      $list = array('item1','item2','item3','item4')
     *
     *      Nested List:
     *      $list = array(
     *          'item1',
     *          'item2',
     *          array(
     *              'itemA',
     *              'itemB'
     *          ),
     *          'item3',
     *          'item4'
     *      );
     *
     *      Note: You can nest as many lists as you want with an unlimited number of levels.
     *
     */
    public $type = 'ul';
    public $class = null;
    public $list = array();


    public function get()
    {
        $o = '';
        $o .= $this->_tagType(true);
        $o .= $this->_loop($this->list);
        $o .= $this->_tagType(false);
        echo $o;
    }

    private function _tagType($open = true)
    {
        return $open === true ? '<' . $this->type . $this->_getClass() . '>' : '</' . $this->type . '>';
    }

    private function _getClass()
    {
        return ' class="' . $this->class . '"';
    }

    private function _loop($list)
    {
        $o = '';
        $i = 0;
        $total = count($list);

        foreach ( $list as $item){

            if ( is_array( $item) ) {
                $o .= $this->_tagType(true);
                $o .= $this->_loop($item);
                $o .= $this->_tagType(false);
            } else {
                $o .= '<li>';
                $o .= $item;
                if ( $i < $total - 1 ) {
                    if ( is_array( $list[$i+1] ) ) {
                        // do not close li
                    } else {
                        $o .= '</li>';
                    }
                }
            }

            $i++;
        }
        return $o;
    }
}