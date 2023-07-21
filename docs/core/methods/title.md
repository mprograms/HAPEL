# HAPEL Core Method Reference

---
##\<title ...>


###Description

Creates a `<title>` html tag.

```php
title($child);
```

###Parameters

Parameter                           | Required  | Default
------------------------------------|-----------|--------------
[$child](../attributes/child.md)    | no        | true


###Return Values

`string`


###Example

Usage:
```php
echo title('Hello World');
```
Result:
```html
<title>Hello World</title>
```