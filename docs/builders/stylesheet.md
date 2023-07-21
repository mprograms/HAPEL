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

Method           | Use
-----------------|---------------------------
addSelector      | Used to set the element selector.
addProp          | Used to set the property and value for the selected element.


### Adding a Selector

To add a selector use the `addSelector($selector, ...$property)` method. This method takes two parameters:

Method           | Use
-----------------|---------------------------
$selector        | Any valid css selector can be used. Example: 'div', '#myId', '.myClass'
$property        | Used to set the property and value for the selected element.

To create a selector for all DIVs we would do this: 
```php
 $s->addSelector('div', {PROPERTY});
```

Note that {PROPERTY} is used in the above example because we have not yet looked at how to use the second parameter. We will do that now.


### Adding a Property & Value

To add a property and value to the created selector, you use the `addProp($property, $value)` function.

Method           | Use
-----------------|---------------------------
$property        | Can be any valid css selector. For example: 'color', 'background', 'font-size'.
$value           | Used to set the value of the property. Example: 'white', '#F7E9B9', '14px'.

For example:

```php
    $s->addSelector('div',
        $s->addProp('color', 'white')
    );
```

### Getting Compiled Code

To output the compiled stylesheet code, we use `get($minify)` like so:

```php
echo $s->get();
```

Output:

```html
<style>
    div {
        color: white;
    }
</style>
```

You can also return minified css by passing `true` to `get()`.

```php
echo $s->get(true);
```

Output:

```html
<style>div{color:white;}</style>
```

### Putting It All Together

Let's say we want to style all `DIVs` with a `blue background` with `white text`. We would do this like so:

```php
    $s->addSelector('div',
        $s->addProp('color', 'white'),
        $s->addProp('background', 'blue')
    );
```

Notice how multiple properties were set using the `addProp()` method. The `addSelector($selector, ...$property)`
method makes use of PHP's [Variable-Length Argument Lists](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list).
This allows you to add as many properties as you need.

For example, if we wanted to set the `font-size` and `font-weight` as well, we would use:

```php
    $s->addSelector('div',
        $s->addProp('color', 'white'),
        $s->addProp('background', 'blue'),
        $s->addProp('font-size', '14px'),
        $s->addProp('font-weight', 'bold')
    );
```



HAPEL will output the following code:

```html
<style>
    div {
        color: white;
        background: blue;
        font-size: 14px;
        font-weight: bold;
    }
</style>
```

