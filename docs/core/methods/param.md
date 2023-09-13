# HAPEL Core Method Reference

---
## \<param ...>


### Description

Creates a `<param>` html tag.

```php
param($name, $value, $attr);
```

### Parameters

| Parameter                        | Required | Default |
|----------------------------------|----------|---------|
| [$name](../attributes/name)      | no       | null    |
| [$value](../attributes/value.md) | no       | null    |
| [$attr](../attributes/attr.md)   | no       | null    |


### Return Values

`string`

### Example

Usage:
```php
echo param('autoplay', 'true');
```
Result:
```html
<param name="autoplan" value="true">
```