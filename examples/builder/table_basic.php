<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 *
 * HAPEL Table Builder Class  - Basic Example
 */

// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);

$h = new \HAPEL\Html();

// Create a new instance of the table builder class.
$t = new \HAPEL\Builder\Table();

/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 1 - OUR FIRST TABLE
 * This is our first table created with the HAPEL Table Builder Class. It has tHead and tBody content.
 */

/** First we add a thead element to our table and then add a row with some cells.  */

echo $h->h1('EXAMPLE 1');

$t->appendTHead(
    $t->addRow(
        $t->addTH('First Name', 'fname'),
        $t->addTH('Last Name', 'lname'),
        $t->addTH('Address', 'addr'),
        $t->addTH('Phone', 'tel')
    )
);

/** Second we add a tbody element to our table along with two rows and cell content. */
$t->appendTBody(
    $t->addRow(
        $t->addTD('Bob', 'fname'),
        $t->addTD('Jones', 'lname'),
        $t->addTD('123 Main St', 'addr'),
        $t->addTH('555-555-5551', 'tel')
    ),
    $t->addRow(
        $t->addTD('Sam', 'fname'),
        $t->addTD('Smith', 'lname'),
        $t->addTD('541 Elm St', 'addr'),
        $t->addTD('555-555-5552', 'tel')
    )
);

/** Here we echo the returned html output. */
echo $t->get();


/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 2 - ADDING ATTRIBUTES TO THE TABLE
 * Now we have added a class to the table. This document has no stylesheet but you can see it if you look at the source code.
 */

echo $h->h1('EXAMPLE 2');

$t->setClass('myTableClass');

echo $t->get();







/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 3 - ADDING MORE ROWS
 * We can also add additional rows to the table after adding several by calling the appendTBody(...$arg) method.
 * You can also use the appendTHead(...$arg) and appendTFoot(...$arg) methods to add rows as well.
 */

echo $h->h1('EXAMPLE 3');

$t->appendTBody(
    $t->addRow(
        $t->addTD('Tim', 'fname'),
        $t->addTD('Brown', 'lname'),
        $t->addTD('914 South Ave', 'addr'),
        $t->addTD('555-555-5553', 'tel')
    )
);

echo $t->get();





/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 4 - CLEARING A SINGLE ROW
 * We can easily clear a specific row from the table by calling clearTBody($i) where $i is the number of the row.
 * The functions clearTHead($i) and clearTFoot($i) can also be used to clear row data from those specific areas.
 * Note that this data is an array so the first row will be 0.
 */

echo $h->h1('EXAMPLE 4');

$t->clearTBody(0);

echo $t->get();


/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 5 - CLEARING All ROWS
 * By calling clearTBody(), we will remove all row data. We can also call clearTHead() and clearTFoot() to clear
 * all rows from those specific areas as well.
 */

echo $h->h1('EXAMPLE 5');

$t->clearTBody();

echo $t->get();



/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 6 - ADDING MORE DATA AFTER A CLEAR
 * Here we run appendTBody(...$arg) again to add row data back into the table body. Note that other table settings
 * such as header and class remain unaltered.
 */

echo $h->h1('EXAMPLE 6');

$t->appendTBody(
    $t->addRow(
        $t->addTD('Jane', 'fname'),
        $t->addTD('Miller', 'lname'),
        $t->addTD('764 Pine Ln', 'addr'),
        $t->addTD('555-555-5554', 'tel')
    )
);

echo $t->get();

/**
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * EXAMPLE 7 - CLEARING / RESETTING ALL TABLE DATA & SETTINGS
 * If we are creating multiple tables using the same instance of the Table Builder Class, we need to reset the table
 * settings and remove existing row data. To do this we call unsetAll().
 */

echo $h->h1('EXAMPLE 7');

$t->unsetAll();

echo $t->get();