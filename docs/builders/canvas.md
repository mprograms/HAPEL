# HAPEL Builder Reference

---
## Canvas

### Description

The `\HAPEL\Builder\Canvas()` class allows for the creation of complete `<canvas>` components.

---


### Getting Started

HAPEL already loads the Canvas Class automatically so all you need to do is to create an instance of
the class like so:

```php
$A = new \HAPEL\Builder\Canvas();
````



### Creating Canvas Components

To create a canvas component, call the `get()` method:

```php
echo $A->get($script, $external, $class, $id, $style, $data, $attr);
````

| Parameter                             | Type          | Default      | Required  | Expected Values                                                                          | 
|---------------------------------------|---------------|--------------|-----------|------------------------------------------------------------------------------------------|
| $script                               | string        | `none`       | Yes       | Either the script or link to script.                                                     |
| $external                             | bool          | `false`      | No        | `TRUE`: Set `$script` to path to file. `FALSE`: Set `$script` to your embedded script.   |
| [$class](../core/attributes/class.md) | string, array | `null`       | No        |                                                                                          |
| [$id](../core/attributes/id.md)       | string        | `null`       | No        |                                                                                          |
| [$style](../core/attributes/style.md) | string, array | `null`       | No        |                                                                                          |
| [$data](../core/attributes/data.md)   | array         | `null`       | No        |                                                                                          |
| [$attr](../core/attributes/attr.md)   | array         | `null`       | No        |                                                                                          |


### Examples

#### Using External Script

Usage: 
```php
$c = new \HAPEL\Builder\Canvas();
$script = 'myscript.js';
echo $c->get($script, true);
```

Result:
```html
<canvas>Your browser does not support canvas.</canvas>
<script src="myscript.js" type="text/javascript"></script>
```

#### Using Embedded Script
Usage:
```php
$c = new \HAPEL\Builder\Canvas();
$script = '
    let canvas = document.getElementById("my-canvas");
    let sq = canvas.getContext("2d");
    sq.fillStyle = "#006699";
    sq.fillRect(0, 0, 250, 250);
';
echo $c->get($script, false, null, 'my-canvas');
```

Result:
```html
<canvas id="my-canvas">Your browser does not support canvas.</canvas>
<script type="text/javascript">
    let canvas = document.getElementById("my-canvas");
    let sq = canvas.getContext("2d");
    sq.fillStyle = "#006699";
    sq.fillRect(0, 0, 250, 250);
</script>
```