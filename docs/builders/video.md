# HAPEL Builder Reference

---
## Video

### Description

The `\HAPEL\Builder\Video()` class allows for the creation of complete `<video>` components.

---


### Getting Started

HAPEL already loads the Video Class automatically so all you need to do is to create an instance of
the class like so:

```php
$V = new \HAPEL\Builder\Video();
````



### Creating Video Components

To create a video component, call the `video()` method:

```php
echo $V->get($class, $id, $style, $data, $attr);
````

The `get()` method takes the [standard](../core/methods/standard.md) HAPEL core parameters.

### Setting Video Component Attributes

To set or unset additional `get` parameters such as `autoplay` or `sources`, call one of the related methods below:

| HTML Attribute | Default | Set Method              | Unset Method    |
|----------------|---------|-------------------------|-----------------|
| autoplay       | false   | setAutoplay()           | unsetAutoplay() |
| control        | false   | setControls()           | unsetControls() |
| height         |         | setHeight($height)      | unsetHeight()   |
| loop           | false   | setLoop()               | unsetLoop()     |
| muted          | false   | setMuted()              | unsetMuted()    |
| poster         |         | setPoster($src)         | unsetPoster()   |
| preload        | 'none'  | setPreload($preload)    | unsetPreload()  |
| source         |         | setSource($src, $type)) | unsetSources()  |
| src            |         | setSrc($src)            | unsetSrc()      |
| width          |         | setWidth($width)        | unsetWidth()    |


#### setHeight() Parameters

| Parameter | Type | Default | Required  | Expected Values | 
|-----------|------|---------|-----------|-----------------|
| $height   | int  |         | No        |                 |


#### setPoster() Parameters

| Parameter | Type   | Default | Required | Expected Values | 
|-----------|--------|---------|----------|-----------------|
| $src      | string |         | Yes      |                 |


#### setPreload() Parameters

| Parameter | Type   | Default     | Required  | Expected Values            | 
|-----------|--------|-------------|-----------|----------------------------|
| $value    | string | 'none'      | No        | 'none', 'auto', 'metadata' |


#### setSource() Parameters

| Parameter | Type   | Default     | Required | Expected Values                  | 
|-----------|--------|-------------|----------|----------------------------------|
| $src      | string | 'none'      | Yes      |                                  |
| $type     | string | 'video/mp4' | No       | Usually will be 'video/{format}' |


#### setSrc() Parameters

| Parameter | Type   | Default | Required | Expected Values | 
|-----------|--------|---------|----------|-----------------|
| $src      | string |         | Yes      |                 |


#### setWidth() Parameters

| Parameter | Type | Default | Required | Expected Values | 
|-----------|------|---------|----------|-----------------|
| $width    | int  |         | Yes      |                 |


### Examples

#### Basic Usage

Usage: 
```php
$V = new \HAPEL\Builder\Video();
$V->setControls();
$V->setSrc('fireworks.mp4')
echo $V->get('my-player');
```

Result:
```html
<video class="my-player" controls="controls" src="fireworks.mp4"></video>
```

#### Using Sources
Usage:
```php
$V = new \HAPEL\Builder\Video();
$V->setControls();
$V->setSource('fireworks.mp4');
$V->setSource('fireworks.avi', 'video/avi');
echo $V->get('my-player');
```

Result:
```html
<video class="my-player" controls="controls">
    <source src="fireworks.mp4" type="video/mp4">
    <source src="fireworks.avi" type="video/avi">
</video>
```

#### Setting & Unsetting Sources

Let's say you want to create two video components without calling a new instance. You can do this by using the unset methods.

Usage:
```php
$V = new \HAPEL\Builder\Video();
$V->setControls();

$V->setSource('plane.mp4');
echo $V->get();

$V->unsetSources();

$V->setSource('boat.mp4');
echo $A->get();
```

Result:
```html
<video>
    <source src="plane.mp4" type="video/mp4">
</video>

<video>
    <source src="boat.mp4" type="video/mp4">
</video>
```