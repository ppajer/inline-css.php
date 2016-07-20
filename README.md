# inline-css.php

This handy little tool manages all your stylesheets in one place. Optimized for page speed, inline-css separates your styles into critical above-the-fold styles and low-priority styles that can be left to be loaded later during the page load process.

Above-the-fold styles get inlined into the `<head>` section of your HTML to reduce the number of HTTP requests the browser has to make to load visible content.
Below-the-fold styles get moved to `<link>` tags at the end of your HTML `<body>`. This reduces the time required for the user to start interacting with your site, while keeping the full experience intact after all assets finished loading.