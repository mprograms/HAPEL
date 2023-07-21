# HAPEL Builder Reference

---
## Table Class

### Description

The `\HAPEL\Builder\Table()` class allows for the creation of html tables.

---



### Getting Started

HAPEL already loads the Table Builder Class automatically so all you need to do is to create an instance of
the class like so:

```php
    $t = new \HAPEL\Builder\Table();
````





### Adding Rows & Columns

Several of HAPEL's Table Builder Class methods make use of PHP's [Variable-Length Argument Lists](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list).
This allows you to add any number of arguments to a specific method.
You will find this feature used in several methods that add content to a table.
Methods that use this feature will display (...$arg) in the method reference table below.

For example, let's say you wanted to create a row with two columns. Here is how you would do that
using the `addRow(...$arg)` method:

```php
    $t->addRow(
        $t->addTD('Bob'),
        $t->addTD('Jones')
    );
```

Need three columns? No problem. Add as many columns as you need: 
```php
    $t->addRow(
        $t->addTD('Bob'),
        $t->addTD('Jones'),
        $t->addTD('123 Main St')
    );
```

We have created our row but now we need to add that to the body of the table. We can do that like this:

```php
$t->appendTBody(
    $t->addRow(
        $t->addTD('Bob'),
        $t->addTD('Jones'),
        $t->addTD('123 Main St')
    )
);
```

If we wanted to add another row to the table we can simply call `appendTBody()` again like so:
```php
$t->appendTBody(  
    $t->addRow(
        $t->addTD('Sam'),
        $t->addTD('Smith'),
        $t->addTD('123 Main St')
    )
);
```

Running multiple calls to `appendTBody()` works (and sometimes is useful), but it is not the most efficient way to
make more rows. Like the `addRow(...$arg)` method, `appendTBody(...$arg)` also can take multiple arguments.
To add multiple rows at one time you would do so like this:

```php
$t->appendTBody(
    $t->addRow(
        $t->addTD('Bob'),
        $t->addTD('Jones'),
        $t->addTD('123 Main St')
    ),
    $t->addRow(
        $t->addTD('Sam'),
        $t->addTD('Smith'),
        $t->addTD('541 Elm St')
    )
);
```

We have now put all the data we need into our table and are ready to display it. We do this by calling `get()`
Note that we must echo this output if we want to display it since the `get()` method returns our code.

```php
echo $t->get();
```

### Method Reference Table


Method                                  | Use
----------------------------------------|---------------------------
setClass($class)                        | Sets the class attribute for the table. `<table class="myClass"></table>`.                
setId($id)                              | Sets the id attribute for the table. `<table id="myId"></table>`.
appendTHead(...$row)                    | Adds rows to the `<thead></thead>` section.
appendTBody(...$row)                    | Adds rows to the `<tbody></tbody>` section.
appendTFoot(...$row)                    | Adds rows to the `<tfoot></tfoot>` section.
clearTHead($i)                          | Removes content from `<thead></thead>` section. If $i (int) is set, only the number row will be removed. Calling this without the $i parameter, will delete everything.
clearTBody($i)                          | Removes content from `<tbody></tbody>` section. If $i (int) is set, only the number row will be removed. Calling this without the $i parameter, will delete everything.
clearTFoot($i)                          | Removes content from `<tfoot></tfoot>` section. If $i (int) is set, only the number row will be removed. Calling this without the $i parameter, will delete everything.
addRow(...$row)                         | Adds a row `<tr></tr>`.
addTH($content, $class, $id)            | Adds a `<th></th>` cell. Class and id are optional. If set they will add the class and id attributes to the cell.  
addTD($content, $class, $id)            | Adds a `<td></td>` cell. Class and id are optional. If set they will add the class and id attributes to the cell.
setRowClass($class)                     | Sets the class of a `<tr class="myClass"></tr>`.        
unsetRowClass()                         | Removes the previously set class. This is called to prevent the defined row class from being applied to the next row.
unsetAll()                              | Removes all table rows and content as well as any defined classes or ids. Use this method to clear all data and settings from a previously made table before creating a new table.
get()                                   | Returns the compiled html table code.



### More Examples

Find more examples of using the Table Builder Class:

* [Table Builder Class Basics](/examples/builder/table_basic.php)
* [Table Builder Class with Loops](/examples/builder/table_loop.php)