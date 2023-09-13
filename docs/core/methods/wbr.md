# HAPEL Core Method Reference

---
## \<wbr ...>


### Description

Creates a `<wbr>` html tag.

```php
wbr($class, $id, $style, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$class](../attributes/class.md) | no        | null    |
| [$id](../attributes/id.md)       | no        | null    |
| [$style](../attributes/style.md) | no        | null    |
| [$attr](../attributes/attr.md)   | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo wbr('myClass');
```
Result:
```html
<wbr class="myClass">
```