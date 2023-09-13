# HAPEL Core Method Reference

---
## \<input ...>


### Description

Creates a `<input>` html tag.

```php
input($type, $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                                    | Required  | Default |
|----------------------------------------------|-----------|---------|
| [$type](../attributes/type.md)               | no        | null    |
| [$name](../attributes/name.md)               | no        | null    |
| [$value](../attributes/value.md)             | no        | null    |
| [$required](../attributes/required.md)       | no        | false   |
| [$placeholder](../attributes/placeholder.md) | no        | null    |
| [$class](../attributes/class.md)             | no        | null    |
| [$id](../attributes/id.md)                   | no        | null    |
| [$style](../attributes/style.md)             | no        | null    |
| [$data](../attributes/data.md)               | no        | null    |
| [$attr](../attributes/attr.md)               | no        | null    |

 
### Return Values

`string`


### Example

Usage:
```php
echo input('text', 'fname', 'First Name', 'Enter your First Name', 'inputClass');
```
Result:
```html
<input type="text" name="fname" value="First Name" placeholder="Enter your First Name" class="inputClass">
```