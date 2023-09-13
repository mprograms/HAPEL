# HAPEL Core Method Reference

---
## \<label ...>


### Description

Creates a `<label>` html tag.

```php
label($child, $for, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$child](../attributes/child.md) | no        | false   |
| $for                             | no        | null    |
| [$class](../attributes/class.md) | no        | null    |
| [$id](../attributes/id.md)       | no        | null    |
| [$style](../attributes/style.md) | no        | null    |
| [$data](../attributes/data.md)   | no        | null    |
| [$attr](../attributes/attr.md)   | no        | null    |

 
### Return Values

`string`


### Example

Usage:
```php
echo label('First Name','first-name');
```
Result:
```html
<label for="first-name">First Name</label>
```