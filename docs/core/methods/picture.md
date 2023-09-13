# HAPEL Core Method Reference

---
## \<picture ...>


### Description

Creates a `<picture>` html tag.

```php
picture($sources, $src, $alt, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                           | Required  | Default |
|-------------------------------------|-----------|---------|
| [sources](../attributes/sources.md) | yes       |         |
| [$src](../attributes/src.md)        | yes       |         |
| [$alt](../attributes/alt.md)        | no        | null    |
| [$class](../attributes/class.md)    | no        | null    |
| [$id](../attributes/id.md)          | no        | null    |
| [$style](../attributes/style.md)    | no        | null    |
| [$data](../attributes/data.md)      | no        | null    |
| [$attr](../attributes/attr.md)      | no        | null    |

 
### Return Values

`string`


### Example

Usage:
```php
$sources = [
    [
        'media' => '650px',
        'srcset' => 'large.jpg'
    ],
    [
        'media' => '350px',
        'srcset' => 'small.jpg'
    ]
];

echo picture($sources, 'default.jpg', 'altText', 'myClass');
```
Result:
```html
<picture class="myClass">
    <source media="(min-width: 650px)" srcset="large.jpg">
    <source media="(min-width: 350px)" srcset="small.jpg">
    <img src="default.jpg" alt="altText" />
</picture>
```