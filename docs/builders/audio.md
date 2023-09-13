# HAPEL Builder Reference

---
## Audio

### Description

The `\HAPEL\Builder\Audio()` class allows for the creation of complete `<audio>` components.

---


### Getting Started

HAPEL already loads the Audio Class automatically so all you need to do is to create an instance of
the class like so:

```php
$A = new \HAPEL\Builder\Audio();
````



### Creating Audio Components

To create an audio component, call the `get()` method:

```php
echo $A->get($class, $id, $style, $data, $attr);
````

The `get()` method takes the [standard](../core/methods/standard.md) HAPEL core parameters.

### Setting Audio Component Attributes

To set or unset additional `audio` parameters such as `autoplay` or `sources`, call one of the related methods below:

| HTML Attribute | Default | Set Method             | Unset Method    |
|----------------|---------|------------------------|-----------------|
| autoplay       | false   | setAutoplay()          | unsetAutoplay() |
| control        | false   | setControls()          | unsetControls() |
| loop           | false   | setLoop()              | unsetLoop()     |
| muted          | false   | setMuted()             | unsetMuted()    |
| preload        | 'none'  | setPreload($preload)   | unsetPreload()  |
| source         |         | setSource($src, $type) | unsetSources()  |
| src            |         | setSrc($src)           | unsetSrc()      |


#### setPreload() Parameters

| Parameter | Type   | Default     | Required  | Expected Values            | 
|-----------|--------|-------------|-----------|----------------------------|
| $value    | string | 'none'      | No        | 'none', 'auto', 'metadata' |


#### setSource() Parameters

| Parameter | Type   | Default      | Required | Expected Values                   | 
|-----------|--------|--------------|----------|-----------------------------------|
| $src      | string | 'none'       | Yes      |                                   |
| $type     | string | 'audio/mp3'  | No       | Usually will be 'audio/{format}'  |


#### setSrc() Parameters

| Parameter | Type   | Default | Required | Expected Values | 
|-----------|--------|---------|----------|-----------------|
| $src      | string |         | Yes      |                 |

### Examples

#### Basic Usage

Usage: 
```php
$A = new \HAPEL\Builder\Audio();
$A->setControls();
$A->setSrc('chicken.mp3')
echo $A->get('my-player');
```

Result:
```html
<audio class="my-player" controls="controls" src="chicken.mp3"></audio>
```

#### Using Sources
Usage:
```php
$A = new \HAPEL\Builder\Audio();
$A->setControls();
$A->setSource('chicken.mp3');
$A->setSource('chicken.ogg', 'audio/ogg');
echo $A->get('my-player');
```

Result:
```html
<audio class="my-player" controls="controls">
    <source src="chicken.mp3" type="audio/mp3">
    <source src="chicken.ogg" type="audio/ogg">
</audio>
```

#### Setting & Unsetting Sources

Let's say you want to create two audio components without calling a new instance. You can do this by using the unset methods.

Usage:
```php
$A = new \HAPEL\Builder\Audio();
$A->setControls();

$A->setSource('chicken.mp3');
echo $A->get();

$A->unsetSources();

$A->setSource('cow.mp3');
echo $A->get();


```

Result:
```html
<audio>
    <source src="chicken.mp3" type="audio/mp3">
</audio>

<audio>
    <source src="cow.mp3" type="audio/mp3">
</audio>
```