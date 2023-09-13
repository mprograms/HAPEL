# HAPEL Builder Reference

---
## Image Map

### Description

The `\HAPEL\Builder\Imagemap()` class allows for the creation of complete `<img .../><map><area></map>` components.

---


### Getting Started

HAPEL already loads the Image Map Class automatically so all you need to do is to create an instance of
the class like so:

```php
$I = new \HAPEL\Builder\Imagemap();
````


### Setting Image

To create the image used in the image map, call:

```php
$I->setImg($src, $width, $height, $alt, $class, $id, $style, $data, $attr);
````

The `setImg()` method takes the following parameters:

| Parameter                          | Type          | Required | Default |
|------------------------------------|---------------|----------|---------|
| [$src](../core/attributes/src)     | string        | yes      |         |
| $width                             | int           | no       | null    |
| $height                            | int           | no       | null    |
| [$alt](../core/attributes/alt)     | null, string  | no       | null    |
| [$class](../core/attributes/class) | string, array | no       | null    |
| [$id](../core/attributes/id)       | string        | no       | null    |
| [$style](../core/attributes/style) | array         | no       | null    |
| [$data](../core/attributes/data)   | array         | no       | null    |
| [$attr](../core/attributes/attr)   | array         | no       | null    |



### Setting The Areas

To create the areas used to define the image map, call:

```php
$I->addArea($shape, $coords, $href, $rel, $alt, $attr);
````

The `addArea()` method takes the following parameters:

| Parameter                          | Type          | Required | Default | Expected Values                     |
|------------------------------------|---------------|----------|---------|-------------------------------------|
| $shape                             | string        | yes      |         | 'default', 'rect', 'circle', 'poly' |
| $coords                            | string        | yes      |         |                                     |
| [$href](../core/attributes/class)  | string        | yes      |         |                                     |
| [$rel](../core/attributes/class)   | string, array | no       | null    |                                     |
| [$alt](../core/attributes/alt)     | null, string  | no       | null    |                                     |
| [$attr](../core/attributes/attr)   | array         | no       | null    |                                     |



### Showing the Image Map Component

To show the fully coded image map, call the `get()` method:

```php
echo $I->get($name);
````

| Parameter | Type          | Required | Default | Use                        |
|-----------|---------------|----------|---------|----------------------------|
| $name     | string        | yes      |         | The name of the image map. |


### Examples

Usage: 
```php
$I = new \HAPEL\Builder\Imagemap();

$I->setImg('my-image.jpg', 200, 100, 'My Photo');
$I->addArea('rect', '0,0,100,100', 'page1.html');
$I->addArea('rect', '101,0,200,100', 'page2.html');

echo $I->get('imgmap');
```

Result:
```html
<img src="my-image.jpg" alt="My Photo" width="200", height="100" usemap="#imgmap"/>
<map name="imgmap">
    <area shape="rect" coords="0,0,100,100" href="page1.html" />
    <area shape="rect" coords="101,0,200,100" href="page2.html" />
</map>
```