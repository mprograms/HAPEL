# HAPEL Core Method Reference

---
## \<link ...>


### Description

Creates a `<link>` html tag.

```php
link($rel, $href, $type, $attr);
```

### Parameters

| Parameter                       | Required  | Default |
|---------------------------------|-----------|---------|
| [$rel](../attributes/rel.md)    | yes       |         |
| [$href](../attributes/href.md)  | yes       |         |
| [$type](../attributes/type.md)  | yes       |         |
| [$attr](../attributes/attr.md)  | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo link('stylesheet', 'style.css');
```
Result:
```html
<link rel="stylesheet" href="style.css" />
```