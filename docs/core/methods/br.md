# HAPEL Core Method Reference

---
##\<br ...>


###Description

Creates a `<br>` html tag.

```php
br($class, $id, $style, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$class](../attributes/class.md)    | no        | null
[$id](../attributes/id.md)          | no        | null
[$style](../attributes/style.md)    | no        | null
[$attr](../attributes/attr.md)      | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo br('myClass');
```
Result:
```html
<br class="myClass">
```