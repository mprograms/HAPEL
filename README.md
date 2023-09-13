
![HAPEL](hapel_logo.png)



# What is HAPEL?

Welcome to HAPEL: HTML And PHP Embedded Library.

HAPEL is a PHP library that allows for rapid coding of html within your PHP applications without the need to write html
markup. HAPEL makes it possible to stay within PHP 100% of the time, eliminating the need to add HTML fragments to your
code or embed long strings of HTML markup. With HAPEL you write less code and get more done faster.

# Why use HAPEL?

* **Stay In PHP:** Keep all your code in PHP and avoid floating html fragments througout your application.
* **No Clutter:** HAPEL streamlines repetitive code and saves having to write many lines of code across your
  application.
* **Code Faster:** Using HAPEL to create HTML output requires less code and less time.
* **Fully Customizable:** HAPEL allows you to easily extend its baked-in functions to create your own html output.
* **Fast Render:** HAPEL renders HTML lightning fast.
* **Component Builders** HAPEL makes creating complex components and labor-intensive markup easy. 

# Brief History

HAPEL was born in the early 2008 as a private utility to make coding PHP applications faster, easier, and less
cluttered. HAPEL and its previous versions have been used to power countless PHP applications and full production
websites. Over the years, HAPEL has become more streamlined and new functions have been added as HTML has evolved.
In 2018 HAPEL's core began an overhaul to allow for more control and easier creation of custom components and plugins.
During this time, HAPEL's developer decided to make the library available for public use. 

# Requirements

+ Minimum PHP 5.6

---

# How Does HAPEL Work?

In order to see how HAPEL works, we will create a select input box with several names. We will also add a function to
compare the current value with the options and ensure the matching option is selected.

Below we will take a look at two common methods of creating such a component.
Then we will take a look at creating the same component with HAPEL.

## Common Method 1: Embedding HTML

```php
<?php
$values = ['bob', 'bill', 'brenda', 'blake', 'britney'];
?>
<select name="person" class="person-select">
<?php foreach ( $values as $value ) { ?>
<option value="Bob" <?php echo $value == $name ? 'selected="selected"' : ''; ?>><?php echo $value; ?></option>
<?php } ?>
</select>
```

This works but is messy and prone to mistakes. Let's try another common method:

## Common Method 2: Echoing HTML

```php
<?php
$values = ['bob', 'bill', 'brenda', 'blake', 'britney'];
echo '<select name="person" class="person-select">';
foreach ( $values as $value ) { 
    echo '<option value="Bob" ' . $value == $name ? 'selected="selected"' : '' . '>' . $value . '</option>';
echo '</select>';
```

That's a little better but still a lot to type. Let's use HAPEL to do that same thing.

## HAPEL Method

```php
echo $h->inputSelect('person, ['Bob', 'Bill', 'Brenda', 'Blake', 'Britney'], 'Brenda', false, 'person-select);
```

In the above example, not only did HAPEL result in nearly 60% less keystrokes, the code is cleaner and more condensed. Additionally, HAPEL handled all the heavy lifting for you; looping, comparing values, and building the code all within a single function.

This makes coding faster and less error-prone.

## Reusable Code

Another area that HAPEL shines is reusability. Let's suppose that we needed to add two select inputs.

Our traditional code might look like this:

```php
<?php
$values = ['Bob', 'Bill', 'Brenda', 'Blake', 'Britney'];
echo '<select name="person" class="person-select">';
foreach ( $values as $value ) { 
    echo '<option value="Bob" ' . $value == $name ? 'selected="selected"' : '' . '>' . $value . '</option>';
echo '</select>';

$values1 = ['Peter', 'Patrick', 'Paula', 'Parker', 'Penelope'];
echo '<select name="person" class="person-select2">';
foreach ( $values as $value ) { 
    echo '<option value="Paula" ' . $value == $name ? 'selected="selected"' : '' . '>' . $value . '</option>';
echo '</select>';
```

And again using HAPEL:

```php
echo $h->inputSelect('person', ['Bob', 'Bill', 'Brenda', 'Blake', 'Britney'], 'Bob', false, 'person-select');
echo $h->inputSelect('person2', ['peter', 'patrick', 'paula', 'parker', 'penelope'], 'Paula', false, 'person-select');
```

---

## Getting Started

Below we will go over the basics of installing and using HAPEL in your project.

1. [Installing HAPEL](#installing-hapel)
2. [Including the HAPEL Library](#including-the-hapel-library)
3. [Using the HAPEL HTML Class](#using-the-hapel-html-class)
4. [Generating HTML Output](#generating-html-output)
5. [Displaying HTML Output](#displaying-html-output)
6. [Setting HTML Tag Attributes](#setting-html-tag-attributes)
7. [Opening and Closing Tags](#opening-and-closing-tags)
8. [Custom Tags](#custom-tags)
9. [Custom Attributes](#custom-attributes)
10. [Builders Classes](#builders)
11. [Reference Docs](#reference-docs)
13. [Examples](#examples)
14. [Contributing to HAPEL](#contributing-to-hapel)

---

### Installing HAPEL

HAPEL can be installed with composer or by downloading a release.

> #### Composer
> 
> You can install HAPEL with composer from the [HAPEL Repository](https://github.com/mprograms/HAPEL/).
 
> #### Packaged Releases
> 
> You can download one of the [HAPEL Releases](https://github.com/mprograms/HAPEL/releases).
>
> If you have downloaded a release, extract the package. You will find three directories: `docs`, `examples`, and `src`.
All of HAPEL's library is contained in the `src` directory. Make sure you copy this directory and its content into 
your project. You may also want to include the other two directories, `docs` and `examples`, for testing and learning
purposes.

### Including the HAPEL Library
   
Include the HAPEL library in your project's code by using `require_once()`. This should be placed in your project's
main file that loads classes.

For example, if we place the hapel directory in root, we can include it like so:

```php
require_once( dirname(__DIR__) . '/hapel/src/hapel.php' );
```

### Using the HAPEL HTML Class

At the core of HAPEL is the HTML Class (`\HAPEL\Html()`), which is the primary method of building HTML code.
HAPEL also includes other helpful classes known as [Builders](#builders). These allow you to create more complex html
elements and components. These are discussed later on in this document.

For now, it is important to get to know the Html Class.

To create a new HAPEL HTML Class we simply call the `Html()` method like so:

```php
$h = new \HAPEL\Html();
```

### Generating HTML Output

To build HTML code we need to use the relevant function for the component we want to create. Most functions are named
the same as their html counterpart. This makes finding the correct method easy.

For example, to create a DIV, we use the `div()` method like so:

 ```php
$h->div('Hello World!');
 ```

To create a paragraph we use `p()`:

 ```php
$h->p('Hello World!');
 ```

To create an image we use `img()`:

 ```php
$h->img('pic.jpg');
 ```

### Displaying HTML Output

All of HAPEL's Classes return their output allowing you to pass output to other functions and variables. As a result, you must `echo`
all the output you wish to display.

 ```php
echo $h->div('Hello World!');
 ```

Output

 ```html
<div>Hello World!</div>
 ```

### Setting HTML Tag Attributes

HTML elements don't just have content, they also have attributes such as class, id, styles, etc. HAPEL makes it easy to
define these. Most HAPEL HTML Class methods follow the [HAPEL Standard Parameter Schema](docs/core/methods/standard.md).
This is a single, common parameter schema that defines the same parameters in the same order, regardless of the method.

The HAPEL Standard Parameter Schema looks like this:

```php
  $h->method($child, $class, $id, $style, $data, $attr);
```

For example, to create a DIV with a class of `myClass` and the id of `myId` we would call `div()` like so:

 ```php
    $h->div('Hello World!', 'myClass', 'myId');
 ```
Output:

 ```html
    <div class="myText" id="myId">Hello World!</div>
 ```

### Opening and Closing Tags

So far we have looked at creating tags that contain child content such as `<div>Hello World!</div>`.

We can also create opening `<div>` and closing `</div>` tags easily.

#### Opening Tags

To open a tag call `tag(true)`. For example, to open a DIV, call it like so:

 ```php
    $h->div(true);
 ```


#### Closing Tags

To close a tag call `tag(false)` or `tag()`. Both methods accomplish the same thing. For example, to close a DIV, call it like so:

 ```php
    $h->div(false);
    $h->div();
 ```


#### Opening, Closing & Child Content Example

Let's put this all together now and create an example of all three ways to create a tag:

 ```php
    $h->section(true, 'posts');
        $h->div(true);
            $h->div(true, 'article');
              $h->h2('Article Headline', 'title');
              $h->p('This is text for the article...');
            $h->div(false);
        $h->div();
    $h->section();
 ```

 Output:

 ```html
  <section class="posts">
      <div>
        <div class="article">
          <h2 class="title">Article Headline</h2>
          <p>This is text for the article...</p>
        </div>
      </div>
 </section>

 ```


### Custom Tags

 HAPEL already has the most common HTML elements (tags) already built into its core HTML Class, however, you may find
 that you need to add an element that does not exist. You can easily do this by calling the  `myTag()` method.

For example, if you want to create a tag called "gutter", you would do so like this:

```php
 $h->myTag('gutter');
```

The `myTag()` method follows the [HAPEL Standard Parameter Schema](docs/core/methods/standard.md) so the most
common perameters are available to you. For example:

```php
 $h->myTag('gutter', 'myClass', 'myId');
```


### Custom Attributes

HAPEL's HTML Class Methods allow the setting of the most common attributes directly from the method call.
It is not practical, however, to accept every possible attribute in this way. HAPEL has a built-in way of
defining additional or custom attributes for almost all HTML Class Methods.

As we have looked at, most methods follow the [HAPEL Standard Parameter Schema](docs/core/methods/standard.md). As
a reminder, this looks like this:

```php
  $h->method($child, $class, $id, $style, $data, $attr);
```
The last parameter, called `$attr` allows you to define your own custom attributes.

For example, let's say we need to create a DIV with the attribute of `role="button"`. We can do this like so:

```php
    $h->div('Click Me!', 'myClass', 'myId', '', '', ['role'=>'button']);
```

```html
    <div class="myClass" id="myId" role="button">Click Me!</div>
```

**A Note About Methods Not Following the HAPEL Standard Parameter Schema:**

Some special case methods, such as `a()`, `img()`, or `meta()` may not have an `$attr` parameter, or it may be called
in a different way. You should consult the [HAPEL Core Method Reference](docs/core/core_method_reference.md)
to learn which methods have special cases.


### Builders

HAPEL also contains specialized classes called Builders. These classes help to create complex components more easily and
with less code.

Let's take a look at a Builder class called the [Table Builder](docs/builders/table.md) and how it is
used to create a table:

```php
    $t = new \HAPEL\Builder\Table();
    
    $t->appendTBody(
        $t->addRow(
            $t->addTD('Bob'),
            $t->addTD('Jones'),
            $t->addTD('123 Main St')
        ),
        $t->addRow(
            $t->addTD('Sam'),
            $t->addTD('Smith'),
            $t->addTD('541 Elm St')
        )
    );

    echo $t->get();
```

This will output the following:

```html
<table>
    <tbody>
    <tr>
        <td>Bob</td>
        <td>Jones</td>
        <td>123 Main Street</td>
    </tr>
    <tr>
        <td>Sam</td>
        <td>Smith</td>
        <td>541 Elm Street</td>
    </tr>
    </tbody>
</table>
```


### Reference Docs

HAPEL contains extensive documentation.

* HAPEL Core HTML Class 
    * [HTML Class Method Reference](docs/core/core_method_reference.md)
    * [HTML Class Attribute Reference](docs/core/core_attribute_reference.md)
* HAPEL Builder Classes
  * [Full Builder List](docs/builders/builders_reference.md)
    * [Audio](docs/builders/audio.md)
    * [Canvas](docs/builders/canvas.md)
    * [Details](docs/builders/details.md)
    * [Figure](docs/builders/figure.md)
    * [Form](docs/builders/form.md)
    * [Imagemap](docs/builders/imagemap.md)
    * [Lists](docs/builders/lists.md)
    * [Picture](docs/builders/picture.md)
    * [Stylesheet](docs/builders/stylesheet.md)
    * [svg]
    * [Table](docs/builders/table.md)
    * [Video](docs/builders/video.md)


### Examples

* Example code can be found in the [examples](examples) directory.
* A full [boilerplate example](examples/boilerplate.php) can also be found under examples.
  This example uses HAPEL to create an entire HTML page.
* You can also find individual examples of specific methods in the [Documentation](docs/).

### Contributing to HAPEL

Please review these guidelines before contributing to make the process easy and effective for everyone.

* Issues & Feature Requests
    * The issue tracker is the preferred method for bug reports and feature requests.
    * Please do not use the issue tracker for personal support requests.
* Feature Requests
    * Feature requests are welcome, however you should consider:
        * If the library already has an established method to acomplish what you want.
        * If the feature will improve the usability for the majority of users.
        * If the feature fits with the scope and purpose of the library.
* Forks, Pulls & Merges
    * Please ask the developer first before beginning any significant work, so that you do not risk spending a great
      deal of time on code that the developer may not want to merge.
    * Please adhere to the coding conventions and practices used throughout the project. This includes class / method
      naming, case, placement of brackets, whitespace, comments, documentation, etc.
    * By submitting additional features into this project, you agree to allow the project owner to license your work
      under the same license used by the project. 