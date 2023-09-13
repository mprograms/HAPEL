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

We have created our row, but now we need to add that to the body of the table. We can do that like this:

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

Running multiple calls to `appendTBody()` works (and sometimes is useful - such as in loops), but it is not the most efficient way to
make more rows. Like the `addRow(...$arg)` method, `appendTBody(...$arg)` can also take multiple arguments.
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

Now that we have put all the data we need into our table, we need to display it. We do this by calling `get()`
Note that we must echo this output if we want to display it since the `get()` method returns our code.

```php
echo $t->get();
```

### Method Reference Table

| Method                         | Use                                                                                                                                  |
|--------------------------------|--------------------------------------------------------------------------------------------------------------------------------------|
| setClass($class)               | Sets the class value for the table.                                                                                                  | 
| setId($id)                     | Sets the id attribute for the table.                                                                                                 | 
| appendTHead(...$row)           | Adds rows to the `<thead>` section.                                                                                                  |
| appendTBody(...$row)           | Adds rows to the `<tbody>` section.                                                                                                  |
| appendTFoot(...$row)           | Adds rows to the `<tfoot>` section.                                                                                                  |
| clearTHead($i)                 | Removes content from `<thead>` section. If `$i` is set, only that row will be removed. If `$i` is not set, all rows will be removed. |
| clearTBody($i)                 | Removes content from `<tbody>` section. If `$i` is set, only that row will be removed. If `$i` is not set, all rows will be removed. |
| clearTFoot($i)                 | Removes content from section. If `$i` is set, only that row will be removed. If `$i` is not set, all rows will be removed.           |
| addRow(...$row)                | Adds a row `<tr>`.                                                                                                                   |
| addTH($content, $class, $id)   | Adds a `<th>` cell.                                                                                                                  |
| addTD($content, $class, $id)   | Adds a `<td><` cell.                                                                                                                 |
| setRowClass($class)            | Sets the class of a `<tr>`.                                                                                                          |
| unsetRowClass()                | Removes the previously set row class.                                                                                                |
| unsetAll()                     | Removes all table content, including cells, rows, classes, etc.                                                                      |
| get()                          | Returns the compiled html table code.                                                                                                |




### More Examples

Find more examples of using the Table Builder Class:

* [Table Builder Class Basics](/examples/builder/table-basic.php)
* [Table Builder Class with Loops](/examples/builder/table-loop.php)