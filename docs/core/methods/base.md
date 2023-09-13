# HAPEL Core Method Reference

---
## \<base ...>


### Description

Creates a `<base>` html tag.

```php
base($href, $target);
```

###Parameters

| Parameter                          | Required | Default  |
|------------------------------------|----------|----------|
| [$href](../attributes/href.md)     | no       | null     |
| [$target](../attributes/target.md) | no       | 'blank'  |


### Return Values

`string`


### Example

Usage:
```php
echo base('/content', '_blank');
```
Result:
```html
<base href="/content" target="_blank">
```