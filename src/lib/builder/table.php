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
 * @subpackage Builder\Table
 * This class is used to set table content and return its compiled structure and content.
 *
 * @since 0.2.0
 *
 */

namespace HAPEL\Builder;


use HAPEL\Html;

class Table
{

    /**
     * HTML OBJECT
     * Holds the html class object.
     * @var object $_HTML
     * @see Html
     * @since 0.2.0
     */
    private $_HTML;


    /**
     * THEAD CONTENT
     * Holds an array of content for the table head.
     * @var array $_thead
     * @since 0.2.0
     */
    private $_thead = [];


    /**
     * TBODY CONTENT
     * Holds an array of content for the table body.
     * @var array $_tbody
     * @since 0.2.0
     */
    private $_tbody = [];


    /**
     * TFOOT CONTENT
     * Holds an array of content for the table footer.
     * @var array $_tbody
     * @since 0.2.0
     */
    private $_tfoot = [];


    /**
     * TABLE CLASS
     * Holds the class(es) for the table.
     * @var null|string $class
     * @since 0.2.0
     */
    private $_class = null;


    /**
     * TABLE ID
     * Holds the id for the table.
     * @var null|string $id
     * @since 0.2.0
     */
    private $_id = null;


    /**
     * ROW CLASS
     * Holds the row class for the table row.
     * @var null|string $_rowClass
     * @since 0.2.0
     */
    private $_rowClass = null;


    public function __construct()
    {
        // Load HAPEL Html Class
        $this->_HTML = new Html();

        // Define Table Component Variables
        $this->_thead = $this->_setRowDefaults();;
        $this->_tbody = $this->_setRowDefaults();;
        $this->_tfoot = $this->_setRowDefaults();;
    }


    /**
     * SET THE TABLE CLASS ATTR
     * @since 0.2.0
     * @param null|string $class
     */
    public function setClass($class = null)
    {
        $this->_class = $class;
    }


    /**
     * SET THE TABLE ID
     * @since 0.2.0
     * @param null|string $id
     */
    public function setId($id = null)
    {
        $this->_id = $id;
    }


    /**
     * SET THE ROW CLASS
     * @since 0.2.0
     * @param null|string $class
     */
    public function setRowClass($class)
    {
        $this->_rowClass = $class;
    }


    /**
     * UNSETS SET THE ROW CLASS ATTR
     * @since 0.2.0
     */
    public function unsetRowClass()
    {
        $this->_rowClass = '';
    }


    /**
     * UNSETS ALL TABLE SETTINGS
     * This will remove all table settings and data.
     * @since 0.3.0
     */
    public function unsetAll()
    {
        $this->_thead = $this->_setRowDefaults();
        $this->_tbody = $this->_setRowDefaults();
        $this->_tfoot = $this->_setRowDefaults();
        $this->_class = null;
        $this->_id = null;
        $this->_rowClass = null;
    }

    private function _setRowDefaults()
    {
        return ['rows' => []];
    }


    /**
     * GET THE TABLE
     * This will return the compiled table.
     * @since 0.2.0
     * @return string
     */
    public function get()
    {
        return $this->_buildTable();
    }


    /**
     * ADD ROW TO TABLE TBODY
     * @since 0.2.0
     * @param mixed ...$row
     */
    public function appendTBody(...$row)
    {
        $this->_appendRow($row, $this->_tbody);
    }


    /**
     * ADD ROW TO TABLE THEAD
     * @since 0.2.0
     * @param mixed ...$row
     */
    public function appendTHead(...$row)
    {
        $this->_appendRow($row,$this->_thead);
    }


    /**
     * ADD ROW TO TABLE FOOT
     * @since 0.2.0
     * @param mixed ...$row
     */
    public function appendTFoot(...$row)
    {
        $this->_appendRow($row,$this->_tfoot);
    }


    /**
     * CLEAR TBODY CONTENTS
     * @param null|int|array $rowNumber the row number(s) to be deleted.
     * @see self::_clearContent();
     * @since 0.2.0
     */
    public function clearTBody($rowNumber = null)
    {
        $this->_clearContent($this->_tbody, $rowNumber);
    }


    /**
     * CLEAR THEAD CONTENTS
     * @param null|int|array $rowNumber the row number(s) to be deleted.
     * @see self::_clearContent();
     * @since 0.2.0
     */
    public function clearTHead($rowNumber = null)
    {
        $this->_clearContent($this->_tbody, $rowNumber);
    }


    /**
     * CLEAR TFOOT CONTENTS
     * @param null|int|array $rowNumber the row number(s) to be deleted.
     * @see self::_clearContent();
     * @since 0.2.0
     */
    public function clearTFoot($rowNumber = null)
    {
        $this->_clearContent($this->_tbody, $rowNumber);
    }


    /**
     * ADD ROW TO TABLE
     * @param mixed ...$row is an array of column data. Use addTD() or addTH() to create data.
     * @see self::addTD()
     * @see self::addTH()
     * @since 0.2.0
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
     * ADD TD CELL
     * @param string $content {@see self::_addCell()}
     * @param string $class {@see self::_addCell()}
     * @param string $id {@see self::_addCell()}
     * @since 0.2.0
     * @return array
     */
    public function addTD($content = '', $class = null, $id = null)
    {
        return $this->_addCell('td', $content, $class, $id);
    }


    /**
     * ADD TH CELL
     * @param string $content {@see self::_addCell()}
     * @param string $class {@see self::_addCell()}
     * @param string $id {@see self::_addCell()}
     * @since 0.2.0
     * @return array
     */
    public function addTH($content = '', $class = null, $id = null)
    {
        return $this->_addCell('th', $content, $class, $id);
    }


    /**
     * ADD TABLE CELL
     * @access private
     * @param string $type is the type of cell to make ('td' or 'th')
     * @param string $content is the content to show in the cell.
     * @param null|string $class is the class for the cell.
     * @param null|string $id is the id for the cell.
     * @since 0.2.0
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
     * @param $rowNumbers null|int|array array index of row(s) to remove.
     *      null: Remove all content.
     *      int: Remove specific row.
     *      array:  Remove specific rows.
     * @param array $sectionData the section data
     *@since 0.3.0
     *
     */
    private function _clearContent(&$sectionData, $rowNumbers = null)
    {
        if ( !is_null($rowNumbers) ) {
            if (!is_int($rowNumbers)) {
                $rowNumbers = [$rowNumbers];
            }
            if ( is_array($rowNumbers)) {
                foreach ($rowNumbers as $rowNumber) {
                    unset($sectionData['rows'][$rowNumber]);
                }
            }
        } else {
            $sectionData['rows'] = [];
        }
    }


    /**
     * ADD TABLE CONTENT
     * @access private
     * @param array $rows
     * @param array $tableSection
     * @since 0.3.0
     */
    private function _appendRow($rows, &$tableSection)
    {
        foreach ($rows as $row) {
            $tableSection['rows'][] = $row;
        }
    }


    /**
     * BUILD THE TABLE
     * @access private
     * @since 0.2.0
     * @return string
     */
    private function _buildTable()
    {

        $o = '';
        $o .= $this->_HTML->table(true, $this->_class, $this->_id);

        // Add thead
        $o .= $this->_HTML->thead(true);
        foreach ( $this->_thead['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->_HTML->thead(false);

        // Add tbody
        $o .= $this->_HTML->tbody(true);
        foreach ( $this->_tbody['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->_HTML->tbody(false);

        // Add tfoot
        $o .= $this->_HTML->tfoot(true);
        foreach ( $this->_tfoot['rows'] as $row){
            $o .= $this->_buildRow($row);
        }
        $o .= $this->_HTML->tfoot(false);


        $o .= $this->_HTML->table(false);

        return $o;
    }


    /**
     * BUILD A ROW
     * This will build a table row.
     * @access private
     * @since 0.2.0
     * @param array $row contains row data.
     * @return string
     */
    private function _buildRow($row)
    {
        $o = '';
        $o .= $this->_HTML->tr(true, $row['class']);
        foreach ( $row['cells'] as $cell) {
            $o .= $this->_buildCell($cell);
        }
        $o .= $this->_HTML->tr(false);
        return $o;
    }


    /**
     * BUILD A CELL
     * @access private
     * @since 0.2.0
     * @param array $cell contains cell data.
     * @return string
     */
    private function _buildCell($cell)
    {
        if ( $cell['type'] == 'th') {
            return $this->_HTML->th($cell['content'], $cell['class'], $cell['id']);
        }
        if ( $cell['type'] == 'td') {
            return $this->_HTML->td($cell['content'], $cell['class'], $cell['id']);
        }
    }

}