# HAPEL Builder Reference

---
## Details

### Description

The `\HAPEL\Builder\Details()` class allows for the creation of complete `<details>` components.

---


### Getting Started

HAPEL already loads the Details Class automatically so all you need to do is to create an instance of
the class like so:

```php
$D = new \lib\builder\Details();
````



### Creating Details Components

To create an details component, call the `details()` method:

```php
echo $D->details($summary, $content, $open, $class, $id, $style, $data, $attr);
````

| Parameter                          | Type          | Required | Default | Use                                                                                                       |
|------------------------------------|---------------|----------|---------|-----------------------------------------------------------------------------------------------------------|
| $summary                           | string        | yes      |         | The contents of the `<summary>` tag.                                                                      |
| $content                           | string        | yes      |         | The contents of the hidden portion. Note: content is unwrapped, allowing you to provide your own wrapper. |
| $open                              | bool          | no       | false   | True will add the `open` parameter.                                                                       |
| [$class](../core/attributes/class) | string, array | no       | null    |                                                                                                           |
| [$id](../core/attributes/id)       | string        | no       | null    |                                                                                                           |
| [$style](../core/attributes/style) | string, array | no       | null    |                                                                                                           |
| [$data](../core/attributes/data)   | array         | no       | null    |                                                                                                           |
| [$attr](../core/attributes/attr)   | array         | no       | null    |                                                                                                           |


### Examples

#### Basic Usage

Usage: 
```php
$D = new \HAPEL\Builder\Details();
echo $D->details('Click Me', 'I am hidden until clicked.');
```

Result:
```html
<details>
    <summary>Click Me</summary>
    I am hidden until clicked.
</details>
```

#### Start Details Open
Usage:
```php
$D = new \HAPEL\Builder\Details();
echo $D->details('Click Me', 'I am hidden until clicked.', true);
```

Result:
```html
<details open="open">
    <summary>Click Me</summary>
    I am hidden until clicked.
</details>
```

#### Setting Additional Parameters
Usage:
```php
$D = new \HAPEL\Builder\Details();
echo $D->details('Click Me', '<p>I am a paragraph.</p><p>So am I.</p>', false, 'my-class');
```

Result:
```html
<details class="my-class" >
    <summary>Click Me</summary>
    <p>I am a paragraph.</p><p>So am I.</p>
</details>
```