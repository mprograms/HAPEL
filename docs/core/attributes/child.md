# HAPEL Method Parameters

---

## $child
### (null|bool|string|array), (required)

Opens, closes or creates the content for the tag to wrap. 

Value      | Use
-----------|-------------
true       | opens the tag
false      | closes the tag
string     | wraps the contents of 'string' with the tag
array      | Only used for getUL(), getOL(), and getDT() methods!!


### Examples:

##### Opening a tag:
```php
$child = true;
```
```html
<tag>
```

##### Closing a tag:
```php
$child = false;
```
```html
</tag>
```

##### Wrapping content in a tag:
```php
$child = 'My content here';
```
```html
<tag>My Content here</tag>
```