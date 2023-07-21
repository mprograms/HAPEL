# HAPEL Core Method Reference

---
##\<html ...>


###Description

Creates a `<html>` html tag.

```php
html($child, $lang, $attr);
```

###Parameters

Parameter                           | Required  | Default
------------------------------------|-----------|--------------
[$child](../attributes/child.md)    | no        | true
[$lang](../attributes/lang.md)      | no        | 'en'
[$attr](../attributes/attr.md)      | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo html(true, 'en');
```
Result:
```html
<html lang="en">
```