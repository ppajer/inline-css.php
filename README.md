# inline-css.php

This handy little tool manages all your stylesheets in one place. Optimized for page speed, inline-css separates your styles into critical above-the-fold styles and low-priority styles that can be left to be loaded later during the page load process.

Above-the-fold styles get inlined into the `<head>` section of your HTML to reduce the number of HTTP requests the browser has to make to load visible content.
Below-the-fold styles get moved to `<link>` tags at the end of your HTML `<body>`. This reduces the time required for the user to start interacting with your site, while keeping the full experience intact after all assets finished loading.

## Initialization
To begin, include `inline-css.php` in your project and initialize the class with your styles. The constructor takes a single array as parameter. This array can have two keys, `aboveFold` and `belowFold` which must each be arrays of URIs pointing to stylesheets.
```php
require 'path/to/inline-css.php';

$styles = array(
  'aboveFold' => array(
    'path/to/style.css',
    'another/stylesheet.css'
  ),
  'belowFold' => array(
    'not/so/important/styles.css'
  )
);

$inlineCss = new InlineCss($styles);
```

## Usage in page templates
After the class has been initialized, you can use its templating methods to include all necessary styles in your pages.
```php

<head>
  <!-- This will inline all your critical styles for faster request and load time. -->
  <?php $inlineCss->aboveFoldStyles(); ?>
</head>
<body>
  <div id="yourAwesomeContent">
    ...
  </div>
  <!-- These styles can be left to load later to keep initial parsing to a minimum. -->
  <?php $inlineCss->belowFoldStyles(); ?>
</body>

```

## Other methods
There are also methods available to include additional styles on the go as either links or inlined CSS to allow more flexibility in its usage.
```php
$inlineCss->linkCSS('path/to/css'); // Links a single stylesheet as <link> tag.

$inlineCss->inlineCSS('path/to/css'); // Parses your CSS into a <style> block.
´´´
