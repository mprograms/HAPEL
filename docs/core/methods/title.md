# HAPEL Core Method Reference

---
## \<title ...>


### Description

Creates a `<title>` html tag.

```php
title($text);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$text](../attributes/text.md)   | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo title('Hello World');
```
Result:
```html
<title>Hello World</title>
```