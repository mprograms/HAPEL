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
 * @since 0.2.0
 *
 */

namespace HAPEL\Builder;


use HAPEL\Html;

class Table
{

    /**
     * @var array $_thead holds the row / cell data for the header.
     * @var array $_tbody holds the row / cell data for the body.
     * @var array $_tfoot holds the row / cell data for the footer.
     * @var object $HTML functions to make html output.
     * @var string|array $class the class of the table.
     * @var string $id the id of the table.
     */
    private $_thead = array();
    private $_tbody = array();
    private $_tfoot = array();
    private $HTML;
    private $_class = null;
    private $_id = null;
    private $_rowClass = null;



    public function __construct()
    {
        // Load HAPEL Html Class
        $this->HTML = new Html();

        // Define Table Component Variables
        $this->_thead = array('rows' => array());
        $this->_tbody = array('rows' => array());
        $this->_tfoot = array('rows' => array());
    }


    /**
     * SET THE TABLE CLASS ATTR
     *
     * @access public
     * @since 0.2.0
     *
     * @param null $class
     */
    public function setClass($class = null)
    {
        $this->_class = $class;
    }

    /**
     * SET THE TABLE ID ATTR
     *
     * @access public
     * @since 0.2.0
     *
     * @param null $id
     */
    public function setId($id = null)
    {
        $this->_id = $id;
    }

    /**
     * SET THE ROW CLASS ATTR
     *
     * @access public
     * @since 0.2.0
     *
     * @param $class
     */
    public function setRowClass($class)
    {
        $this->_rowClass = $class;
    }

    /**
     * UNSETS SET THE ROW CLASS ATTR
     *
     * @access public
     * @since 0.2.0
     *
     */
    public function unsetRowClass()
    {
        $this->_rowClass = '';
    }


    /**
     * UNSETS ALL SETTINGS
     * This will remove all table settings and data.
     *
     * @access public
     * @since 0.3.0
     *
     *
     */
    public function unsetAll()
    {
        $this->_thead = array();
        $this->_tbody = array();
        $this->_tfoot = array();
        $this->_class = null;
        $this->_id = null;
        $this->_rowClass = null;
    }


    /**
     * GET THE TABLE
     * This will return the compiled table.
     *
     * @access public
     * @since 0.2.0
     *
     * @return string
     */
    public function get()
    {
        return $this->_buildTable();
    }


    /**
     * ADD TO TABLE TBODY CONTENTS
     *
     * @access public
     * @since 0.2.0
     *
     * @param mixed ...$row
     */
    public function appendTBody(...$row)
    {
        $this->_appendRow($row, $this->_tbody);
    }

    /**
     * TABLE THEAD
     *
     * @access public
     * @since 0.2.0
     *
     * @param mixed ...$row
     */
    public function appendTHead(...$row)
    {
        $this->_appendRow($row,$this->_thead);
    }


    /**
     * TABLE TFOOT
     *
     * @access public
     * @since 0.2.0
     *
     * @param mixed ...$row
     */
    public function appendTFoot(...$row)
    {
        $this->_appendRow($row,$this->_tfoot);
    }



    /**
     * CLEAR TBODY CONTENTS
     *
     * @access public
     * @since 0.2.0
     *
     * @param $i null|int If null all rows will be deleted. If an int, then the specific row number will be deleted. Note this is an array. The first row number is 0.
     *
     */
    public function clearTBody($i = null)
    {
        $this->_clearContent($i,$this->_tbody);
    }

    /**
     * CLEAR THEAD CONTENTS
     * This will clear the tHead content
     *
     * @access public
     * @since 0.3.0
     *
     * @param $i null|int If null all rows will be deleted. If an int, then the specific row number will be deleted. Note this is an array. The first row number is 0.
     */
    public function clearTHead($i = null)
    {
        $this->_clearContent($i,$this->_thead);
    }



    /**
     * CLEAR TFOOT CONTENTS
     *
     * @access public
     * @since 0.3.0
     *
     * @param $i null|int If null all rows will be deleted. If an int, then the specific row number will be deleted. Note this is an array. The first row number is 0.
     *
     */
    public function clearTFoot($i = null)
    {
        $this->_clearContent($i, $this->_tfoot);
    }




    /**
     * ADD ROW TO TABLE
     * This will add a row to the table.
     *
     * @access public
     * @since 0.2.0
     *
     * @param mixed ...$row is an array of column data (use addTD() or addTH() to create data)
     */
    public function addRow(...$row)
    {
        return array(
            'cells' => $row,
            'class' =>  $this->_rowClass
        );
        $this->_rowClass = null;
    }


    /**
     * ADD TD
     * This will add a table column
     *
     * @access public
     * @see _addCell for param details
     *
     * @param string $content
     * @param string|array $class
     * @param string $id
     *
     * @since 0.2.0
     *
     * @return array
     *
     */
    public function addTD($content = '', $class = null, $id = null)
    {
        return $this->_addCell('td', $content, $class, $id);
    }

    /**
     * ADD TD
     * This will add a table column
     *
     * @access public
     *
     * @see _addCell for param details
     *
     * @return array
     * @since 0.2.0
     *
     */
    public function addTH($content = '', $class = null, $id = null)
    {
        return $this->_addCell('th', $content, $class, $id);
    }

    /**
     * ADD TABLE CELL
     * This will add a table column or header cell
     *
     * @access private
     * @since 0.2.0
     *
     * @param string $type is the type of cell to make ('td' or 'th')
     * @param string $content is the content to show in the cell.
     * @param null|string|array $class is the class for the cell.
     * @param null|string $id is the id for the cell.
     *
     * @return array
     */
    private function _addCell($type = 'td', $content = '', $class = null, $id = null)
    {
        return array(
            'type'      =>  $type,
            'content'   =>  $content,
            'class'     =>  $class,
            'id'        =>  $id
        );
    }


    /**
     * CLEAR TABLE CONTENT
     * This will clear the content from a given table section or a specific row within a table section.
     *
     * @access private
     * @since 0.3.0
     *
     * @param $i null|int if null it will delete all content, if the row number, it will delete the row's data.
     * @param $v array is the array to remove data from.
     */
    private function _clearContent($i = null, &$v)
    {
        if ( is_int($i) ) {
            unset($v['rows'][$i]);
        } else {
            $v['rows'] = array();
        }
    }

    /**
     * ADD TABLE CONTENT
     * This will add row content to a specific table section.
     *
     * @access private
     * @since 0.3.0
     *
     * @param $rows
     * @param $v
     */
    private function _appendRow($rows, &$v)
    {
        foreach ($rows as $row) {
            $v['rows'][] = $row;
        }
    }


    /**
     * BUILD THE TABLE
     * This will build the table.
     *
     * @access private
     * @since 0.2.0
     *
     * @return string
     *
     */
    private function _buildTable()
    {

        $o = '';

        $o .= $this->HTML->table(true, $this->_class, $this->_id);


        // Add thead
        $o .= $this->HTML->thead();
        foreach ( $this->_thead['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->HTML->thead(false);

        // Add tbody
        $o .= $this->HTML->tbody();
        foreach ( $this->_tbody['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->HTML->tbody(false);

        // Add tfoot
        $o .= $this->HTML->tfoot();
        foreach ( $this->_tfoot['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->HTML->tfoot(false);


        $o .= $this->HTML->table(false);

        return $o;
    }

    /**
     * BUILD A ROW
     * This will build a table row.
     *
     * @access private
     * @since 0.2.0
     *
     * @param array $row contains row data.
     *
     * @return string
     */
    private function _buildRow($row)
    {
        $o = '';
        $o .= $this->HTML->tr(true, $row['class']);
        foreach ( $row['cells'] as $cell) {
            $o .= $this->_buildCell($cell);
        }
        $o .= $this->HTML->tr(false);
        return $o;
    }

    /**
     * BUILD A CELL
     * This will build a table cell.
     *
     * @access private
     * @since 0.2.0
     *
     * @param array $cell contains cell data.
     *
     * @return string
     */
    private function _buildCell($cell)
    {
        if ( $cell['type'] == 'th') {
            return $this->HTML->th($cell['content'], $cell['class'], $cell['id']);
        }
        if ( $cell['type'] == 'td') {
            return $this->HTML->td($cell['content'], $cell['class'], $cell['id']);
        }
    }

}