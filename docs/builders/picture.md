# HAPEL Builder Reference

---
## Picture

### Description

The `\HAPEL\Builder\Picture()` class allows for the creation of complete `<picture>` components.

---


### Getting Started

HAPEL already loads the Picture Class automatically so all you need to do is to create an instance of
the class like so:

```php
$P = new \HAPEL\Builder\Picture();
````



### Creating Picture Components

To create a picture component, call the `picture()` method:

```php
echo $P->get($class, $id, $style, $data, $attr);
````

The `get()` method takes the [standard](../core/methods/standard.md) HAPEL core parameters.

### Setting Picture Component Attributes

To set or unset additional `picture` parameters such as `image` or `sources`, call one of the related methods below:

| HTML Attribute | Default | Set Method                                            | Unset Method   |
|----------------|---------|-------------------------------------------------------|----------------|
| source         |         | setSource($scrset, $media)                            | unsetSources() |
| img            |         | setImg($src, $alt, $class, $id, $style, $data, $attr) | unsetImg()     |


#### setSource() Parameters

| Parameter | Type          | Default | Required | Expected Values                                                   | 
|-----------|---------------|---------|----------|-------------------------------------------------------------------|
| $srcset   | string        |         | Yes      |                                                                   |
| $media    | string, array |         | Yes      | If array, must be key/value pair. Key = attribute, Value = value. |


#### setImg() Parameters

| Parameter                        | Type   | Default | Required | Expected Values | 
|----------------------------------|--------|---------|----------|-----------------|
| $src                             | string |         | Yes      |                 |
| $alt                             | string | null    | No       |                 |
| [$class](../attributes/class.md) | no     | null    | No       |                 |
| [$id](../attributes/id.md)       | no     | null    | No       |                 |
| [$style](../attributes/style.md) | no     | null    | No       |                 |
| [$data](../attributes/data.md)   | no     | null    | No       |                 |
| [$attr](../attributes/attr.md)   | no     | null    | No       |                 |

### Examples

#### Basic Usage

Usage: 
```php
$P = new \HAPEL\Builder\Picture();
$P->setImg('photo.jpg', 'Alt Text');
echo $P->get();
```

Result:
```html
<picture>
    <img src="photo.jpg" alt="Alt Text"/>
</picture>
```



#### Setting Sources

Note the use of both strings and arrays for the `$media` parameter.
Also note that when using an array, each key/value will be generated with the word `AND` between them.
If you need to use `or` or `not`, pass a string.

Usage:
```php
$P = new \HAPEL\Builder\Picture();

$P->setImg('photo.jpg', 'Alt Text');

$P->setSource('photo_small.jpg', '(max-width:800px)');
$P->setSource('photo_large.jpg', ['min-width'=>'801px', 'max-width'=>'1600px']);

echo $P->get();
```

Result:
```html
<picture>
    <img src="photo.jpg" alt="Alt Text"/>
    <source srcset="photo_small.jpg" media="(max-width:800px)"/>
    <source srcset="photo_large.jpg" media="(min-width:801px) AND (max-width:1600px)"/>
</picture>
```


#### Unsetting Sources

Let's say you want to create two picture components without calling a new instance. You can do this by using the unset methods.

Usage:
```php
$P = new \HAPEL\Builder\Picture();
$P->setImg('photo1.jpg', 'Alt Text');
$P->setSource('photo1-small.jpg', ['min-width'=>'650px']);
echo $P->get();

$P->unsetImg();
$P->unsetSources();


$P->setImg('photo2.jpg', 'Alt Text');
$P->setSource('photo2-small.jpg', ['min-width'=>'650px']);
echo $P->get();
```

Result:
```html
<picture>
    <img src="photo1.jpg" alt="Alt Text"/>
    <source srcset="photo1-small.jpg" media="(min-width:650px)"/>
</picture>

<picture>
    <img src="photo2.jpg" alt="Alt Text"/>
    <source srcset="photo2-small.jpg" media="(min-width:650px)"/>
</picture>
```