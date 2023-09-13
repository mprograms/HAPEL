<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the table builder class.
$t = new \HAPEL\Builder\Table();


// This is just dummy data for our example.
$data = array(
    array('Bob', 'Jones', '123 Main St', ''),
    array('Sam', 'Smith', '541 Elm St', ''),
    array('Tim', 'Brown', '914 South Ave', ''),
    array('Jane', 'Miller', '764 Pine Ln', ''),
);



// Set a class for the row.
$t->setRowClass('header');

// Add a row to the table body.
$t->appendTHead(
    $t->addRow(
        $t->addTH('First Name', 'fname'),
        $t->addTH('Last Name', 'lname'),
        $t->addTH('Address', 'addr'),
        $t->addTH('Phone', 'tel')
    )
);

// We set a row class earlier. We need to unset it so the class does not get added to our new rows.
$t->unsetRowClass();

// Loop over the data and add it to the table body as a new row.
foreach ( $data as $record ) {
    $t->appendTBody(
        $t->addRow(
            $t->addTD($record[0], 'fname'),
            $t->addTD($record[1], 'lname'),
            $t->addTD($record[2], 'addr'),
            $t->addTD($record[3], 'tel')
        )
    );
}


// Display the table code to the screen. Note we have to echo the output because get() returns the output.

echo $t->get();


