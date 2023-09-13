# HAPEL Core Method Reference

---
## \<myTag ...>


### Description

Creates a custom html tag. Use this method to create your own custom html tags or tags that are not suported by HAPEL's core.

```php
myTag($tag, $child, $href, $title, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required | Default |
|----------------------------------|----------|---------|
| $tag                             | yes      |         |
| [$child](../attributes/child.md) | no       | false   |
| [$class](../attributes/class.md) | no       | null    |
| [$id](../attributes/id.md)       | no       | null    |
| [$style](../attributes/style.md) | no       | null    |
| [$data](../attributes/data.md)   | no       | null    |
| [$attr](../attributes/attr.md)   | no       | null    |

### Return Values

`string`


### Example

Usage:
```php
echo myTag('handle', 'Drag Me','myClass');
```
Result:
```html
<handle class="myClass">Drag Me</handle>
```