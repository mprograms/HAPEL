# HAPEL Core Method Reference

---
## \<track ...>


### Description

Creates a `<track>` html tag.

```php
track($src, $kind, $srclang, $label, $attr);
```

### Parameters

| Parameter                      | Required  | Default     |
|--------------------------------|-----------|-------------|
| [$src](../attributes/src)      | no        | null        |
| $kind                          | no        | 'subtitles' |
| $srclang                       | no        | 'en'        |
| $label                         | no        | 'English'   |
| [$attr](../attributes/attr.md) | no        | null        |


### Return Values

`string`

### Example

Usage:
```php
echo track('subtitles.vtt', 'subtitles', 'en', 'English');
```
Result:
```html
<track src="subtitles.vtt" kind="subtitles" srclang="en" label="English">
```