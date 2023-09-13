# HAPEL Builder Reference

---
## Lists

### Description

The `\HAPEL\Builder\Lists()` class allows for the creation of ordered `<ol>`, unordered `<ul>`, and definition lists `<dl>`.

---


### Getting Started

HAPEL already loads the Lists Class automatically so all you need to do is to create an instance of
the class like so:

```php
$Lists = new \HAPEL\Builder\Lists();
````

---

### Ordered & Unordered Lists

Ordered and unordered lists can be easily created with the methods:
```php
// Make a <ol>
makeOL($items, $class, $id, $attr);

// Make a <ul>
makeUL($items, $class, $id, $attr);
``` 

#### Method Parameters
Both methods take the following parameters:


| Parameter                          | Type          | Required | Default | Use                                    |
|------------------------------------|---------------|----------|---------|----------------------------------------|
| $items                             | array         | yes      | null    | The items to add to the list           |
| [$class](../core/Attributes/class) | string, array | no       | null    | The class of the wrapper.              |
| [$id](../core/Attributes/id)       | string        | no       | null    | The id of the wrapper.                 |
| [$attr](../core/Attributes/attr)   | array         | no       | 'ul'    | Additional attributes for the wrapper. |


#### $items Values

The `$items` parameter is an array that holds the structure for the list.
This value can either be a `string` or an `array` based on your construction needs.
Simple lists, may only require strings, while more complex list might require the use of arrays.

*Using Strings:*
Allows the most basic lists to be created.
```php
$items = [
    $content
];
```

*Using Arrays:*
Note that arrays allow the use of additional parameters such as class and child lists.
```php
$items = [
    [$content, $children, $class, $id, $attr]
];
```

Details on available parameters are defined in the following table:

| Parameter                          | Type          | Required | Default | Use                                                                                         |
|------------------------------------|---------------|----------|---------|---------------------------------------------------------------------------------------------|
| $content                           | string        | yes      | null    | The content to add to the list.                                                             |
| $children                          | array         | no       | null    | A nested array of children to create. Child arrays use the same parameters in this table.   |
| [$class](../core/Attributes/class) | string, array | no       | null    |                                                                                             |
| [$id](../core/Attributes/id)       | string        | no       | null    |                                                                                             |
| [$attr](../core/Attributes/attr)   | string, array | no       | null    |                                                                                             |


### Examples

#### Creating a Simple List

Usage: 
```php
$items = [
    'Item 1',
    'Item 2',
    'Item 3'
];
echo $Lists->makeUL($items, 'my-class')`
```

Result:
```html
<ul class="my-class">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>
```

#### Adding Classes to List Items

Usage:
```php
$items = [
    'Item 1',
    ['Item 2', null, 'another-class'],
    'Item 3'
];
echo $Lists->makeUL($items, 'my-class')`
```

Result:
```html
<ul class="my-class">
    <li>Item 1</li>
    <li class="another-class">Item 2</li>
    <li>Item 3</li>
</ul>
```

Note the use of the `null` value in the above array. This is the value for the child parameter.
To make this a nested array, add an array in place of the `null` value.

#### Creating Nested Lists

Usage:
```php
$items = [
    'Item 1',
    [
        'Item 2',
         ['A','B','C'],
         'another-class'
     ],
    'Item 3'
];

echo $Lists->makeUL($items, 'my-class')`
```

Result:
```html
<ul class="my-class">
    <li>Item 1</li>
    <li class="another-class">Item 2
        <ul>
            <li>A</li>
            <li>B</li>
            <li>C</li>
        </ul>
    </li>
    <li>Item 3</li>
</ul>
```


---



### Definition Lists

To create a Definition List, use the method:
```php
makeDL($items, $class, $id, $attr);
``` 
#### Method Parameters

The method takes the following parameters:

| Parameter                          | Type            | Required | Default | Use                                    |
|------------------------------------|-----------------|----------|---------|----------------------------------------|
| $items                             | array           | yes      | null    | The items to add to the list           |
| [$class](../core/Attributes/class) | string, array   | no       | null    | The class of the wrapper.              |
| [$id](../core/Attributes/id)       | string          | no       | null    | The id of the wrapper.                 |
| [$attr](../core/Attributes/attr)   | array           | no       | null    | Additional attributes for the wrapper. |

#### $items Parameters

The `$items` parameter is an array that has the following structure:

```php
 $items = [
    [$dt, $dd];
 ];
```

| Parameter   | Type          | Required | Default | Use           |
|-------------|---------------|----------|---------|---------------|
| $dt         | string, array | yes      | null    | The dt value. |
| $dd         | string, array | yes      | null    | The dd value. |

Both the `$dt` and `$dd` values can be arrays. This allows you to specify additional parameters such as class.

*Using Strings:*
Allows the most basic lists to be created.
```php
$items = [
    [$dt, $dd]
];
```

*Using Arrays:*
Note that arrays allow the use of additional parameters such as class.
```php
$items = [
    [
        [$dt, $class, $id, $attr],
        [$dd, $class, $id, $attr],
    ]
];
```

When using arrays, you can use the following parameters:

| Parameter                          | Type          | Required | Default | Use                                    |
|------------------------------------|---------------|----------|---------|----------------------------------------|
| $content                           | string        | yes      | null    | The content for the `dt` / `dd` item.  |
| [$class](../core/Attributes/class) | string, array | no       | null    |                                        |
| [$id](../core/Attributes/id)       | string        | no       | null    |                                        |
| [$attr](../core/Attributes/attr)   | string, array | no       | null    |                                        |



### Examples

#### Basic Usage


Usage:
```php
$items = [
    ['Title 1', 'Description here.'],
    ['Title 2', 'Description here.']
];

echo $Lists->makeDL($items, 'my-class')`
```

Result:
```html
<dl class="my-class">
    <dt>Title 1</dt>
    <dd>Description here.</dd>
    <dt>Title 2</dt>
    <dd>Description here.</dd>
</dl>
```

#### Cetting Class & Other Attributes

Usage:
```php
$items = [
    ['Title 1', 'Description here.'],
    ['Title 2', 'Description here.']
];

echo $Lists->makeDL($items, 'my-class')`
```

Result:
```html
<dl class="my-class">
    <dt>Title 1</dt>
    <dd>Description here.</dd>
    <dt>Title 2</dt>
    <dd>Description here.</dd>
</dl>
```