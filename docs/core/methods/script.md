# HAPEL Core Method Reference

---
##\<script ...>


###Description

Creates a `<script>` html tag.

```php
script($child, $type, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$child](../attributes/child.md)        | yes       | true
[$type](../attributes/type.md)          | no        | 'text/javascript'
[$attr](../attributes/attr.md)          | no        | null


###Return Values

`string`


###Example

Usage:
```php
echo script('alert("Hello World")');
```
Result:
```html
<script type="text/javascript">
alert("Hello World");
</script>
```