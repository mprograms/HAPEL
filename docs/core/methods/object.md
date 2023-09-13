# HAPEL Core Method Reference

---
## \<object ...>


### Description

Creates an `<object>` html tag.

```php
object($data, $type, $name, $class, $id, $style, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| $data                            | no        | null    |
| [$type](../attributes/type.md)   | no        | null    |
| [$name](../attributes/name.md)   | no        | null    |
| [$class](../attributes/class.md) | no        | null    |
| [$id](../attributes/id.md)       | no        | null    |
| [$style](../attributes/style.md) | no        | null    |
| [$attr](../attributes/attr.md)   | no        | null    |

 
### Return Values

`string`

### Example

Usage:
```php
echo object('video.mp4','video/mp4', null, 'my-video');
```
Result:
```html
<object type="video/mp4" data="video.mp4" class="my-video"></object>
```