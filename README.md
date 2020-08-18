### Status
- Form type [complete]
- popup [futures]

### Step 1: Use composer and enable Bundle

```bash
composer require yourfrog/symfony-bundle_rodo
```

Now, Composer will automatically download all required files, and install them
for you. All that is left to do is to update your ``AppKernel.php`` file, and
register the new bundle:

```php
<?php

// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new YourFrog\Symfony\Bundle\RodoBundle\RodoBundle(),
    // ...
);
```