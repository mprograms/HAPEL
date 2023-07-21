# HAPEL Core Method Reference

---
##\<doctype ...>


###Description

Creates a `<!doctype>` html tag.

```php
doctype($type);
```

###Parameters

Parameter                           | Required  | Default
------------------------------------|-----------|----------------
[$type](../attributes/type.md)      | no        | 'html'


###Return Values

`string`


###Example

Usage:
```php
echo doctype('html');
```
Result:
```html
<!doctype html>
```