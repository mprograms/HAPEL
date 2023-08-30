# HAPEL

Welcome to HAPEL (Html And Php Embedded Library)!

---

## What is HAPEL?

HAPEL is a PHP library that allows for rapid coding of html within your PHP applications without having to write html
markup. HAPEL makes it possible to stay within PHP 100% of the time, eliminating the need to add HTML fragments to your
code or embed long strings of HTML markup. With HAPEL you write less code and get more done faster.

## Why use HAPEL?

* **Stay In PHP:** Keep all your code in PHP and avoid floating html fragments througout your application.
* **No Clutter:** HAPEL streamlines repetitive code and saves having to write many lines of code across your
  application.
* **Code Faster:** Using HAPEL to create HTML output requires less code and less time.
* **Fully Customizable:** HAPEL allows you to easily extend its baked-in functions to create your own html output.
* **Fast Render:** HAPEL renders HTML lightning fast.
* **Component Builders** HAPEL makes creating complex components and labor-intensive markup easy. 

## Brief History

HAPEL was born in the early 2009 as a private utility to make coding PHP applications faster, easier, and less
cluttered. HAPEL and its previous versions have been used to power countless PHP applications and full production
websites. Over the years, HAPEL has become more streamlined and new functions have been added as HTML has evolved.
In 2018 HAPEL's core began an overhaul to allow for more control and easier creation of custom components and plugins.
During this time, HAPEL;s developer decided to make the library available for public use. 

## Requirements

+ Minimum PHP 5.6

---

## How Does HAPEL Work?

Consider the following code used to display some database results in a table:

```php
  $data = $resultsFromDatabase;
  
  echo '<table>';
    echo '<thead>';
      echo '<tr>';
          echo '<th> </th>';
          echo '<th class="photo">Photo</th>';
          echo '<th class="name">Name</th>';
          echo '<th class="addr">Address</th>';
          echo '<th class="tel">Phone</th>';
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ( $data as $record ) {
        echo '<tr>';
        echo '<td><a href="profile.php" class="button" title="'.$record['name'].'">View More</a></th>';
        echo '<td class="photo"><img src="' . $record['photo'] . '" class="image" alt="' . $record['name'] . '"/></td>';
        echo '<td class="name">' . $record['name'] .'</th>';
        echo '<td class="addr">' . $record['address'] .'</th>';
        echo '<td class="tel">' . $record['phone'] .'</th>';
    echo '</tr>';
    }
    echo '</tbody>';
  echo '</table>';

```
Now we will create the same output with HAPEL.

```php
$data = $resultsFromDatabase;

  $t->appendTHead(
    $t->addRow(
        $t->addTH(' '),
        $t->addTH('Photo', 'photo'),
        $t->addTH('Name', 'name'),
        $t->addTH('Address', 'addr'),
        $t->addTH('Phone', 'tel')
    )
  );

foreach ( $data as $record ) {
    $t->appendTBody(
      $t->addRow(
          $t->addTD($h->a('View More', 'profile.php',$record['name'], 'button')),
          $t->addTD($h->img($record['photo'], $record['name'], 'image'), 'photo'),
          $t->addTD($record['name'], 'name'),
          $t->addTD($record['address'], 'addr'),
          $t->addTD($record['phone'], 'tel')
      )
    );
}

echo $t->get();
```

In the above example, coding the same output uses over 25% less characters and requires no concatenating of strings.
This makes coding faster and less error prone.

---

## Getting Started

Below we will go over the basics of installing and using HAPEL in your project.

1. [Installing HAPEL](#installing-hapel)
2. [Including HAPEL](#including-hapel)
3. Create a HAPEL HTML Object
4. Generating HTML Output
5. Displaying HTML Output
6. Setting HTML Tag Attributes
7. Opening & Closing Tags
8. Custom Tags
9. Custom Attributes
10. Builder Classes
11. Plugins
12. Reference Docs
13. Examples 
14. Boilerplate Example

---

### Installing HAPEL

Download the latest stable release of HAPEL, which you can be found from the
[HAPEL Release Repository](https://github.com/mprograms/HAPEL/releases).

Once downloaded, extract the package. You will find three directories: `docs`, `examples`, and `src`.
All of HAPEL's library is contained in the `src` directory. Make sure you copy this directory and its content into 
your project. You may also want to include the other two directories, `docs` and `examples`, for testing and learning
purposes.

Place the `src` directory and contents into your project at the desired location. An example project directory
structure is shown below:
   
```
    MyProject
    + -- inc
    |    + -- css
    |    + -- js
    + -- vendor
    |    + -- hapel (create this directory)
    |    |    + -- src (this is the extracted src directory)
    + -- index.php
```

### Including the HAPEL Library
   
Include the HAPEL library in your project's code by using `require_once()`. This should be placed in your project's
main file that loads classes.

Using the example directory structure above, we will require HAPEL in the index.php file like so:

```php
    $dir = dirname(__DIR__) . '/vendor/hapel/src/hapel.php';
    require_once($dir);
```

### Using the HAPEL HTML Class

At the core of HAPEL is the HTML Class (`\HAPEL\Html()`), which is the primary method of building HTML code.
HAPEL also includes other helpful classes such as [Builders](#builders) and [Plugins](#plugins). These allow you to create more complex html
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

HAPEL's HTML Class Methods return all output allowing you to refine how it is used. As a result, you must `echo`
all to output you wish to display.

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
This is a single, common parameter schema that retains the attributes and their order the same, regardless of
the method.

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

To open a tag call `tag()`. For example, to open a DIV, call it like so:

 ```php
    $h->div();
 ```

You can also open a tag by calling `tag(true)`. This is needed when you  want to create an open tag with an attribute.
For example, to create an open DIV with a class of `myClass` call it like so:

 ```php
    $h->div(true, 'myClass');
 ```

#### Closing Tags

To close a tag call `tag(false)`. For example, to close a DIV, call it like so:

 ```php
    $h->div(false);
 ```


#### Opening, Closing & Child Content Example

Let's put this all together now and create an example of all three ways to create a tag:

 ```php
    $h->section(true, 'posts');
        $h->div();
            $h->div(true, 'article');
              $h->h2('Article Headline', 'title');
              $h->p('This is text for the article...');
            $h->div(false);
        $h->div(false);
    $h->section(false);
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
The last parameter, called `$attr` allow you to define your own custom attributes.

For example, let's say we need to create a DIV with the attribute of `role="button"`. We can do this like so:

```php
    $h->div('Click Me!', 'myClass', 'myId', '', '', array('role'=>'button'));
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

For example, the sample code under "How Does HAPEL Work?" uses the
[Table Builder Class](docs/builders/table.md) to create a table.

Let's take a look at another Builder class called the [Stylesheet Builder](docs/builders/stylesheet.md) and how it is
used to create an inline stylesheet:

```php
    $s = new \HAPEL\Builder\Stylesheet();
    
    $s->addSelector('header',
        $s->addProp('color', 'white'),
        $s->addProp('background', 'red')
    );

    echo $s->get();
```

This will output the following:

```html
<style>
  header {
    color: white;
    background: red;
  }
</style>
```


### Reference Docs

HAPEL contains extensive documentation.

* HAPEL Core HTML Class 
    * [HTML Class Method Reference](docs/core/core_method_reference.md)
    * [HTML Class Attribute Reference](docs/core/core_attribute_reference.md)
* HAPEL Builder Classes
    * [Table](docs/builders/table.md)
    * [Stylesheet](docs/builders/stylesheet.md)
    * [Bulletlist]


### Plugins

// TODO


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