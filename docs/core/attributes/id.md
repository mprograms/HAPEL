# HAPEL Method Parameters

---

## $id
### (null|string), (optional), default: null

Adds the id attribute to an HTML tag.

Value      | Use
-----------|-------------
null       | prevents the attribute from being added
string     | adds the value of 'string' as the attribute


### Examples:

##### Adding an id:
```php
$id = 'home-page';
```
```html
<tag id="home-page" {...}
```