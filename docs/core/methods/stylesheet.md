# HAPEL Core Method Reference

---
##\<link rel="stylesheet" ...>


###Description

Creates a `<link rel="stylesheet">` html tag.

```php
styleLink($href, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$href](../attributes/href.md)          | yes       |
[$attr](../attributes/attr.md)          | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo styleLink('myStyle.css');
```
Result:
```html
<link rel="stylesheet" type="text/css" href="myStyle.css">
```