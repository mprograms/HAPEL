# HAPEL Builder Reference

---
## Stylesheet Class

### Description

The `\HAPEL\Builder\Stylesheet()` class allows for the creation of stylesheets.

---



### Getting Started

HAPEL already loads the Stylesheet Class automatically so all you need to do is to create an instance of
the class like so:

```php
    $t = new \HAPEL\Builder\Stylesheet();
````


### Selectors & Properties

HAPEL Stylesheet Builder uses two primary methods of setting the property and value for a given element.

| Method                                 | Use                                            |
|----------------------------------------|------------------------------------------------|
| addSelector($selector, ...$properties) | Sets the element selector.                     |
| addProp($name, $value)                 | Sets the property and value for each selector. |


### Adding a Selector

To add a selector use the `addSelector($selector, ...$property)` method. This method takes two parameters:

| Parameter   | Type          | Default | Required | Expected Values                                         | 
|-------------|---------------|---------|----------|---------------------------------------------------------|
| $selector   | string, array |         | Yes      | Any valid selector. Example `div`, `#myId`, `.myClass`. |
| $property   | object        |         | Yes      | Needs to be a valid `addProp()` object.                 |


### Adding a Property & Value

To add a property and value to the created selector, you use the `addProp($property, $value)` function.

| Parameter | Type   | Default | Required | Expected Values                                                          | 
|-----------|--------|---------|----------|--------------------------------------------------------------------------|
| $property | string |         | Yes      | Any valid css property. Example `color`, `font-size`, `border`.          |
| $value    | string |         | Yes      | Any valid property value. Example: `white`, `1rem`, `solid 2px #CCCCCC`  |



### Getting Generated Code

To output the generated stylesheet code, we use the `get()` method which takes the following parameters:

| Parameter | Type   | Default | Required | Expected Values                                                         | 
|-----------|--------|---------|----------|-------------------------------------------------------------------------|
| $minify   | bool   | false   | No       | True: Created compact, minified code.                                   |


### Setting Multiple Properties At Once
The `addSelector($selector, ...$property)` function makes use of PHP's
[Variable-Length Argument Lists](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list),
allowing you set multiple properties in a single `addSelector()` call.



### Examples

```php
$s->addSelector(
    'body',
    $s->addProp('background', '#ff9800')
    );

$s->addSelector(
    'h1',
    $s->addProp('font-size', '50px'),
    $s->addProp('font-family', 'Arial, sans-serif'),
    $s->addProp('text-align', 'center')
    );

echo $s->get();
);
```


```html
<style rel="text/css">
body {
   background: #ff9800;
   color: #FFF;
}
h1 {
   font-size: 50px;
   font-family: Arial, sans-serif;
   text-align: center;
}
</style>
```