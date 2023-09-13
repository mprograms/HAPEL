# HAPEL Core Method Reference

---
## \<input type="time" ...>


### Description

Creates a `<input type="time">` html tag.

```php
time($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                                     | Required  | Default         |
|-----------------------------------------------|-----------|-----------------|
| [$name](../attributes/name.md)                | no        | null            |
| [$value](../attributes/value.md)              | no        | null            |
| [$required](../attributes/required.md)        | no        | false           |
| [$placeholder](../attributes/placeholder.md)  | no        | null            |
| [$class](../attributes/class.md)              | no        | null            |
| [$id](../attributes/id.md)                    | no        | null            |
| [$style](../attributes/style.md)              | no        | null            |
| [$data](../attributes/data.md)                | no        | null            |
| [$attr](../attributes/attr.md)                | no        | null            |

 
### Return Values

`string`


### Example

Usage:
```php
echo time('start');
```
Result:
```html
<input type="time" name="start">
```