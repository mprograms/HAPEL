# HAPEL Core Method Reference

---
## \<link rel="stylesheet" ...>


### Description

Creates a `<link rel="stylesheet">` html tag.

```php
stylesheet($href, $attr);
```

### Parameters

| Parameter                      | Required  | Default |
|--------------------------------|-----------|---------|
| [$href](../attributes/href.md) | yes       | null    |
| [$attr](../attributes/attr.md) | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo stylesheet('style.css');
```
Result:
```html
<link rel="stylesheet" type="text/css" href="style.css">
```