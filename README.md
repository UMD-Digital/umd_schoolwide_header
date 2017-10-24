INTRODUCTION
------------

Provides a simple interface for adding the [UMD Schoolwide Header](https://umd-header.umd.edu/generator/) to Drupal 8 sites
in the University of Maryland system.

This module was created by [idfive](http://idfive.com) for the University of Maryland.

VERSION
-------

Please use the latest release for your version of drupal from the [releases page](https://github.com/UMD-Digital/umd_schoolwide_header/releases).


INSTALLATION
------------

Install as usual, see
https://www.drupal.org/docs/8/extending-drupal-8/installing-modules for further
information.

This module can also be added to projects via composer, with something similar to the following (adjust release version as necessary):

```javascript
  "repositories": {
    "umd_schoolwide_header": {
    "type": "package",
      "package": {
          "name": "UMD-Digital/umd_schoolwide_header",
          "version": "8x-1.0",
          "source": {
              "url": "https://github.com/UMD-Digital/umd_schoolwide_header.git",
              "type": "git",
              "reference": "8x-1.0"
          },
          "type": "drupal-module"
      }
    },
    "require": {
        "UMD-Digital/umd_schoolwide_header": "8x-1.0"
    }
  ```

Configuration
-------------

Add embed code to /admin/config/umd_schoolwide_header/config
* This may be added with or without the script tags, the module will strip if needed.
* A default is provided, so a default configuration will be loaded if left blank.


TROUBLESHOOTING
---------------

* Check for JS errors in console, and be sure to clear site caches.
* Check for CSS conflicts with your theme.
