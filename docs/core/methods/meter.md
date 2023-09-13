# HAPEL Core Method Reference

---
## \<meter ...>


### Description

Creates a `<meter>` html tag.

```php
meter($text, $value, $min, $max, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$text](../attributes/text.md)   | no        | false   |
| [$value](../attributes/value.md) | no        | 0       |
| [$min](../attributes/min.md)     | no        | 0       |
| [$max](../attributes/max.md)     | no        | 100     |
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
echo meter('Volume 25%', 25, 0, 100, 'volume-meter');
```
Result:
```html
<meter value="25" min="0" max="100" class="volume-meter">Volume 25%</meter>
```