# HAPEL Core Method Reference

---
##\<script ...>


###Description

Creates a `<script>` html tag for an external script.

```php
scriptLink($src, $type, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$src](../attributes/src.md)            | yes       |
[$type](../attributes/type.md)          | no        | 'text/javascript'
[$attr](../attributes/attr.md)          | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo scriptLink('myScript.js');
```
Result:
```html
<script type="text/javascript" src="myScript.js"></script>
```