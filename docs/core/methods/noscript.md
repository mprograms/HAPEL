# HAPEL Core Method Reference

---
## \<noscript ...>


### Description

Creates a `<noscript>` html tag.

```php
noscript($child, $attr);
```

### Parameters

| Parameter                       | Required  | Default |
|---------------------------------|-----------|---------|
| [$child](../attributes/text.md) | yes       | false   |
| [$attr](../attributes/attr.md)  | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo noscript('Please enable javascript');
```
Result:
```html
<noscript>Please enable javascript.</noscript>
```