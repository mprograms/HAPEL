# HAPEL Core Method Reference

---
## \<areaa ...>


### Description

Creates a `<area>` html tag.

```php
area($shape, $coords, $href, $rel, $alt, $attr);
```

### Parameters

| Parameter                        | Required | Default |
|----------------------------------|----------|---------|
| $shape                           | yes      | null    |
| $coords                          | yes      | null    |
| [$href](../attributes/href.md)   | res      | null    |
| [$rel](../attributes/rel.md)     | no       | null    |
| [$alt](../attributes/alt.md)     | no       | null    |
| [$attr](../attributes/attr.md)   | no       | null    |

### Return Values

`string`


### Example

Usage:
```php
echo area('square', '10,40,50,40', 'link.html', 'nofollow', 'click me');
```
Result:
```html
<area shape="square" coords="10,40,50,40" href="link.html" rel="nofollow" alt="Click me"/>
```