# HAPEL Core Method Reference

---
## \<map ...>


### Description

Creates a `<map>` html tag.

```php
form($child, $name, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                          | Required  | Default |
|------------------------------------|-----------|---------|
| [$child](../attributes/child.md)   | no        | false   |
| [$name](../attributes/name.md)     | no        | null    |
| [$class](../attributes/class.md)   | no        | null    |
| [$id](../attributes/id.md)         | no        | null    |
| [$style](../attributes/style.md)   | no        | null    |
| [$data](../attributes/data.md)     | no        | null    |
| [$attr](../attributes/attr.md)     | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo map('...', 'mall-map');
```
Result:
```html
<map name="mall-map">...</map>
```