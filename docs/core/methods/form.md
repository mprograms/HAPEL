# HAPEL Core Method Reference

---
##\<form ...>


###Description

Creates a `<form>` html tag.

```php
form($child, $method, $action, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$child](../attributes/child.md)        | no        | true
[$method](../attributes/method.md)      | no        | null
[$action](../attributes/action.md)      | no        | null
[$class](../attributes/class.md)        | no        | null
[$id](../attributes/id.md)              | no        | null
[$style](../attributes/style.md)        | no        | null
[$data](../attributes/data.md)          | no        | null
[$attr](../attributes/attr.md)          | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo form('...', 'get','send.php');
```
Result:
```html
<form method="get" action="send.php">...</form>
```